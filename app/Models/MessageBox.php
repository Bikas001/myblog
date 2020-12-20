<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageBox extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'subject',
        'message',
        'email',
        'notify',
    ];
}
