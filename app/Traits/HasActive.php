<?php


namespace App\Traits;


trait HasActive
{
    public function IsActive() {
        return $this->active;
    }
}
