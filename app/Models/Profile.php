<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'about',
        'institution',
        'major',
        'links',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    // use HasFactory;
}
