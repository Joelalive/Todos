        @extends('layout')

                @section('content')

                 @include('errors')

                 @if(session('message'))
                 <div class="container alert alert-success"  role="alert">
                    <ul>
                    <li>{{ session('message') }}</li>
                    </ul>
                </div>
                 @endif
                <div class="row">
                    <div class="col-lg-12 col-lg-offset-3">
                    <form action="/create/todo" method="POST">
                    @csrf
                        <input type="text" class="form-control input-lg {{ $errors->has('todo') ? 'is-invalid' : '' }}" name="todo" placeholder="Create new Todo" value="{{ old('todo') }}" >
                    </form>
                   
                    </div>
                </div>

                

                    <hr/>
                   @foreach($todos as $todo)
                   <p>{{$todo->todo}}
                   <a href="/todos/delete/{{$todo->id}}" class="btn btn-danger">X</a>
                   @if(!$todo->completed)
                   <a href="/todos/find/{{$todo->id}}" class="btn btn-primary">Update</a>
                   <a href="/todo/completed/{{$todo->id}}" class="btn btn-success">Mark as Completed</a>
                   @else
                   <span class="text-success">Completed</span>
                   @endif
                   </p>
                   <hr/>
                   @endforeach

                @endsection

