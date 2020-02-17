<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    use Notifiable;
    protected $guard = 'user';
    protected $table = 'user';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    
    protected $fillable = [
        'first_name','last_name', 'email', 'password', 'phone', 'address',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
