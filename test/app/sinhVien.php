<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sinhVien extends Model
{
    protected $table = 'sinhvien';
    protected $fillable = ['id','firstname','lastname','usename','email','state'];
}
