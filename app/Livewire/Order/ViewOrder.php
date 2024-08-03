<?php

namespace App\Livewire\Order;

use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Livewire\Component;

class ViewOrder extends Component
{
    public $orders;

    public function render()
    {
        $order= Order::where('id',session()->get('order_id'))->first();
        $product_ids= OrderProduct::where('order_id',$order->order_id)->pluck('product_id')->toArray();
        $products=Product::whereIn('id',$product_ids)->paginate(10);


        return view('livewire.order.view-order',[
           'products'=>$products,
            'date'=>$order->created_at,
             'status'=>$order->status,
             'order_id'=>$order->order_id,
             'total'=>$order->total,
             'order'=>$order
        ]);
    }
}
