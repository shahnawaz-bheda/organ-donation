<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Donation extends Model
{
    use HasFactory;
    protected $table = 'donations';

    protected $fillable = [
        'name',
        'image',
        'status',
        'donor_id',
        'receiver_id',
    ];

    public function donor()
    {
        return $this->belongsTo(User::class,'donor_id','id');
    }
    public function receiver()
    {
        return $this->belongsTo(User::class,'receiver_id','id');
    }
}
