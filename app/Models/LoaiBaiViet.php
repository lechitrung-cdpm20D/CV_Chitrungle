<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoaiBaiViet extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "loai_bai_viet";
    protected $fillable = ['id', 'tenloaibaiviet'];
}
