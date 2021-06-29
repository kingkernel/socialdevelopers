<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'usuarios';
    
    protected $fillable = [
        'nome',
        'email',
        "keypass",
        "nasc",
        'sobrenome',
        "type_user"
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public static function login($email, $keypass)
    {
        $exists = json_decode(json_encode(\DB::table("usuarios")->select(
            \DB::RAW("count(*) as existe"))->where(
                ["email"=> $email,
                "keypass"=>$keypass,
                "active"=>true])->get()->toArray()), JSON_UNESCAPED_SLASHES);
        return $exists[0];
    }
}
