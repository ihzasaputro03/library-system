@extends('layouts.app')

@section('title', 'Login Perpustakaan')

@section('content')
    <div>
        <h2>Login</h2>

        @if($errors->any())
            <div>
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login.process') }}" method="POST">
            @csrf

            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required style="width: 100%; padding: 8px; box-sizing: border-box;">
            </div>

            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required style="width: 100%; padding: 8px; box-sizing: border-box;">
            </div>

            <button type="submit">Login</button>
        </form>
    </div>
@endsection