<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'child_id', 'tanggal', 'jam', 'aktivitas', 'catatan', 'created_by'
    ];

    public function child()
    {
        return $this->belongsTo(Child::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
