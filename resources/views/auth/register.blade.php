<form method="POST" action=" {{ route('register') }} ">
    @csrf
    <h3>Register</h3>
    <div>
        <label for="reg-name">Name</label><br>
        <input type="text" value=" {{old('name')}} " name="name" required>
        @error('name')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>
    <div>
        <label for="reg-email">Email</label><br>
        <input type="email" value=" {{old('email')}} " name="email" required>
        @error('email')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>
    <div>
        <label for="reg-password">Password</label><br>
        <input type="password" name="password" required>
        @error('password')
        <div style="color: red"> {{$message}} </div>
        @enderror</div>
    <div>
        <label for="reg-confirm">Confirm Password</label><br>
        <input type="password" name="password_confirmation" required>
    </div>
    <button type="submit">Register</button>
    <a href=" {{ route('login') }} ">Already have an account? Login</a>
</form>
