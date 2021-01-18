@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if(Session::has('message'))
                <div class="alert alert-success">
                {{Session::get('message')}}
                </div> 
        @endif
            <form action="{{route('todo.store')}}" method="post" enctype="multipart/form-data">@csrf
            <div class="card">
                <div class="card-header">TODOを追加する</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="title">タイトル</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror">
                        @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">内容</label>
                        <textarea class="form-control @error('content') is-invalid @enderror" name="content"></textarea>
                        @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="begin">開始時間</label>
                        <input type="datetime-local" name="begin" class="form-control @error('begin') is-invalid @enderror">
                        @error('begin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="end">終了時間</label>
                        <input type="datetime-local" name="end" class="form-control @error('end') is-invalid @enderror">
                        @error('end')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <button class="btn btn-outline-primary" type="submit">送信</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
