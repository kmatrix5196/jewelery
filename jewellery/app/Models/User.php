<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
     //use Notifiable;


    protected $table='user';

    protected $primaryKey = 'id';

    public $incrementing = true;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

 /*   protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    */
}
