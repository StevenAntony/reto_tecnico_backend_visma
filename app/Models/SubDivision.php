<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubDivision extends Model
{
    use HasFactory;
    protected $table = 'subdivision';
    protected $primaryKey = 'sd_id';
    public $timestamps = false;
    protected $fillable = [
        'sd_nombre',
    ];


    public function division()
    {
        return $this->belongsTo(Division::class,'di_id','di_id');
    }

}
