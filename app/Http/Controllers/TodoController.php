<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $tags = Tag::all();
        $items = Todo::getTodos();
        return view('index', ['items' => $items, 'user' => $user, 'tags' => $tags]);
    }
    public function create( TodoRequest $request)
    {
        $todo = new Todo;
        $form = $request->all();
        unset($form['_token_']);
        $form['user_id'] = Auth::id();
        $todo->fill($form)->save();
        return redirect('/');
    }
    public function update(Request $request)
    {
        $this->validate($request, Todo::$rules);
        $todo = Todo::find($request->id);
        $form = $request->all();
        unset($form['_token_']);
        $todo->fill($form)->save();
        return redirect('/');
    }
    public function done()
    {
        $tags = Tag::all();
        $items = Todo::dones();
        return view('done', ['items' => $items, 'tags' => $tags]);
    }
    public function logicalDelete(Request $request)
    {
        Todo::find($request->id)->update(['is_delete'=>1]);
        return redirect('/');
    }
    public function physicalDelete(Request $request)
    {
        Todo::find($request->id)->delete();
        return redirect('/todo/done');
    }
    public function find()
    {
        $user = Auth::user();
        $tags = Tag::all();
        $items = ;
        return view('search', ['items' => $items, 'user' => $user, 'tags' => $tags]);
    }
    public function search(Request $request)
    {
        $user=Auth::user();
        $tags = Tag::all();
        $keyword = $request['content'];
        $tag_id = $request['tag_id'];
        $items = Todo::doSearch($keyword, $tag_id);
        return view('search', ['items' => $items, 'user' => $user, 'tags' => $tags]);
    }
}
