<?php

namespace App\Livewire\Frontend\Product;

use Livewire\Component;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class View extends Component
{
    public $category, $product, $quantityCount = 1;

    public function addToWishList($productId)
    {
        // Gagawin ko to mamaya sa seller center button ;)
        if(Auth::check())
        {
            if(Wishlist::where('user_id', auth()->user()->id)->where('product_id', $productId)->exists())
            {
                session()->flash('message','Already to added to wishlist');
                $this->dispatch('message', text: 'Already to added to wishlist', type: 'warning', status: 409);
                return false;
            }
            else
            {
                 Wishlist::create([
                'user_id' => Auth::user()->id,
                'product_id' => $productId,

            ]);

            $this->dispatch('wishlistAddedUpdated');
            session()->flash('message','Wishlist added succesfully');
            $this->dispatch('message', text: 'Wishlist added succesfully', type: 'success', status: 200);
            }

        }
        else
        {
            session()->flash('message','Please sign up to continue');


             $this->dispatch('message', text: 'Please sign up to continue', type: 'info', status: 401);


            return false;
        }
    }

    public function incrementQuantity()
    {
        if($this->quantityCount < 10)
        {
            $this->quantityCount++;
        }

    }
    public function decrementQuantity()
    {
        if($this->quantityCount > 1)
        {
            $this->quantityCount--;
        }

    }
    public function mount($category, $product)
    {
        $this->category = $category;
        $this->product = $product;
    }
    public function render()
    {
        return view('livewire.frontend.product.view',[
            'category' => $this->category,
            'product'=> $this->product,
    ]);
    }
}
