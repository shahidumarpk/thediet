<?php

namespace App;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar', 'mobile', 'status', 'gender', 'dob','latitude','longitude'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = [
        'dob',
        'created_at',
        'updated_at'
    ];

    public function role(){
        return $this->hasOne(Role::class, 'id', 'role_id' );
    }

    public function hasAccess(array $permissions)
    {
        if($this->role->hasAccess($permissions)){
            return true;
        }
        return false;
    }

    
}
