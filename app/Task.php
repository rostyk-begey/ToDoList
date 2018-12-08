<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $start_date
 * @property string $end_date
 * @property int $user_id
 * @property int $type_id
 */
class Task extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'description', 'start_date', 'end_date', 'user_id', 'type_id'];

}
