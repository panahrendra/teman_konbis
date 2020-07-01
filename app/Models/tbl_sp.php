<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tbl_sp extends Model
{
    protected $table = "tbl_sp";

    protected $primaryKey = "id";

    protected $fillable = ['no','kode','tahun','instansi','judul','id_kategori'];
}
