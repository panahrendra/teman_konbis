<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tbl_aset extends Model
{
    protected $table = "tbl_aset";

    protected $primaryKey = "id";

    protected $fillable = ['id', 'id_unit_kerja', 'aset', 'lokasi', 'keterangan'];
}
