<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'mname',
        'lname',
        'email',
        'phone',
        'address1',
        'address2',
        'country',
        'state',
        'zip',
        'institution',
        'qualification',

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
