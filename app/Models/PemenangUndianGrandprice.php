<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PemenangUndianGrandprice extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $table = 'pemenang_undian_grandprice';
    protected $guarded = ['id'];

    /**
     * Get the undian that owns the PemenangUndianGrandprice
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function undian(): BelongsTo
    {
        return $this->belongsTo(Undian::class, 'undian_id');
    }

    /**
     * Get the undianGrandprice that owns the PemenangUndianGrandprice
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function undianGrandprice(): BelongsTo
    {
        return $this->belongsTo(UndianGrandprice::class, 'undian_id');
    }   
}
