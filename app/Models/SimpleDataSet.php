<?php

namespace App\Models;

use Orbit\Concerns\Orbital;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SimpleDataSet extends Model
{
    use HasFactory;
    use Orbital;

    public static $driver = 'json';
    public $timestamps = false;

    public static function schema(Blueprint $blueprint)
    {
        $blueprint->string('name')->unique('name');
        $blueprint->string('title');
        $blueprint->string('city');
        $blueprint->string('state');
        $blueprint->timestamp('updated_at')->nullable();
    }

    public function getKeyName()
    {
        return 'name';
    }

    public function getIncrementing()
    {
        return false;
    }

    public function scopeFilter($query, array $filters)
    {
        if($filters['searchInput'] ?? false && $filters['searchOption'] ?? false){
            // if searching by time, query using like 
            if($filters['searchOption'] == 'updated_at'){
                $query->where(request('searchOption'), 'like', '%' . request('searchInput') . '%');
            } else {
                $query->where(request('searchOption'), request('searchInput'));
            }
        }
    }
}
