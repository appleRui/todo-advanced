<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public function user()
    {
        return $this->BelongsTo(User::class);
    }
    public function tag()
    {
        return $this->BelongsTo(Tag::class);
    }
    public static function doSearch($keyword, $tag_id)
    {
        $query = self::query();
        if (!empty($keyword)) {
            $query->where('content', 'LIKE', "%{$keyword}%");
        }
        if (!empty($tag_id)) {
            $query->where('tag_id', 'LIKE', "%{$tag_id}%");
        }
        $results = $query->get();
        return $results;
    }
    function isSelectedTag($tag_id)
    {
        return $this->tag_id == $tag_id ? 'selected' : '';
    }
}
