<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;
    protected $table = 'pengajuan';
    protected $fillable = [
        'name',
        'vendorable_type',
        'vendorable_id',
    ];

    public function vendorable()
    {
        return $this->morphTo();
    }
}
