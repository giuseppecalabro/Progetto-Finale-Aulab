<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Userdetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'firstname',
        'surname',
        'phone',
        'address',
        'postcode',
        'city',
        'country',
        'state'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
