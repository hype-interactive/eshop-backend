<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=['customer_id','total','order_id','date','callback','payment_method','payment_status','status','total','payment_number'];
}
