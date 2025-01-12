<?php

namespace App\Models;

use App\Models\PesertaGrandPrice;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UndianGrandprice extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $table= 'undian_grandprice';
    protected $guarded = [];


    /**
     * Get the pesertaGrandprice that owns the Undian
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pesertaGrandprice(): BelongsTo
    {
        return $this->belongsTo(PesertaGrandPrice::class, 'peserta_grandprice_id');
    }

    /**
     * Get all of the pemenangUndianGrandprice for the Undian
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pemenangUndianGrandprice(): HasMany
    {
        return $this->hasMany(PemenangUndianGrandprice::class, 'undian_id');
    }
}
