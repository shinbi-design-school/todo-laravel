@extends('layouts.app')

@section('title', 'ToDo 一覧')

@section('content')
<section class="card">
  <h2><i class="fa-solid fa-table-list"></i> 一覧</h2>

  @if (session('message'))
    <p class="muted">{{ session('message') }}</p>
  @endif

  @if ($errors->any())
    <p class="alert">{{ $errors->first() }}</p>
  @endif

  @if ($todos->count() === 0)
    <p class="muted">ToDo がありません。</p>
  @else
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>状態</th>
          <th>タイトル</th>
          <th>期限</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($todos as $t)
        <tr>
          <td>{{ $t->id }}</td>
          <td>
            @if ($t->is_done)
              <span class="badge done"><i class="fa-solid fa-check"></i> 完了</span>
            @else
              <span class="badge todo"><i class="fa-regular fa-circle"></i> 未完了</span>
            @endif
          </td>
          <td class="{{ $t->is_done ? 'strike' : '' }}">{{ $t->title }}</td>
          <td>{{ $t->due_date ? $t->due_date->format('Y-m-d') : '-' }}</td>
          <td class="actions">
            <a class="btn" href="{{ route('todos.edit', $t) }}">
              <i class="fa-solid fa-pen-to-square"></i> 編集
            </a>

            <form method="post" action="{{ route('todos.destroy', $t) }}">
              @csrf
              @method('DELETE')
              <button class="btn danger" type="submit">
                <i class="fa-solid fa-trash"></i> 削除
              </button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  @endif
</section>
@endsection
