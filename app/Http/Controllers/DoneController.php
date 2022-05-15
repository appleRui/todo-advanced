<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class DoneController extends Controller
{
    public function index()
    {
        $items = Todo::where('is_delete',1)->get();
        return view('done', ['items' => $items]);
    }
    public function physicalDelete(Request $request)
    {
        Todo::find($request->id)->delete();
        return redirect('/todo/done');
    }
}
