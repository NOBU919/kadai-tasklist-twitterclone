<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>タスクリスト</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    </head>

    <body>
        <header class="mb-4">
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                {{-- トップページへのリンク --}}
                <a class="navbar-brand" href="/">タスクリスト</a>

                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="nav-bar">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="navbar-nav">
                        {{-- メッセージ作成ページへのリンク --}}
                <li class="nav-item">{!! link_to_route('tasks.create', '新規タスク', [], ['class' => 'nav-link']) !!}</li>
                    </ul>
                </div>
            </nav>
        </header>

        
        <div class="container">
            {{-- エラーメッセージ --}}
            @include('commons.error_messages')
            
            {{-- ナビゲーションバー --}}
        　　@include('commons.navbar')
            
            @yield('content')
        </div>

        <!-- JavaScriptの指定は省略 -->
    </body>
</html>