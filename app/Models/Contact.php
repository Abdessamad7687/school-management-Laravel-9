<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacter';

    protected $primaryKey = 'id';

    protected $fillable = ['nom', 'email', 'Message'];
}
