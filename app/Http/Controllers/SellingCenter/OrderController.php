<?php

namespace App\Http\Controllers\SellingCenter;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Mail\invoiceOrderMailable;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        // Retrieve only the orders owned by the authenticated user
        $orders = Auth::user()->orders()->paginate(10);

        return view('sellercenter.orders.index', compact('orders'));
    }

    public function show(int $orderId)
    {
        // Retrieve the order only if it belongs to the authenticated user
        $order = Auth::user()->orders()->find($orderId);

        if($order)
        {
            return view('sellercenter.orders.view', compact('order'));
        }
        else
        {
            return redirect('sellercenter/orders')->with('message','Order ID not found');
        }
    }

    public function updateOrderStatus(int $orderId, Request $request)
    {
        // Update the order status only if the order belongs to the authenticated user
        $order = Auth::user()->orders()->find($orderId);

        if($order)
        {
            $order->update([
                'status_message' => $request->order_status
            ]);
            return redirect('sellercenter/orders/'.$orderId)->with('message', 'Order Status Updated');
        }
        else
        {
            return redirect('sellercenter/orders/'.$orderId)->with('message','Order ID not found');
        }
    }

    public function viewInvoice(int $orderId)
    {
        // Retrieve the order only if it belongs to the authenticated user
        $order = Auth::user()->orders()->find($orderId);

        if($order)
        {
            return view('sellercenter.invoice.generate-invoice', compact('order'));
        }
        else
        {
            return redirect('sellercenter/orders')->with('message','Order ID not found');
        }
    }

    public function generateInvoice(int $orderId)
    {
        // Retrieve the order only if it belongs to the authenticated user
        $order = Auth::user()->orders()->find($orderId);

        if($order)
        {
            $data = ['order' => $order];

            $pdf = Pdf::loadView('sellercenter.invoice.generate-invoice', $data);
            $todayDate = Carbon::now()->format('d-m-Y');
            return $pdf->download('Motomart-invoice'.$order->id.'-'.$todayDate.'.pdf');
        }
        else
        {
            return redirect('sellercenter/orders')->with('message','Order ID not found');
        }
    }

    public function mailInvoice(int $orderId)
    {
        // Retrieve the order only if it belongs to the authenticated user
        $order = Auth::user()->orders()->find($orderId);

        try
        {
            Mail::to("$order->email")->send(new invoiceOrderMailable($order));
            return redirect('sellercenter/orders/'.$orderId)->with('message', 'Invoice Mail has been sent to ' .$order->email);

        }
        catch(\Exception $e)
        {
            return redirect('sellercenter/orders/'.$orderId)->with('message', 'Something Went Wrong!');
        }



    }




}
