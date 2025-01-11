<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Undian extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $table= 'undian';
    protected $guarded = [];


    /**
     * Get the pesertaUmum that owns the Undian
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pesertaUmum(): BelongsTo
    {
        return $this->belongsTo(PesertaUmum::class, 'peserta_umum_id');
    }

    /**
     * Get all of the pemenangUndianUmum for the Undian
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pemenangUndianUmum(): HasMany
    {
        return $this->hasMany(PemenangUndianUmum::class, 'undian_id');
    }
}
