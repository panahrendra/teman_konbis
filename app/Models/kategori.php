<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = "tbl_kategori_sp";

   	protected $primaryKey = "id";

   	protected $fillable	= ['kategori_sp'];
}
