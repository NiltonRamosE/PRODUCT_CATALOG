<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'paternal_surname',
        'maternal_surname',
        'gender',
        'work_email',
        'password',
        'recovery_email',
        'image_admin',
    ];

    protected $hidden = [
        'password',
        'work_email',
        'recovery_email',
    ];
    /*
    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }*/
}
