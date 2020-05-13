<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surah extends Model
{
    protected $table = 'info_surah';
    protected $primaryKey = 'number';
    public $timestamps = false;
    protected $fillable = [
    'translationId', 'translationEn', 'asma',
    'numberOfAyahs', 'name', 'number', 'typeId', 'typeEn', 'orderNumber' ];
}
