<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email'
    ];

    public $timestamps = false;

    public function schools() {
        return $this->belongsToMany(School::class);
    }
}
