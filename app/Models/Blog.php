<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ["title", "name", "number","user_id"];
    // belongs to user 

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
