<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSection extends Model
{
    public $timestamps = false;
    protected $table = 'product_section';
    use HasFactory;
}
