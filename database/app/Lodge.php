<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lodge extends Model
{
    //

    protected $table='lodges';
    public $primaryKey='lodge_id';
    public $timestamps=true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lodge_name','lodge_status','disable_enable',
    ];

}
