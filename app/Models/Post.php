<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'content',
        'user_id',
        'image'
    ];
    
    public function getPaginateByLimit(int $limit_count = 10)
{
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
}
}
