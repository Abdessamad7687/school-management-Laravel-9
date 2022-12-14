<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = 'inscription';

    protected $primaryKey = 'id';

    protected $fillable = ['nom', 'prenom', 'email', 'telephone', 'message'];

  
}
