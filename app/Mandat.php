<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mandat extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mandat';


    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function membre()
    {
        return $this->belongsTo(Membre::class);
    }
}
