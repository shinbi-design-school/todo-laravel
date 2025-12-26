@extends('layouts.app')

@section('title', 'ToDo 新規作成')

@section('content')
<section class="card">
  <h2><i class="fa-solid fa-plus"></i> 新規作成</h2>

  @if ($errors->any())
    <p class="alert">{{ $errors->first() }}</p>
  @endif

  <form method="post" action="{{ route('todos.store') }}" class="form">
    @csrf

    <label>
      タイトル（必須）
      <input type="text" name="title" value="{{ old('title') }}" required>
    </label>

    <label>
      期限（任意）
      <input type="date" name="due_date" value="{{ old('due_date') }}">
    </label>

    <button class="btn primary" type="submit">
      <i class="fa-solid fa-floppy-disk"></i> 登録
    </button>
  </form>
</section>
@endsection
