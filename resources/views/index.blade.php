<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>COACHTECH</title>
  <style>
    html,
    body,
    div,
    span,
    object,
    iframe,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    blockquote,
    pre,
    abbr,
    address,
    cite,
    code,
    del,
    dfn,
    em,
    img,
    ins,
    kbd,
    q,
    samp,
    small,
    strong,
    sub,
    sup,
    var,
    b,
    i,
    dl,
    dt,
    dd,
    ol,
    ul,
    li,
    fieldset,
    form,
    label,
    legend,
    table,
    caption,
    tbody,
    tfoot,
    thead,
    tr,
    th,
    td,
    article,
    aside,
    canvas,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section,
    summary,
    time,
    mark,
    audio,
    video {
      margin: 0;
      padding: 0;
      border: 0;
      outline: 0;
      font-size: 100%;
      vertical-align: baseline;
      background: transparent;
    }

    body {
      line-height: 1;
    }

    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section {
      display: block;
    }

    nav ul {
      list-style: none;
    }

    blockquote,
    q {
      quotes: none;
    }

    blockquote:before,
    blockquote:after,
    q:before,
    q:after {
      content: "";
      content: none;
    }

    a {
      margin: 0;
      padding: 0;
      font-size: 100%;
      vertical-align: baseline;
      background: transparent;
    }

    /* change colours to suit your needs */
    ins {
      background-color: #ff9;
      color: #000;
      text-decoration: none;
    }

    /* change colours to suit your needs */
    mark {
      background-color: #ff9;
      color: #000;
      font-style: italic;
      font-weight: bold;
    }

    del {
      text-decoration: line-through;
    }

    abbr[title],
    dfn[title] {
      border-bottom: 1px dotted;
      cursor: help;
    }

    table {
      border-collapse: collapse;
      border-spacing: 0;
    }

    /* change border colour to suit your needs */
    hr {
      display: block;
      height: 1px;
      border: 0;
      border-top: 1px solid #cccccc;
      margin: 1em 0;
      padding: 0;
    }

    input,
    select {
      vertical-align: middle;
    }

    .flex {
      display: flex;
    }

    .between {
      justify-content: space-between;
    }

    .mb-15 {
      margin-bottom: 15px;
    }

    .mb-30 {
      margin-bottom: 30px;
    }

    .container {
      background-color: #2d197c;
      height: 100vh;
      width: 100vw;
      position: relative;
    }

    .card {
      background-color: #fff;
      width: 50vw;
      padding: 30px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      border-radius: 10px;
    }

    .card__header {
      display: flex;
      justify-content: space-between;
    }

    .title {
      font-weight: bold;
      font-size: 24px;
    }

    .auth {
      display: flex;
      align-items: center;
      font-size: 16px;
    }

    .auth>.detail {
      margin-right: 1rem;
    }

    .button-logout {
      text-align: left;
      border: 2px solid #FF0000;
      font-size: 12px;
      color: #FF0000;
      background-color: #fff;
      font-weight: bold;
      padding: 8px 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.4s;
      outline: none;
    }

    .button-logout:hover {
      background-color: #FF0000;
      border-color: #FF0000;
      color: #fff;
    }

    .select-tag {
      padding: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
      font-size: 14px;
      outline: none;
    }

    .input-add {
      width: 75%;
      padding: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
      appearance: none;
      font-size: 14px;
      outline: none;
    }

    table {
      text-align: center;
      width: 100%
    }

    tr {
      height: 50px;
    }

    .input-update {
      width: 90%;
      padding: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
      appearance: none;
      font-size: 14px;
      outline: none;
    }

    .button-add {
      text-align: left;
      border: 2px solid #dc70fa;
      font-size: 12px;
      color: #dc70fa;
      background-color: #fff;
      font-weight: bold;
      padding: 8px 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.4s;
      outline: none;
    }

    .button-add:hover {
      background-color: #dc70fa;
      border-color: #dc70fa;
      color: #fff;
    }

    .button-update {
      text-align: left;
      border: 2px solid #fa9770;
      font-size: 12px;
      color: #fa9770;
      background-color: #fff;
      font-weight: bold;
      padding: 8px 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.4s;
      outline: none;
    }

    .button-update:hover {
      background-color: #fa9770;
      border-color: #fa9770;
      color: #fff;
    }

    .button-logical-delete {
      text-align: left;
      border: 2px solid #3b4bdf;
      font-size: 12px;
      color: #3b4bdf;
      background-color: #fff;
      font-weight: bold;
      padding: 8px 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.4s;
      outline: none;
    }

    .button-logical-delete:hover {
      background-color: #3b4bdf;
      border-color: #3b4bdf;
      color: #fff;
    }

    .button-done {
      display: inline-block;
      text-align: left;
      border: 2px solid #3bdf6f;
      font-size: 12px;
      color: #3bdf6f;
      background-color: #fff;
      font-weight: bold;
      padding: 8px 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.4s;
      outline: none;
      text-decoration: none;
      margin-bottom: 10px;
    }

    .button-done:hover{
      background-color: #3bdf6f;
      border-color: #3bdf6f;
      color: #fff;
    }

    .button-search {
      display: inline-block;
      text-align: left;
      border: 2px solid #cdf119;
      font-size: 12px;
      color: #cdf119;
      background-color: #fff;
      font-weight: bold;
      padding: 8px 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.4s;
      outline: none;
      text-decoration: none;
      margin-bottom: 10px;
    }

    .button-search:hover{
      background-color: #cdf119;
      border-color: #cdf119;
      color: #fff;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="card">
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
      @if (count($errors) > 0)
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
      @endif
      <div class="todo">
        <form action="/todo/create" method="post" class="flex between mb-30">
          @csrf
          <input type="text" class="input-add" name="content" />
          <select name="tag_id" class="select-tag">
            @foreach($tags as $tag)
            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
          </select>
          <input class="button-add" type="submit" value="追加" />
        </form>
        <table>
          <tr>
            <th>作成日</th>
            <th>タスク名</th>
            <th>タグ</th>
            <th>更新</th>
            <th>完了</th>
          </tr>
          @foreach($items as $item)
          <tr>
            <td>
              {{ $item->created_at }}
            </td>
            <form action="{{ route('todo.update', ['id' => $item->id]) }}" method="post">
              @csrf
              <td>
                <input type="text" class="input-update" value="{{ $item->content }}" name="content" />
              </td>
              <td>
                <select name="tag_id" class="select-tag">
                  @foreach($tags as $tag)
                  <option {{ $item->tag_id == $tag->id ? 'selected' : '' }} value="{{ $tag->id }}">{{ $tag->name }}</option>
                  @endforeach
                </select>
              </td>
              <td>
                <button class="button-update">更新</button>
              </td>
            </form>
            <td>
              <form action="{{ route('todo.logicalDelete', ['id' => $item->id]) }}" method="post">
              @csrf
                <button class="button-logical-delete">完了</button>
              </form>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
  </div>
</body>

</html>
