<?php

namespace App\Livewire\Frontend\Product;

use App\Models\Cart;
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

    public function addToCart(int $productId)
    {
        if(Auth::check())
        {
            // dd($productId);
            if($this->product->where('id',$productId )->where('status', '0')->exists())
            {
                if(Cart::where('user_id', Auth()->user()->id)->where('product_id',$productId )->exists())
                {
                    $this->dispatch('message', text: 'Product Already Added', type: 'success', status: 200);
                }
                else
                {
                    if($this->product->quantity > 0 )
                {
                    if($this->product->quantity > $this->quantityCount)
                    {
                        //insert product to cart
                        Cart::create([
                            'user_id' => auth()->user()->id,
                            'product_id' => $productId,
                            'quantity' => $this->quantityCount
                        ]);
                        $this->dispatch('message', text: 'Product Added to Cart', type: 'success', status: 200);
                    }
                    else
                    {
                        $this->dispatch('message', text: 'Only '.$this->product->quantity.' Quantity Available', type: 'warning', status: 404);
                    }
                }
                else
                {
                    $this->dispatch('message', text: 'Out of Stock', type: 'warning', status: 404);
                }
                }

            }
            else
            {
                $this->dispatch('message', text: 'Product Does not exists', type: 'warning', status: 404);
            }
        }
        else
        {
            $this->dispatch('message', text: 'Please Login To add to cart', type: 'info', status: 401);
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
