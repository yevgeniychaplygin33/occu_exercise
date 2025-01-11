<?php

namespace App\Models;

use Orbit\Concerns\Orbital;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StatusValue extends Model
{
    use HasFactory;
    use Orbital;

    public static $driver = 'json';
    public $timestamps = false;

    public static function schema(Blueprint $blueprint)
    {
        $blueprint->id();
        $blueprint->string('status');
    }

    public function getIncrementing()
    {
        return false;
    }
}
