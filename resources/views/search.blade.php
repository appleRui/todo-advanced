@extends('layouts.app')

@section('content')
  <div class="card__header">
    <p class="title mb-15">タスク検索</p>
    <div class="auth mb-15">
      <p class="detail">「{{ $user->name }}」でログイン中</p>
      <form method="post" action="{{ route('logout') }}">
        @csrf
        <input class="button-logout" type="submit" value="ログアウト">
      </form>
    </div>
  </div>
  @if (count($errors) > 0)
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  @endif
  <div class="todo">
    <form action="/todo/search" method="get" class="flex between mb-30">
      @csrf
      <input type="text" class="input-add" name="content"/>
      <select name="tag_id" class="select-tag">
        <option disabled selected value
        </option>
        @foreach($tags as $tag)
          <option value="{{ $tag->id }}">{{ $tag->name }}</option>
        @endforeach
      </select>
      <input class="button-add" type="submit" value="検索"/>
    </form>
    <table>
      <tr>
        <th>作成日</th>
        <th>タスク名</th>
        <th>タグ</th>
        <th>更新</th>
        <th>操作</th>
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
                  <option {{ $todo->isSelectedTag($tag->id) }} value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
              </select>
            </td>
            <td>
              <button {{ $todo->isSoftDeleted()? 'disabled' : ' ' }} class="button-update">更新</button>
            </td>
          </form>
          @if(!$todo->isSoftDeleted())
            <td>
              <form action="{{ route('todo.logicalDelete', ['id' => $todo->id]) }}" method="post">
                @csrf
                <button class="button-logical-delete">完了</button>
              </form>
            </td>
          @else
            <td>
              <form action="{{ route('todo.physicalDelete', ['id' => $todo->id]) }}" method="post">
                @csrf
                <button class="button-logical-delete">削除</button>
              </form>
            </td>
          @endif
        </tr>
      @endforeach
    </table>
  </div>
  <a class="button-back" href="{{ route('todo.index') }}">戻る</a>
@endsection
