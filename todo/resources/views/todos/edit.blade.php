@extends('layouts.app')

@section('title', 'ToDo 編集')

@section('content')
<section class="card">
  <h2><i class="fa-solid fa-pen-to-square"></i> 編集</h2>

  @if ($errors->any())
    <p class="alert">{{ $errors->first() }}</p>
  @endif

  <form method="post" action="{{ route('todos.update', $todo) }}" class="form">
    @csrf
    @method('PUT')

    <label>
      タイトル（必須）
      <input type="text" name="title" value="{{ old('title', $todo->title) }}" required>
    </label>

    <label>
      期限（任意）
      <input type="date" name="due_date" value="{{ old('due_date', optional($todo->due_date)->format('Y-m-d')) }}">
    </label>

    <label class="check">
      <input type="checkbox" name="is_done" {{ old('is_done', $todo->is_done) ? 'checked' : '' }}>
      完了にする
    </label>

    <button class="btn primary" type="submit">
      <i class="fa-solid fa-arrows-rotate"></i> 更新
    </button>
  </form>
</section>
@endsection
