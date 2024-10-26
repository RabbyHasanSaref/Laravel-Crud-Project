<?php

namespace App\Models\Crud;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrudModel extends Model
{
    use HasFactory;

    protected $table = 'crud';
    protected $fillable = ['name', 'email', 'address', 'Phone'];
}
