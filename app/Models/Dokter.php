<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'dokter';

    protected $primaryKey = 'id_dokter';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'id_dokter',
        'nama',
        'email',
        'spesialisasi',
        'no_hp',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($dokter) {

            if (!empty($dokter->id_dokter)) {
                return;
            }

            $last = self::orderBy('id_dokter', 'desc')
                ->first();

            $nextNumber = $last
                ? ((int) $last->id_dokter) + 1
                : 1;

            $dokter->id_dokter = str_pad(
                $nextNumber,
                4,
                '0',
                STR_PAD_LEFT
            );
        });
    }

    public function pendaftaran()
    {
        return $this->hasMany(
            Pendaftaran::class,
            'id_dokter',
            'id_dokter'
        );
    }
}
