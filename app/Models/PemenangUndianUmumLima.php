<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PemenangUndianUmumLima extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $table = 'pemenang_undian_umum_lima';
    protected $fillable = [];
    protected $guarded = [];

        /**
     * Get the undian that owns the PemenangUndianGrandprice
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function undian(): BelongsTo
    {
        return $this->belongsTo(UndianUmumLima::class, 'undian_id');
    }
    

        /**
     * Get the undianGrandprice that owns the PemenangUndianGrandprice
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function undianUmumLima(): BelongsTo
    {
        return $this->belongsTo(UndianUmumLima::class, 'undian_id');
    }   
}
