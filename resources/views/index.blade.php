@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
  <div class="card__header">
    <p class="title mb-15">Todo List</p>
    <div class="auth mb-15">
      <p class="detail">「{{ $user->name }}」でログイン中</p>
      <form method="post" action="{{ route('logout') }}">
        @csrf
        <input class="button-logout" type="submit" value="ログアウト">
      </form>
    </div>
  </div>
  <a class="button-done" href="{{ route('todo.done') }}">完了済みタスク一覧</a>
  <a class="button-search" href="{{ route('todo.find') }}">タスク検索</a>
  @error('content')
    <li>{{$message}}</li>
  @enderror
  @error('tag_id')
    <li>{{$message}}</li>
  @enderror
  @error('updateContent')
    <li>{{$message}}</li>
  @enderror
  <div class="todo">
    <form action="/todo/create" method="post" class="flex between mb-30">
      @csrf
      <input type="text" class="input-add" name="content"/>
      <select name="tag_id" class="select-tag">
        @foreach($tags as $tag)
          <option value="{{ $tag->id }}">{{ $tag->name }}</option>
        @endforeach
      </select>
      <input class="button-add" type="submit" value="追加"/>
    </form>
    <table>
      <tr>
        <th>作成日</th>
        <th>タスク名</th>
        <th>タグ</th>
        <th>更新</th>
        <th>完了</th>
      </tr>
      @foreach($todos as $todo)
        <tr>
          <td>
            {{ $todo->created_at }}
          </td>
          <form action="{{ route('todo.update', ['id' => $todo->id]) }}" method="post">
            @csrf
            <td>
              <input type="text" class="input-update" value="{{ $todo->content }}" name="content"/>
            </td>
            <td>
              <select name="tag_id" class="select-tag">
                @foreach($tags as $tag)
                  <option
                    {{ $todo->isSelectedTag($tag->id) }} value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
              </select>
            </td>
            <td>
              <button class="button-update">更新</button>
            </td>
          </form>
          <td>
            <form action="{{ route('todo.logicalDelete', ['id' => $todo->id]) }}" method="post">
              @csrf
              <button class="button-logical-delete">完了</button>
            </form>
          </td>
        </tr>
      @endforeach
    </table>
  </div>
@endsection

