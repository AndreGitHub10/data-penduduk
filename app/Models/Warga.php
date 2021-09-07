<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    protected $table = "Warga";
    protected $primaryKey = "id";
    protected $fillable = [
    	'id','nik','nama','tempat_lahir','tanggal_lahir','kontak','rt','rw'
    ];
}
