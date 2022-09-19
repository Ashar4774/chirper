<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Chirp extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
    ];

    protected $dispatchesEvent = [
        'created' => ChirpCreated::class,
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
