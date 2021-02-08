<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;


      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'enable', 'user_id', 'title', 'body', 'enable', 'iframe', 'image', 'create_post', 'update_post',
    ];



public function user()
    {
        return $this->belongsTo(User::class);
    }

}