<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UndianUmumLima extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $table= 'undian_umum_lima';
    protected $guarded = [];


    /**
     * Get the pesertaUmum that owns the Undian
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pesertaUmumLima(): BelongsTo
    {
        return $this->belongsTo(PesertaUmumLima::class, 'peserta_umum_lima_id');
    }

    /**
     * Get all of the pemenangUndianUmum for the Undian
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pemenangUndianUmumLima(): HasMany
    {
        return $this->hasMany(PemenangUndianUmumLima::class, 'undian_id');
    }
}
