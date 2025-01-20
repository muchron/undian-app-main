<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PesertaUmum extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $table = 'peserta_umum';
    protected $guarded = ['id'];

    /**
     * Get all of the undian for the PesertaUmum
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function undian(): HasMany
    {
        return $this->hasMany(Undian::class, 'peserta_umum_id');
    }
}
