<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contributor extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'bar',
    ];

    /**
     * Get the user profile of contributor
     *
     * @return Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function profile()
    {
        return $this->morphOne(User::class, 'profile');
    }
}
