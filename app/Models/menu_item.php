<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu_item extends Model
{
    use HasFactory;
    protected $table="menu_items";
    protected $fillable=['menu_id','product_name','product_description','product_price','image','status'];
}
