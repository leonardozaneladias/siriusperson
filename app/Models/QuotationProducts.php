<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuotationProducts extends Model
{
    protected $fillable = [
        'quotation_id',
        'product_id',
        'quantity',
    ];
}
