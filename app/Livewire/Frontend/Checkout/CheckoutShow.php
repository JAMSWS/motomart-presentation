<?php

namespace App\Livewire\Frontend\Checkout;

use App\Models\Cart;
use App\Models\Order;
use Livewire\Component;
use App\Models\Orderitem;
use Illuminate\Support\Str;

class CheckoutShow extends Component
{
    public $carts, $totalProductAmount = 0;

    public $fullname, $email, $phone, $pincode, $address, $payment_mode = NULL, $payment_id = NULL;

    public function rules()
    {
        return [
            'fullname' => 'required|string|max:121',
            'email' => 'required|email|max:121',
            'phone' => 'required|string|max:11|min:11',
            'pincode' => 'required|string|max:4|min:4',
            'address' => 'required|string|max:500',
        ];
    }

    public function placeOrder()
    {
        $this->validate();
        $paymentId = null;

        $order = Order::create([
            'user_id' => auth()->user()->id,
            'tracking_no' => 'motomart-'.Str::random(10),
            'fullname' => $this->fullname,
            'email' => $this->email,
            'phone' => $this->phone,
            'pincode' => $this->pincode,
            'address' => $this->address,
            'status_message' => 'in progress',
            'payment_mode' => $this->payment_mode,
            'payment_id' => $this->payment_id,
        ]);
        foreach($this->carts as $cartItem)
        {
            $orderItems = Orderitem::create([
                'order_id' => $order->id,
                'product_id' =>$cartItem->product_id ,
                'product_color_id' =>$cartItem->product_color_id,
                'quantity' =>$cartItem->quantity,
                'price' =>$cartItem->product->selling_price,
            ]);

        }
        return $order;

    }
    public function OnlinePaymentOrder()
    {
        $this->payment_mode = 'Online Payment';
        $OPOrder = $this->placeOrder();
        if($OPOrder)
        {
            Cart::where('user_id', auth()->user()->id)->delete();

            $this->dispatch('message', text: 'Order Placed Successfully', type: 'success', status: 200);
            return redirect()->to('thank-you');
        }

        else
        {
            $this->dispatch('message', text: 'Something Went Wrong', type: 'error', status: 500);
        }
    }

    public function totalProductAmount()
    {
        $this->carts = Cart::where('user_id', auth()->user()->id)->get();
        foreach($this->carts as $cartItem)
        {
            $this->totalProductAmount +=  $cartItem->product->selling_price * $cartItem->quantity;
        }
        return $this->totalProductAmount;
    }

    public function render()
    {
        $this->fullname = auth()->user()->name;
        $this->email = auth()->user()->email;

        $this->totalProductAmount = $this->totalProductAmount();
        return view('livewire.frontend.checkout.checkout-show', [
            'totalProductAmount' => $this->totalProductAmount
        ]);
    }
}
