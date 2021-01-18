@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
        @if(Session::has('message'))
                <div class="alert alert-success">
                {{Session::get('message')}}
                </div> 
        @endif
            <div class="card">
                <div class="card-header">TODO全一覧</div>
                
                <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">id</th>
                        <th scope="col">タイトル</th>
                        <th scope="col">内容</th>
                        <th scope="col">開始時間</th>
                        <th scope="col">終了時間</th>
                        <th></th>
                        <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($todos)>0)
                        @foreach($todos as $key=>$todo)
                        <tr>
                            <td>{{ $todo->id }}</td>
                            <td>{{$todo->title}}</td>
                            <td>{{$todo->content}}</td>
                            <td>{{$todo->begin}}</td>
                            <td>{{$todo->end}}</td>
                            <td>
                                <a href="{{route('todo.edit', [$todo->id])}}">
                                    <button class="btn btn-outline-success">
                                    編集
                                    </button>
                                </a>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$todo->id}}">
                                削除
                                </button>
                            </td>
                        </tr>
                        @endforeach
                        @else
                            <td>todoが一つもありません。</td>
                        @endif
                    </tbody>
                    </table>
                        {{$todos->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
