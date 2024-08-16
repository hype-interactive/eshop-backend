<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Customer;
use App\Models\Inventory;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Payment;
use App\Models\Product;

class VendorDashboard extends Component
{
    public $total_sales;
    public $onstock_product;
    public $outstock_product;
    public function render()
    {


        $orders= Order::paginate(10);
        foreach($orders as $order){
            $order['customer']= Customer::where('id',$order->customer_id)->value('full_name');

        }

        $this->total_sales=$this->monthlySale();
         $this->onstock_product= $this->productOnMarket();
         $this->outstock_product=$this->productOutTheMarket();

        return view('livewire.dashboard.vendor-dashboard',['orders'=>$orders]);
    }


    function productOnMarket(){
        return Product::where('vendor_id',auth()->user()->id)->addSelect(['quantity'=>Inventory::where('id','inventories.product_id')->cursor()
        ])->count();
    }

    function productOutTheMarket(){
        return  Product::where('vendor_id',auth()->user()->id)
              ->addSelect(['quantity'=>Inventory::where('id','inventories.product_id')->where('quantity',0)->cursor()
              ])->count();
    }

    function monthlySale(){

        $product_ids=Product::where('vendor_id',auth()->user()->id)->pluck('id')->toArray();
        $payent_order_id=Order::pluck('order_id')->toArray();
         $products=OrderProduct::whereIn('order_id',$payent_order_id)->whereIn('product_id',$product_ids)->cursor();
         $amount =0;
         foreach($products as $data){

            $product_amount= Product::where('id',$data->product_id)->value('vendor_price');
            $amount  =   $amount + $product_amount*$data->quantity;
         }

         return $amount;
    }
}
