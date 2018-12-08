<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $password
 */
class User extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['first_name', 'last_name', 'email', 'password'];

}
