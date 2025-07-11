<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $fillable = [
        'name',
        'category_id',
        'date',
        'amount',
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }
}
