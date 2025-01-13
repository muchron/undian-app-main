<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PesertaGrandPrice extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $table = 'peserta_grandprice';
    protected $guarded = ['id'];

    /**
     * Get all of the undian for the PesertaUmum
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function undian(): HasMany
    {
        return $this->hasMany(Undian::class, 'peserta_grandprice_id');
    }
}
