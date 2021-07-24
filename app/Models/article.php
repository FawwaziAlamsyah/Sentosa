<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;

    protected $tabel="articles";
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(category::class);
    }
}
