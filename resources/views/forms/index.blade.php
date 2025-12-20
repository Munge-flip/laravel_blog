<a href="{{route('forms.create')}}">Add</a>
<form method="POST" action="{{route('logout')}}">
    @csrf
    <button type="submit">Logout</button>
</form>
