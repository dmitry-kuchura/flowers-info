<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $email
 * @property string $hash
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class Subscribers extends Model
{
    /**
     * Database table name
     *
     * @var string
     */
    protected $table = 'subscribers';

    /**
     * Using timestamp
     *
     * @var bool
     */
    public $timestamps = true;

    protected $fillable = ['email', 'hash', 'status', 'created_at', 'updated_at'];
}
