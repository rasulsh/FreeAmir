<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'number',
        'date',
        'permanent',
    ];

    public function Transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}
