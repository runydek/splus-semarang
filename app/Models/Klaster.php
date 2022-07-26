<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Report;


class Klaster extends Model
{
    protected $guarded = [''];

    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}
