<form method="POST" action="{{route('register')}}">
    @csrf
    <h3>Register</h3>
    <div>
        <label for="reg-name">Name</label><br>
        <input type="text" name="name" id="reg-name" value="{{old('name')}}" required>
        @error('name')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>
    <div>
        <label for="reg-email">Email</label><br>
        <input type="email" name="email" id="reg-email" value="{{old('email')}}" required>
        @error('email')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>
    <div>
        <label for="reg-password">Password</label><br>
        <input type="password" name="password" id="reg-password" required>
        @error('password')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>
    <div>
        <label for="reg-confirm">Confirm Password</label><br>
        <input type="password" name="password_confirmation" id="reg-confirm" required>
        @error('password')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>
    <button type="submit">Register</button>
    <a href="{{route('login')}}">Login</a>
</form>
