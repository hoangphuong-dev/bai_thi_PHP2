<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $table = 'customers';

    public $timestamps = false;

    protected $fillable = ['id', 'anhdaidien', 'hoten', 'gioitinh', 'sdt', 'email'];

    public $primaryKey = 'id';
}
   