<?php

class GarmentType extends Eloquent {
    protected $guarded = [];

    public static $rules = [];

    public function garments()
    {
        return $this->hasMany('Garment');
    }
}
