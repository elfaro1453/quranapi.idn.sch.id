<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ayah extends Model
{
    protected $table = 'quran_id';
    public $timestamps = false;
    protected $fillable = [
    'surahId', 'verseId', 'ayahText', 'indoText', 'enText', 'readText',
    'juz', 'manzil', 'page', 'ruku', 'hizbQuarter', 'sajda'];

    protected $hidden = [
        'id', 'surahId'
    ];
	
	protected $casts = [ 'surahId' => 'integer', 'verseId' => 'integer',
    'juz' => 'integer', 'manzil' => 'integer', 'page' => 'integer', 'ruku' => 'integer', 'hizbQuarter' => 'integer', 'sajda' => 'boolean'
    ];
}
