<form action="">
    <h3>Login</h3>
    <div>
        <label for="login-email">Email</label><br>
        <input type="email" value=" {{ old('email') }} " name="email" required><br>
        @error('email')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>
    <div>
        <label for="login-password">Password</label><br>
        <input type="password" name="password" required><br>
        @error('password')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>
    <button type="submit">Login</button>
    <a href=" {{ route('register') }} ">Don't have an account yet? Register</a>
</form>
