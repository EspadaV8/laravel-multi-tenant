<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;

class ParentModel
{
    public static function findOrFail($id, $columns)
    {
        throw new ModelNotFoundException();
    }
}
