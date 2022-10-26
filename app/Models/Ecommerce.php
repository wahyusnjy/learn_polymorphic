<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ecommerce extends Model
{
    use HasFactory;
    protected $table = 'ecommerces';
    protected $fillable = [
        'name',
        'link',
        'address',
    ];
    
    public function vendors()
    {
        return $this->morphMany(Pengajuan::class, 'vendorable');
    }
}
