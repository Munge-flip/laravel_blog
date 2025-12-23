<h3>Sample Input Types</h3>

<form method="POST" action="{{route('forms.store')}}">
    @csrf
    <div>
        <label for="create-username">Username</label><br>
        <input type="text" name="username" id="create-username" value="{{old('username')}}" required>
        @error('name')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>
    <div>
        <label for="create-password">Password</label><br>
        <input type="password" name="password" id="create-password" required>
        @error('password')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>
    <input type="submit" value="SUBMIT">
</form>
