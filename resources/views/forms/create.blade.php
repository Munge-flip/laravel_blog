Add

<form method="POST" action="{{route('forms.store')}}">
    @csrf
    <div>
        <label for="create-firstName">First Name</label><br>
        <input type="text" name="firstName" id="create-firstName" value="{{old('firstName')}}">
        @error('firstName')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>
    <div>
        <label for="create-lastName">Last Name</label><br>
        <input type="text" name="lastName" id="create-lastName" value="{{old('lastName')}}">
        @error('lastName')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>
    <div>
        <label for="create-middleName">Middle Name</label><br>
        <input type="text" name="middleName" id="create-middleName" value="{{old('middleName')}}">
        @error('middleName')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>
    <div>
        <label for="create-dateOfBirth">Middle Name</label><br>
        <input type="date" name="dateOfBirth" id="create-dateOfBirth" value="{{old('dateOfBirth')}}">
        @error('dateOfBirth')
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
    <div>
        <label for="create-color">Favorite Color</label><br>
        <input type="color" name="color" id="create-color" required>
        @error('color')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>
    <input type="submit" value="SUBMIT">
</form>
