<?php

namespace App\Livewire\Order;

use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Livewire\Component;

class OrderList extends Component
{
    public $orders;
    public $order_products;
    public $cancelled_order;
    public  $product_out_of_stocks;
    public $product_low_stock;
    public $selected_id;

    public $total_orders;

    public $isOpen=false;
    public $page_id=1;

    function viewOrder($id){

        $this->page_id=2;
    }
    public function render()
    {
        $this->total_orders=Order::count();
        $this->cancelled_order=Order::count();
        $this->product_out_of_stocks= Product::count();
         $this->product_low_stock= Product::count();

        $this->orders= Order::get();
        $this->order_products= OrderProduct::get();

        return view('livewire.order.order-list');
    }

    function enableCancelModal($id){
        $this->isOpen=true;
        $this->selected_id=$id;
    }

    function cancelOrder(){
        Order::where('id',$this->selected_id)
        ->update(['status'=>'cancelled' ]);

        session()->flash('message','successfully updated');
    }

}
