<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Klaster;

class Report extends Model
{

    protected $guarded = [''];

    public function klaster()
    {
        return $this->hasOne(Klaster::class);
    }
}
