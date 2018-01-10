<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomDetail extends Model
{
    //
    protected $table='room_details';
    public $primaryKey='room_id';
    public $timestamps=true;
/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lodge_id', 'room_name','price','room_status',
    ];
}
