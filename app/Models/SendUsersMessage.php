<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendUsersMessage extends Model
{
    protected $table = 'send_users_messages';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'course',
        'message',
    ];
}
