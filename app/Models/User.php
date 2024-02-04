<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'group_name',
    //     'password',
    //     'binusian',
    // ];
    // protected $guarded = [];


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
    protected $guarded = [];
    // protected $fillable = ['group_name', 'name', 'email', 'whatsapp', 'line', 'github', 'birth_date', 'birth_place', 'cv', 'id_card'];

    public function teams()
    {
        return $this->belongsTo(Team::class, 'group_name', 'group_name');
    }

    public function scopeSameGroup($query, $group_name)
    {
        return $query->where('group_name', $group_name)->orderBy('leadername');
    }

    // public function LeaderDetail()
    // {
    //     return $this->hasOne(LeaderDetail::class);
    // }
}
