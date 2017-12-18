<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lodge extends Model
{
    //

    protected $table='lodges';
    public $primaryKey='lodge_id';
    public $timestamps=true;

}
