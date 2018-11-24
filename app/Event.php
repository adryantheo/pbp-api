<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $table = 'events';
    protected $primaryKey = 'email';
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = [
      'nama_event',
      'email',
      'tanggal_mulai',
      'tanggal_selesai',
      'tempat',
      'kategori',
      'no_telp'  
    ];
}
