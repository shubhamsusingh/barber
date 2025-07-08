<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
 protected $table = 'payments';
 public $timestamps = true;
  protected $fillable = [
        'id',
        'payment_id',
        'service_name',
        'amount',
        'currency',
        'payer_name',
        'payer_email',
        'payment_status',
        'payment_method'
    ];
}
