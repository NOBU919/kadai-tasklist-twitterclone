@extends('layouts.app')

@section('content')

 <h1>タスク一覧</h1>

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $tasks)
                <tr>
                    <td>{!! link_to_route('tasks.show', $tasks->id, ['task' => $tasks->id]) !!}</td>
                    <td>{{ $tasks->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {{-- タスク作成ページへのリンク --}}
    {!! link_to_route('tasks.create', '新規タスク作成', [], ['class' => 'btn btn-primary']) !!}

@endsection