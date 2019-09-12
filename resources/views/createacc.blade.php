@extends('layout')

@section('content')
    <h1>Create User</h1>
    <form method="POST"action="/createaccount">
        {{csrf_field()}}
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <input type="number" name="active" placeholder="0 or 1 for active">
        <button type="submit">Create user</button>

    </form>

@endsection