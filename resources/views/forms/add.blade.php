<form method="POST" action="{{route('forms.store')}}">
    @csrf
    <h3>Input Types</h3>
    <div>
        <label for="add-username">Username</label><br>
        <input type="text" name="username" id="add-username" value="{{old('username')}}" required>
        @error('username')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>
    <div>
        <label for="add-password">Password</label><br>
        <input type="password" name="password" id="add-password" required>
        @error('password')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>
    <input type="submit" value="SUBMIT">
</form>
