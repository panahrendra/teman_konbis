<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tbl_proses extends Model
{
    protected $table = "tbl_progress";

   	protected $primaryKey = "id";

   	protected $guarded	= ['created_at','update_at','deleted_at'];
}
