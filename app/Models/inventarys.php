<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventarys extends Model
{
    use HasFactory;
    protected $primaryKey = 'product_id';
    protected $table="inventary";
    protected $fillable=['product_name','product_quantity','product_image'];
}
