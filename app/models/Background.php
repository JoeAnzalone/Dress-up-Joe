<?php

class Background extends Eloquent {
    protected $guarded = [];

    public static $rules = [];

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function imageUrl()
    {
        return URL::to('/uploads/backgrounds/' . $this->id . '.jpg');
    }
}
