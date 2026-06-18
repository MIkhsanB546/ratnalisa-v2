<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPendaftaran extends Model
{
    protected $table = 'detail_pendaftaran';

    protected $primaryKey = 'id_detail';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'id_detail',
        'id_pendaftaran',
        'id_layanan',
        'subtotal',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($detail) {

            if (!empty($detail->id_detail)) {
                return;
            }

            $prefix = $detail->id_pendaftaran;

            $last = self::where('id_pendaftaran', $detail->id_pendaftaran)
                ->orderBy('id_detail', 'desc')
                ->first();

            $nextNumber = $last
                ? ((int) substr($last->id_detail, -2)) + 1
                : 1;

            $detail->id_detail =
                $prefix .
                str_pad($nextNumber, 2, '0', STR_PAD_LEFT);
        });
    }

    public function pendaftaran()
    {
        return $this->belongsTo(
            Pendaftaran::class,
            'id_pendaftaran',
            'id_pendaftaran'
        );
    }

    public function layanan()
    {
        return $this->belongsTo(
            Layanan::class,
            'id_layanan',
            'id_layanan'
        );
    }
}
