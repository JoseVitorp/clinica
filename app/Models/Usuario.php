<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable=[
        'name',
        'email',
        'endereco',
        'city',
        'tel',
        'date',
        'prontuario',
        'especialista'
    ];
    use HasFactory;
}
