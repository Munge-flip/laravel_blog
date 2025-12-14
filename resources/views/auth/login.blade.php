<form method="POST" action="{{route('login')}}">
    @csrf
    <h3>Login</h3>
    <div>
        <label for="login-email">Email</label><br>
        <input type="email" name="email" id="login-email" value="{{old('email')}}" required><br>
        @error('email')
        <div style="color"> {{$message}} </div>
        @enderror
    </div>
    <div>
        <label for="login-password">Password</label><br>
        <input type="password" name="password" id="login-password" required><br>
        @error('name')
        <div style="color"> {{$message}} </div>
        @enderror
    </div>
    <button type="submit">Login</button>
    <a href=" {{route('register')}} ">Register</a>
</form>
