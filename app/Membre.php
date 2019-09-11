<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'membre';


    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function mandats()
    {
        return $this->hasMany(Mandat::class);
    }

}
