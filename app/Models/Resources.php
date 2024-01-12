<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resources extends Model
{
    use HasFactory;
    public $timestamps = false;

    public static function findIdentifier($identifier){
        $resources = self::all();

        foreach($resources as $resource){
            if($resource['identifier'] == $identifier){
                return $resource;
            }
        }
    }
}
