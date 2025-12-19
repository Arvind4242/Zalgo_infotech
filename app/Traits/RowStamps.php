<?php

namespace App\Traits;

trait RowStamps
{
    public function getCreatedAtAttribute($value)
    {
        return date('d-m-Y h:i:s', strtotime($value));
    }

    public function getUpdatedAtAttribute($value)
    {
        return date('d-m-Y h:i:s', strtotime($value));
    }
}
