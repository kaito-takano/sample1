<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function getPaginateByLimit(int $limit_count = 9)
    {
        //ascで一から順番、descで大きい順番
        // updated_atで降順に並べたあと、limitで件数制限をかける
        //return $this->orderBy('created_at', 'asc')->limit($limit_count)->get();
        return $this->orderBy('created_at', 'asc')->paginate($limit_count);
    }
}
