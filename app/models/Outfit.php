<?php

class Outfit extends Eloquent {
    protected $guarded = [];

    public static $rules = [];

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function background()
    {
        return $this->belongsTo('Background');
    }

    public function garments()
    {
        return $this->hasMany('Garment', 'garment_coordinates')->withPivot('x', 'y');
    }
}
