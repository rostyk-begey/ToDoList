<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 */
class Type extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name'];

}
