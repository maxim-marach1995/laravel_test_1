<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\GuitarType;

class Guitar extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['brand', 'model', 'type_id', 'price'];

    public function type()
    {
        return $this->hasOne(GuitarType::class, 'id', 'type_id');
    }
}
