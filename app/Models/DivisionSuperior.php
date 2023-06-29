<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DivisionSuperior extends Model
{
    use HasFactory;

    protected $table = 'division_superior';
    protected $primaryKey = 'ds_id';
    public $timestamps = false;

    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
