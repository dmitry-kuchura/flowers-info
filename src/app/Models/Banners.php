<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $title
 * @property string $sub_title
 * @property string $description
 * @property string $button_text
 * @property string $button_link
 * @property string $image
 * @property int $sort
 * @property string $position
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class Banners extends Model
{
    /**
     * Database table name
     *
     * @var string
     */
    protected $table = 'banners';

    /**
     * Using timestamp
     *
     * @var bool
     */
    public $timestamps = true;

    protected $fillable = ['email', 'hash', 'status', 'created_at', 'updated_at'];
}
