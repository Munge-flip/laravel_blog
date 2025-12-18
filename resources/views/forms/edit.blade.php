<h3>Edit</h3>

<form method="POST" action="{{route('forms.update', $form->id)}}">
    @csrf
    @method('PATCH')
    <div>
        <label for="edit-username">Username</label><br>
        <input type="text" name="username" id="edit-username" value="{{old('username', $form->username)}}" required>
        @error('text')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>
    <div>
        <label for="edit-password">Password</label><br>
        <input type="password" name="password" id="edit-password" required>
        @error('password')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>
    <input type="submit" value="SUBMIT">
</form>
