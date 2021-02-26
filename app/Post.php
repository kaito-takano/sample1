<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title',
        'body',
    ];
    
    public function getPaginateByLimit(int $limit_count = 30)
    {
        //ascで一から順番、descで大きい順番
        // updated_atで降順に並べたあと、limitで件数制限をかける
        //return $this->orderBy('created_at', 'asc')->limit($limit_count)->get();
        return $this->orderBy('created_at', 'ASC')->paginate($limit_count);
    }

}
