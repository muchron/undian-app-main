<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PesertaUmumLima extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $table = 'peserta_umum_lima';
    protected $guarded = [];

    /**
     * Get all of the undian for the PesertaUmum
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function undian(): HasMany
    {
        return $this->hasMany(UndianUmumLima::class, 'peserta_umum_lima_id');
    }
}
