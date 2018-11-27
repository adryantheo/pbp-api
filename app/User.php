<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table = 'users';
    protected $primaryKey = 'email';
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = [
      'nama_event',
      'email',
      'password'
      
    ];
}
