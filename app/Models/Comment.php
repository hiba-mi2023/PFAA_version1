<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // Define the relationship between the Comment and Note models
    public function note()
    {
        return $this->belongsTo(Note::class, 'id_note');
    }

    // Define the relationship between the Comment and User models
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}