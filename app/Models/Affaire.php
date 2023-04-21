<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Affaire extends Model
{
    use HasFactory;


    protected $fillable = [
        'Name',
        'Description',
        'status',
        'user_id'
];


public function user(){
    return $this->belongsTo(User::class);
}

}
