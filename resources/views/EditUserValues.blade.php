@extends('layout')

@section('content')
    @foreach ($account as $a)
        <p>Edit user:</p>
        
        <form action="/editusercomplete" method="POST">
            {{csrf_field()}}
            <h4>"{{$a->username}}"</h4>
                <label for="userBeingChanged"hidden>DO NOT CHANGE INPUT: 'userBeingChanged'</label>
                <input name="userBeingChanged" id="userBeingChanged" value={{$a->username}} hidden readonly>
            <div>
                <input type="text" name="username" placeholder="username" value="{{$a->username}}">
                <input type="password" name="password" placeholder="password" value="{{$a->password}}">
                <label for="active">0 or 1 active</label>
                <input type="number" name="active" placeholder="0 or 1 active" value="{{$a->active}}">                
            </div>
            <button type="submit">Submit changes</button>    
        </form>

    @endforeach
@endsection