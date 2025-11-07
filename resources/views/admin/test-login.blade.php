@extends('layouts.auth')

@section('title', 'Test Login')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Test Login</title>
</head>
<body>
    <h1>Test Login Form</h1>
    
    @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('admin.login.post') }}" method="POST">
        @csrf
        <div>
            <label>Email:</label>
            <input type="email" name="email" value="admin@bumdesjuron.desa.id" required>
        </div>
        <div>
            <label>Password:</label>
            <input type="password" name="password" value="admin123" required>
        </div>
        <div>
            <label>
                <input type="checkbox" name="remember"> Remember me
            </label>
        </div>
        <button type="submit">Login</button>
    </form>
</body>
</html>
@endsection