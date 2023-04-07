<?php

namespace App\Models;

use App\Enums\UserRoleEnum;
use Bpuig\Subby\Traits\HasSubscriptions;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @method static updateOrCreate( array $array, array $array1 )
 * @method static create( array $array )
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasSubscriptions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRoleNameAttribute()
    {
        $roleValue = UserRoleEnum::fromValue($this->attributes['role']);
        return $roleValue->description;
    }

}
