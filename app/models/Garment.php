<?php

class Garment extends Eloquent {
    protected $guarded = [];

    public static $rules = [];

    public function uploader()
    {
        return $this->belongsTo('User');
    }

    public function type()
    {
        return $this->belongsTo('GarmentType');
    }
}
