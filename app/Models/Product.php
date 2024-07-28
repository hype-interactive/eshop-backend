<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['name','description','unit','vendor_price','final_price','product_category_id','expire_date','image_url','status','visibility','featured','vendor_id'];
}
