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
        'image',
        'store_mod_id'
    ];
    
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function store() {
        $this->belongsTo(StoreMod::class, 'store_mod_id');
    }
}
