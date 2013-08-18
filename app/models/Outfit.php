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
        return $this->belongsToMany('Garment', 'garment_coordinates')->withPivot('garment_id', 'x', 'y');
    }
}
