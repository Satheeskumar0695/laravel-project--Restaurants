<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ongoing_order extends Model
{
    use HasFactory;
    protected $table="ongoing_orders";
    protected $fillable = ['customer_name', 'contact_number', 'table_number', 'product_name', '	product_quantity', 'price', 'total_price'];

}
