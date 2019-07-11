@extends ('layout')

@section('title')
    Welcome to SeriousWeb Laravel Dev Site
@endsection

@section('content')
    <h1>SeriousWeb {{$foo}} Laravel Dev Site</h1>
    <ul>

      @foreach($tasks as $task)
          <li>{{$task}}</li>
        @endforeach
    </ul>
@endsection
