<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suratMasuk extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'surat_masuk';

    protected $fillable = [
        'nosurat',
        'tglsurat',
        'perihal' ,
        'isiringkas',
        'pengirim' ,
        'tglterima', 
        'tglteruskan',
        'namafile'   
    ];

}