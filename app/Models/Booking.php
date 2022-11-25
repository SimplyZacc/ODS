<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = ['driverID','itemName','itemDosage', 'amount','signaturePic', 'perscriptionPic', 'customerName', 'customerAddress', 'status'];
}
