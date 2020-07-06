<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tbl_detil extends Model
{
	protected $table = "tbl_detil_sp";

	protected $primaryKey = "id";

	protected $fillable = ['id_sp','jenis','objek_sp','tgl_mulai','tgl_selesai','nilai_fix','nilai_formula','history','keterangan'];
}
