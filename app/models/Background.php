<?php

class Background extends Eloquent {
    protected $guarded = [];

    public static $rules = [];

    public function owner()
    {
        return $this->belongsTo('User');
    }
}
