<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contracts extends Model
{
    use HasFactory;

    protected $fillable = [

        'number',
        'date_of_issue',
        'created_at',
        'updated_at',
    ];

    public function equipament()
    {
        return $this->hasOne(Equipaments::class,'contract_id');
    
    }
}


