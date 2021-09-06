<?php

namespace App\Models;
use App\Http\Libraries\Datagrid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'nik', 'nama', 'tempat_lahir', 'tanggal_lahir', 'kontak', 'rt', 'rw'
    // ];

    // public static function getJson($input){
    //     $table = 'warga';
    //     $select = '*';

    //     $param = [
    //         'input' => $input->all(),
    //         'select' => $select,
    //         'table' => $table,
    //         'replace_field' => $replace_field,
    //     ];

    //     $datagrid = new Datagrid;
    //     $data = $datagrid->datagrid_query($param, function($data){
    //         return $data;
    //     });

    //     return $data;
    // }
}
