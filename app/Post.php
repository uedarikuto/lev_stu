<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function getPaginate(int $limit_count = 5)
    {
        return $this->orderBy('update_at','DESC')->paginate($limit_count);
    }
}
