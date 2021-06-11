<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static active()
 * @method static create(array $validated)
 */
class Question extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'full_name',
        'email',
        'phone_number',
        'question',
        'active',
        'answer'
    ];
}
