<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table='contacts';
    protected $primaryKey='id';
    protected $fillable=[
        'full_name',
        'phone_number',
        'email',
        'image'

    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
