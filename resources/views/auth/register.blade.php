<form method="POST" action=" {{ route('register') }} ">
    @csrf
    <h3>Register</h3>
    <div>
        <label for="reg-name">Name</label><br>
        <input type="text" value=" {{old('name')}} " name="name" id="reg-name" required>
        @error('name')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>
    <div>
        <label for="reg-email">Email</label><br>
        <input type="email" value=" {{old('email')}} " name="email" id="reg-email" required>
        @error('email')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>
    <div>
        <label for="reg-password">Password</label><br>
        <input type="password" name="password" id="reg-password" required>
        @error('password')
        <div style="color: red"> {{$message}} </div>
        @enderror</div>
    <div>
        <label for="reg-confirm">Confirm Password</label><br>
        <input type="password" name="password_confirmation" id="reg-confirm" required>
    </div>
    <button type="submit">Register</button>
    <a href=" {{ route('login') }} ">Already have an account? Login</a>
</form>
