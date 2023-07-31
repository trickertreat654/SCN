<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['type_of_service', 'name','phone', 'type_of_business' , 'city', 'state', 'email', 'comments'];

}
