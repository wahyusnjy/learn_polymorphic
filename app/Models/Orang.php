<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orang extends Model
{
    use HasFactory;
    protected $table = 'orang';
    protected $fillable = [
        'name',
        'address',
        'contact',
    ];

    public function vendors()
    {
        return $this->morphMany(Pengajuan::class, 'vendorable');
    }
}
