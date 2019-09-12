@extends('layout')

@section('title', 'Login')

@section('content')

    <h3>Login Page</h3>

    <form method="POST" action="/webreports">
        {{-- // Used so hackers can't create another form and POST to web page --}}
        {{csrf_field()}} 
        <div>
            <input type="text" name="username" placeholder="Username">
        </div>
        <div>
            <input type="password" name="password" placeholder="Password">
        </div>
        <div>
            <button type="submit">Log in</button>
        </div>
    </form>

    {{-- $value = $request->session()->get('key'); --}}

    <a href="/sample" class="btn btn-danger">Go to sample page</a>

    <a href="/createaccount" class="btn btn-warning">Create account</a>

    {{-- @foreach ($accounts as $account)
        <li>{{ $account->username }}</li>

    @endforeach --}}

@endsection