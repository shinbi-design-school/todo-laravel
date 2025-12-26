<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>@yield('title', 'ToDo')</title>

  <link rel="preconnect" href="https://cdnjs.cloudflare.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    *{box-sizing:border-box}
    body{margin:0;font-family:system-ui,-apple-system,"Segoe UI",Roboto,"Noto Sans JP",sans-serif;background:#f6f7fb;color:#222}
    .container{width:min(1000px,92%);margin:0 auto}
    .site-header{background:#111827;color:#fff;padding:16px 0}
    .header-row{display:flex;align-items:center;justify-content:space-between;gap:16px}
    .brand{margin:0;font-size:18px;font-weight:700;display:flex;align-items:center;gap:10px}
    .nav{display:flex;gap:10px;flex-wrap:wrap}
    .card{background:#fff;border-radius:12px;padding:18px;margin:18px 0;box-shadow:0 6px 16px rgba(0,0,0,.06)}
    .btn{border:1px solid #d1d5db;background:#fff;padding:8px 12px;border-radius:10px;cursor:pointer;text-decoration:none;color:#111827;display:inline-flex;align-items:center;gap:8px}
    .btn:hover{background:#f3f4f6}
    .btn.primary{background:#2563eb;border-color:#2563eb;color:#fff}
    .btn.primary:hover{background:#1d4ed8}
    .btn.danger{border-color:#ef4444;color:#b91c1c}
    .btn.danger:hover{background:#fee2e2}
    .table{width:100%;border-collapse:collapse}
    .table th,.table td{border-bottom:1px solid #e5e7eb;padding:10px;text-align:left;vertical-align:middle}
    .table th{font-size:12px;color:#6b7280}
    .badge{display:inline-flex;align-items:center;gap:6px;padding:4px 10px;border-radius:999px;font-size:12px}
    .badge.todo{background:#e0f2fe;color:#075985}
    .badge.done{background:#dcfce7;color:#166534}
    .strike{text-decoration:line-through;color:#6b7280}
    .form{display:grid;gap:12px;max-width:520px}
    label{display:grid;gap:6px;font-size:14px}
    input[type="text"],input[type="date"]{padding:10px 12px;border-radius:10px;border:1px solid #d1d5db;background:#fff}
    .check{display:flex;align-items:center;gap:10px}
    .actions{display:flex;flex-wrap:wrap;gap:8px}
    .alert{background:#fee2e2;border:1px solid #fecaca;padding:10px 12px;border-radius:10px;color:#991b1b}
    .muted{color:#6b7280}
  </style>
</head>
<body>
  <header class="site-header">
    <div class="container header-row">
      <h1 class="brand"><i class="fa-solid fa-list-check"></i> ToDo（Laravel）</h1>
      <nav class="nav">
        <a class="btn" href="{{ route('todos.index') }}"><i class="fa-solid fa-house"></i> 一覧</a>
        <a class="btn primary" href="{{ route('todos.create') }}"><i class="fa-solid fa-plus"></i> 新規</a>
      </nav>
    </div>
  </header>

  <main class="container">
    @yield('content')
  </main>
</body>
</html>
