<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Login extends Model
{
    use HasFactory;

    public static function getPwdById(){S

        return $pwd = DB::select('Select pwd From LOGIN_VIEW where pwd = `12345`');
    }

}
