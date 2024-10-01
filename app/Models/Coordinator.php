<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Coordinator extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guard = 'coordinator';

    protected $primaryKey = 'coordinator_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'coordinator_id',
        'coordinator_username',
        'email',
        'password',
        'coordinator_fname',
        'coordinator_lname',
        'coordinator_contactnumber',
        'coordinator_city',
        'profile_image',
        'account_created',
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
}
