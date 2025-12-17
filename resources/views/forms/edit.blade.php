<form method="POST" action="{{route('forms.update', $form->id)}}">
    @csrf
    @method('PATCH')
    <div>
        <label for="update-username">Username</label><br>
        <input type="text" name="username" id="update-username" value="{{old('username', $form->username)}}" required>
        @error('username')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>
    <div>
        <label for="update-password">Password</label><br>
        <input type="password" name="password" id="update-password" required>
        @error('username')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>
    <input type="submit" value="Submit">
</form>
