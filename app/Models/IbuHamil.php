<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IbuHamil extends Model
{
    use HasFactory;

    protected $table = 'ibu_hamil';

    protected $guarded = ['id'];
    protected $fileable = [
        'user_id',
        'nama_ibu',
        'tgl_lahir',
        'alamat',
        'pendidikan',
        'pekerjaan',
        'no_hp',
        'hamil_ke',
        'haid_terakhir',
        'tekanan_darah',
        'responden',
        'tanda_tangan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
