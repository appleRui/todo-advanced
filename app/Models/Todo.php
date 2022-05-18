<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;


class Todo extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public static $rules = array(
        'content' => 'required|max:20',
    );

    public function user()
    {
        return $this->BelongsTo(User::class);
    }
    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
    public static function dones()
    {
        $user = Auth::user();
        $items = $user->todos->where('is_delete',1);
        return $items;
    }
    public static function search()
    {
        $user = Auth::user();
        $items = $user->todos->where('is_delete',0);
        return $items;
    }
    public static function getSearch($keyword, $tag_id)
    {
        $query = Todo::query();
        if(!empty($keyword)) {
            $query->where('content', 'LIKE', "%{$keyword}%");
        }
        if(!empty($tag_id)) {
            $query->where('tag_id', 'LIKE', "%{$tag_id}%");
        }
        $items = $query->where('is_delete',0)->get();
        return $items;
    }
}
