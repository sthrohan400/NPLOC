<?php

namespace Core\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CoreModel extends Model
{
    use SoftDeletes;
   /**
     * The table associated with the model.
     *
     * @var string
     */
    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
 
    public $rules = [];

    protected $dates = ['deleted_at'];
   
}
