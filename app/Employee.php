<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['nama','jabatan','umur','created_at','updated_at'];
}
