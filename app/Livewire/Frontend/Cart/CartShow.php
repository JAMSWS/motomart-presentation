<?php

namespace App\Livewire\Frontend\Cart;

use Livewire\Component;
use App\Models\Cart;

class CartShow extends Component
{
    public $cart, $totalPrice = 0;

    public function decrementQuantity(int $cartId)
    {
        $cartData = Cart::where('id',$cartId)->where('user_id', auth()->user()->id)->first();
        if($cartData->quantity > 1)
        {
            if($cartData->product->quantity > $cartData->quantity)
            {
                $cartData->decrement('quantity');
                $this->dispatch('message', text: 'Quantity Updated', type: 'success', status: 200);
            }
            else
            {
                $this->dispatch('message', text: 'Only'.$cartData->product->quantity. 'Quantity cannot be less than 1', type: 'success', status: 200);
            }


        }
        else
        {
            $this->dispatch('message', text: 'Quantity cannot be less than 1', type: 'danger', status: 404);
        }
    }


    public function incrementQuantity(int $cartId)
    {

        $cartData = Cart::where('id',$cartId)->where('user_id', auth()->user()->id)->first();
        if($cartData)
        {
            if($cartData->product->quantity > $cartData->quantity)
            {
                $cartData->increment('quantity');
                $this->dispatch('message', text: 'Quantity Updated', type: 'success', status: 200);
            }
            else
            {
                $this->dispatch('message', text: 'Only'.$cartData->product->quantity. 'Quantity Available', type: 'success', status: 200);
            }


        }
        else
        {
            $this->dispatch('message', text: 'Something Went Wrong!', type: 'danger', status: 404);
        }
    }

    public function removeCartItem(int $cartId)
    {
        $cartRemoveData = Cart::where('user_id', auth()->user()->id)->where('id', $cartId)->first();
        if($cartRemoveData)
        {
            $cartRemoveData->delete();
                $this->dispatch('CartAddedUpdated');
                $this->dispatch('message', text: 'Cart Item Remove Successfully', type: 'success', status: 200);

        }else
        {

            $this->dispatch('message', text: 'Something Went Wrong', type: 'error', status: 500);
        }
    }
    public function render()
    {
        $this->cart = Cart::where('user_id', Auth()->user()->id)->get();
        return view('livewire.frontend.cart.cart-show', [
            'cart' => $this->cart
        ]);
    }
}
