<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;
    protected $table = 'division';
    protected $primaryKey = 'di_id';
    public $timestamps = false;

    protected $hidden = [
        'di_id',
        'di_estado'
    ];

    public function divisionsuperior()
    {
        return $this->hasOne(DivisionSuperior::class);
    }

    public function subDivisiones()
    {
        return $this->hasMany(SubDivision::class,'di_id','di_id');
    }
}
