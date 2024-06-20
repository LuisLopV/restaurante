<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{

    protected $fillable = [
        'name',
        'codeColor',
    ];
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
