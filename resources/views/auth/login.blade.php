<form method="POST" action=" {{ route('login') }} ">
    @csrf
    <h3>Login</h3><br>
    <div>
        <label for="">Email</label><br>
        <input type="email" name="email" value=" {{old('email')}} " required><br>
        @error('email')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>
    <div>
        <label for="">Password</label><br>
        <input type="password" name="password" required><br>
        @error('password')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>
    <button type="submit">Login</button>
    <a href=" {{ route('register') }} ">Don't have an account yet? Register</a>
</form>
