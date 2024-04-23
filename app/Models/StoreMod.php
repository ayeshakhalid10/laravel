<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreMod extends Model
{
    use HasFactory;
    protected $table="storemod";

    protected $fillable = [
        'user_id',
        'name',
        'address',
        'image',
        'phoneno',
    ];
    
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function modifications() {
        return $this->hasMany(Modification::class, 'store_mod_id');
    }
}
