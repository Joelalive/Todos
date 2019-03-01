@extends('layout')

@section('content')

 @include('errors')
<div class="row">
    <div class="col-lg-12 col-lg-offset-3">
    <form action="/todo/update/{{$todo->id}}" method="POST">
    @csrf
    @method('PATCH')
        <input type="text" class="form-control input-lg" value="{{$todo->todo}}" name="todo" placeholder="Create new Todo" value="{{ old('todo') }}" >
    </form>
   
    </div>
</div>

@endsection

