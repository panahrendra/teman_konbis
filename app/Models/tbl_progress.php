<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tbl_progress extends Model
{
	protected $table = "tbl_progress";

	protected $primaryKey = "id";

    Protected $guarded = ['created_at', 'updated_at', 'deleted_at'];
}
