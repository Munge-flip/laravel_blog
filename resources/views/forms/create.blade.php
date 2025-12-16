<form method="POST" action="{{route('forms.store')}}">
    @csrf
    <div>
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username" required>
    </div>
    <div>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" required>
    </div>

    <input type="submit" value="Submit">
</form>
