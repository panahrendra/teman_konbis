<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tbl_detil_aset extends Model
{
	protected $table = "detilsp_aset";

	protected $fillable = ['id_detil_sp','id_aset'];
}
