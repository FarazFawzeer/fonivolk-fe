<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeBanner extends Model
{
    //

    public function getVideoUrlAttribute()
    {
        return asset('uploads/videos/' . $this->video);
    }
}
