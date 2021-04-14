<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class BackendUser extends Model
{
    use HasApiTokens, HasFactory;

    public function findForPassport($username)
    {
        filter_var($username, FILTER_VALIDATE_EMAIL) ? $credentials['email'] = $username : $credentials['username'] = $username;
        return self::where($credentials)->first();
    }
}
