<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User; // Ensure this import is present

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'website', 'email', 'user_id']; // Make sure user_id is fillable

    // Define the relationship to the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
