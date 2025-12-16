this is the index
<div>
    <a href="{{route('forms.create')}}">Create</a>
</div>

<form method="POST" action="{{route('logout')}}">
    @csrf
    <button>Logout</button>
</form>
