<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IbuHamilQuisioner extends Model
{
    use HasFactory;

    protected $table = 'ibu_hamil_quesioner';

    protected $guarded = ['id'];

    protected $fillable = [
        'user_id',
        'pertanyaan',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
