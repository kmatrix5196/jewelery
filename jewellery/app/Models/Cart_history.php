<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart_history extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cart_history';
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
}
