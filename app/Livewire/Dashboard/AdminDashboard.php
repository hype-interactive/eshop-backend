<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;

class AdminDashboard extends Component
{

     public $total_sales;
     public $new_orders;
     public $registered_product;
     public $total_system_users;
     public $sales_percentage;
     public $sales_comparison;
     public $order_percent;
     public $percentage_change;
     public $registered_product_current_month;
     public $registered_product_previous_month;
     public $total_system_users_current_month;
     public $total_system_users_previous_month;
     public  $percentage_change_user;
     public $difference_for_user;


public $difference;
     public $order_comparison;
    public function render()
    {
        //sales function
        $this->compareSales();
        $this->compareOrders();
        $this->countProducts();
        $this->countUsersAndCustomers();

        $this->total_system_users= User::count() + Customer::count();
        $this->registered_product= Product::count();

        $orders = Order::latest()->take(10)->get();
        foreach($orders as $order){
            $order['customer']= Customer::where('id',$order->customer_id)->value('full_name');

        }
        return view('livewire.dashboard.admin-dashboard',['orders'=>$orders]);
    }


    public function compareSales()
{
    $this->total_sales =Order::where('status','completed')->sum('total');

    // Current month and year
    $currentMonth = now()->month;
    $currentYear = now()->year;

    // Total sales for the current month
    $this->total_sales = Order::where('status', 'completed')
        ->whereMonth('created_at', $currentMonth)
        ->whereYear('created_at', $currentYear)
        ->sum('total') ;

    // Last month and year
    $lastMonth = now()->subMonth()->month;
    $lastYear = now()->subMonth()->year;

    // Total sales for the last month
    $totalSalesLastMonth = Order::where('status', 'completed')
        ->whereMonth('created_at', $lastMonth)
        ->whereYear('created_at', $lastYear)
        ->sum('total');

    // Comparison results
    $this->sales_comparison =  ($this->total_sales - $totalSalesLastMonth) ;


    //percentage comparison
    if($this->total_sales==0 && $totalSalesLastMonth==0){
        $this->sales_percentage=0;
    }
    elseif($this->total_sales==0 && $totalSalesLastMonth != 0){
        $this->sales_percentage=-100;

    }
    else{
        $this->sales_percentage= (($this->sales_comparison)/ $this->total_sales)*100;

    }



}


public function compareOrders()
{
    // Get today's date
    $today = now()->toDateString();

    // Count pending orders for today
    $count_today = Order::where('status', 'pending')
        ->whereDate('created_at', $today)
        ->count();


        $this->new_orders= $count_today?:0;

    // Get yesterday's date
    $yesterday = now()->subDay()->toDateString();

    // Count pending orders for yesterday
    $count_yesterday = Order::where('status', 'pending')
        ->whereDate('created_at', $yesterday)
        ->count();

    // Comparison results
    $this->order_comparison = $count_today - $count_yesterday;


    if($count_today ==0 &&  $count_yesterday==0 ){
        $this->order_percent=0;
    }elseif($count_yesterday != 0 && $count_today ==0){
        $this->order_percent=-100;
    }else{
        $this->order_percent=($this->order_comparison/ $count_yesterday)*100;
    }

}


public function countProducts()
{
    // Get the current month and year
    $currentMonth = Carbon::now()->month;
    $currentYear = Carbon::now()->year;

    // Get the previous month and year
    $previousMonth = Carbon::now()->subMonth()->month;
    $previousYear = Carbon::now()->subMonth()->year;

    // Count products for the current month
    $countCurrentMonth = Product::whereMonth('created_at', $currentMonth)
        ->whereYear('created_at', $currentYear)
        ->count();

    // Count products for the previous month
    $countPreviousMonth = Product::whereMonth('created_at', $previousMonth)
        ->whereYear('created_at', $previousYear)
        ->count();

    // Assign counts to properties
    $this->registered_product_current_month = $countCurrentMonth;
    $this->registered_product_previous_month = $countPreviousMonth;

    //difference
    $this->difference = $countCurrentMonth - $countPreviousMonth;

    //calculate percentage change
    if ($countPreviousMonth == 0) {
        $this->percentage_change = $countCurrentMonth == 0 ? 0 : 100; // If no products last month but some this month, set to 100%
    } else {
        $this->percentage_change = (($countCurrentMonth - $countPreviousMonth) / $countPreviousMonth) * 100;
    }
}



public function countUsersAndCustomers()
{
    // Get the current month and year
    $currentMonth = Carbon::now()->month;
    $currentYear = Carbon::now()->year;

    // Get the previous month and year
    $previousMonth = Carbon::now()->subMonth()->month;
    $previousYear = Carbon::now()->subMonth()->year;

    // Count system users for the current month
    $countUsersCurrentMonth = User::whereMonth('created_at', $currentMonth)
        ->whereYear('created_at', $currentYear)
        ->count();

    // Count customers for the current month
    $countCustomersCurrentMonth = Customer::whereMonth('created_at', $currentMonth)
        ->whereYear('created_at', $currentYear)
        ->count();

    // Total system users and customers for the current month
    $this->total_system_users_current_month = $countUsersCurrentMonth + $countCustomersCurrentMonth;

    // Count system users for the previous month
    $countUsersPreviousMonth = User::whereMonth('created_at', $previousMonth)
        ->whereYear('created_at', $previousYear)
        ->count();

    // Count customers for the previous month
    $countCustomersPreviousMonth = Customer::whereMonth('created_at', $previousMonth)
        ->whereYear('created_at', $previousYear)
        ->count();

    // Total system users and customers for the previous month
    $this->total_system_users_previous_month = $countUsersPreviousMonth + $countCustomersPreviousMonth;

    // Calculate the difference
    $this->difference_for_user = $this->total_system_users_current_month - $this->total_system_users_previous_month;

    // Calculate the percentage change
    if ($this->total_system_users_previous_month == 0) {
        $this->percentage_change_user = $this->total_system_users_current_month == 0 ? 0 : 100; // If no users last month but some this month, set to 100%
    } else {
        $this->percentage_change_user = (($this->difference) / $this->total_system_users_previous_month) * 100;
    }
}


}
