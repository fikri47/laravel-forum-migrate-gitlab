<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        "avatar",
        "age",
        "bio",
        "address",
        "user_id"];

    public function user() {
        $this->belongsTo(User::class, 'user_id');
    }

    public function getAvatar() {
        if (!$this->avatar) {
            return asset('image/user.png');
        }
        return asset('image/'. $this->avatar);
    }
}
