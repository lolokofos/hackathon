<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentInfo extends Model
{
    use HasFactory;
    protected $fillable = ['id_user','email_sender','subject','mail_str','amount', 'currency', 'iban', 'variable_symbol','dueDate'];

    
}
