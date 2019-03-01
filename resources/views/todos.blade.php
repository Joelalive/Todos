        @extends('layout')

                @section('content')

                 @include('errors')
                <div class="row">
                    <div class="col-lg-12 col-lg-offset-3">
                    <form action="/create/todo" method="POST">
                    @csrf
                        <input type="text" class="form-control input-lg" name="todo" placeholder="Create new Todo" value="{{ old('todo') }}" >
                    </form>
                   
                    </div>
                </div>

                

                    <hr/>
                   @foreach($todos as $todo)
                   <p>{{$todo->todo}}
                   <a href="/todos/delete/{{$todo->id}}" class="btn btn-danger">X</a>
                   <a href="/todos/find/{{$todo->id}}" class="btn btn-primary">Update</a>
                   @if(!$todo->completed)
                   <a href="/todo/completed/{{$todo->id}}" class="btn btn-success">Mark as Completed</a>
                   @else
                   <span class="text-success">Completed</span>
                   @endif
                   </p>
                   <hr/>
                   @endforeach

                @endsection

