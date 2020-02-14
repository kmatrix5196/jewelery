<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product';
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
