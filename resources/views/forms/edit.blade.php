Input types

<form method="POST" action="{{route('forms.store')}}">
    @csrf
    <div>
        <label for="create-text">text</label><br>
        <input type="text" name="text" id="create-text" value="{{old('text', $form->text)}}">
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
    <div>
        <input type="radio" name="game" id="create-game" value="Genshin" {{old('game') == 'Genshin' ? 'checked' : ''}}>
        <label for="create-game">Genshin</label>
        <input type="radio" name="game" id="create-game" value="Honkai Star Rail" {{old('game') == 'Honkai Star Rail' ? 'checked' : ''}}>
        <label for="create-game">Honkai Star Rail</label>
        <input type="radio" name="game" id="create-game" value="Zenless Zone Zero" {{old('game') == 'Zenless Zone Zero' ? 'checked' : ''}}>
        <label for="create-game">Zenless Zone Zero</label>
        <input type="radio" name="game" id="create-game" value="Wuthering Waves" {{old('game') == 'Wuthering Waves' ? 'checked' : ''}}>
        <label for="create-game">Wuthering Waves</label><br>
        @error('game')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>
    <div>
        <input type="checkbox" name="checkbox" id="create-checkbox" value="1" {{old('checkbox') ? 'checked' : ''}}>
        <label for="create-checkbox">DreamyBull</label><br>
        @error('checkbox')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>
    <div>
        <label for="create-date">Date</label><br>
        <input type="date" name="date" id="create-date" value="{{old('date')}}">
        @error('date')
        <div style="color: red"> {{$message}} </div>
        @enderror
    </div>

    <input type="submit" value="SUBMIT">
</form>
