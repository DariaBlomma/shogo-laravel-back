<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductParamName extends Model
{
    public $timestamps = false;
    protected $table = 'product_param_name';
    use HasFactory;
}
