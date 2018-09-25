<?php

namespace Tu\Test;

use Illuminate\Database\Eloquent\Model;

class TuModel extends Model
{
    protected $table = 'products';

    protected $fillable = ['id','name','price'];
}
