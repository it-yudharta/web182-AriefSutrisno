<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $table = 'crud';
    protected $fillable = ['nama_depan','nama_belakang','jenis_kelamin','agama','alamat'];
}
