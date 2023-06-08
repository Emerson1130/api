<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipaments extends Model
{
    use HasFactory;

    protected $fillable = [
        'contract_id',
        'date_inclusion',
    ];

    public function contracts()
    {
        return $this->belongsTo(Contracts::class, 'contract_id', 'id');
    
    }
}
