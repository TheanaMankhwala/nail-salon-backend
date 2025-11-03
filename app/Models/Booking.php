<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use App\Models\Service;
use App\Models\Payment;


class Booking extends Model
{
  public function customer() {
    return $this->belongsTo(Customer::class);
}

public function service() {
    return $this->belongsTo(Service::class);
}

public function payment() {
    return $this->hasOne(Payment::class);
}


}
