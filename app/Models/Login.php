<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\ViewLogin;

class Login extends Model
{
    use HasFactory;

    public static function getPwdById(){

        return ViewLogin::all();
    }

}
