@extends('layout')

@section('content')
    <form action="/edituser" method="POST">
        {{csrf_field()}}
        <label for="selectUser">Username:</label>
        <select name="selectUser" id="selectUser">
            @foreach ($accounts as $account)
                <option value="{{$account->username}}">{{$account->username}}</option>
            @endforeach
        </select>

        <button type="submit">Edit user</button>
    </form>

@endsection