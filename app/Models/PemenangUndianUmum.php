<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PemenangUndianUmum extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $table = 'pemenang_undian_umum';
    protected $guarded = [];

    /**
     * Get the undian that owns the PemenangUndianUmum
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function undian(): BelongsTo
    {
        return $this->belongsTo(Undian::class, 'undian_id');
    }
}
