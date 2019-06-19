<?php

namespace Smoetje\Pfverkooppunten;

use Illuminate\Database\Eloquent\Model;

class VerkooppuntenModel extends Model
{
    protected $table = 'verkooppunten';

    protected $fillable = [
        'naam',
        'adres',
        'postcode',
        'stad',
        'country',
        'tel',
        'email',
        'aanbrenger',
        'coord'
    ];

}
