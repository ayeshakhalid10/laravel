<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modification extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'name',
        'type',
        'description',
        'quantity',
        // 'image',
    ];
    
    public function user() {
        return $this->belongsTo(User::class);
    }
}
