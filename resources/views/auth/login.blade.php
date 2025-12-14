<form method="POST" action=" {{ route('login') }} ">
    @csrf
    <h3>Login</h3>
    <div>
        <label for="login-email">Email</label><br>
        <input type="email" id="login-email" value="{{old('email')}}" name="email" required>
        @error('email')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>
    <div>
        <label for="login-password">Password</label><br>
        <input type="password" name="password" required>
        @error('password')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>
    <button type="submit">Login</button>
    <a href=" {{ route('register') }} ">Don't have an account yet? Register</a>
</form>
