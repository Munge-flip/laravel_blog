Input types

<form method="POST" action="{{route('forms.store')}}">
    @csrf
    <div>
        <label for="create-text">text</label><br>
        <input type="text" name="text" id="create-text">
        @error('text')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>
    <div>
        <label for="create-email">Email</label><br>
        <input type="email" name="email" id="create-email">
        @error('email')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>
    <div>
        <label for="create-password">Password</label><br>
        <input type="password" name="password" id="create-password">
        @error('password')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>
    <div>
        <label for="create-color">Color</label><br>
        <input type="color" name="color" id="create-color">
        @error('color')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>
    <p>Favorite Game</p>
    <input type="radio" name="game" id="create-game" value="{{old('game')}}">
    <label for="create-game">Genshin</label>
    <input type="radio" name="game" id="create-game" value="{{old('game')}}">
    <label for="create-game">Honkai Star Rail</label>
    <input type="radio" name="game" id="create-game" value="{{old('game')}}">
    <label for="create-game">Zenless Zone Zero</label>
    <input type="radio" name="game" id="create-game" value="{{old('game')}}">
    <label for="create-game">Wuthering Waves</label>
</form>
