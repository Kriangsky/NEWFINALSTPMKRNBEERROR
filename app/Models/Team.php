<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Team extends Authenticatable
{
    use Notifiable;

    protected $table = 'tb_teams';
    protected $primaryKey = 'team_id';

    protected $guarded = [];

    public function users()
    {
        return $this->hasMany(User::class, 'group_name', 'group_name');
    }

    public function getAuthIdentifierName()
    {
        return 'group_name';
    }

    public function getAuthIdentifier()
    {
        return $this->attributes['group_name'];
    }

    public function getAuthPassword()
    {
        return $this->attributes['password'];
    }
}

