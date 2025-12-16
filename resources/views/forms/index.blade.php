this is the index
<br>

<table>
    <thead>
        <th>ID</th>
        <th>Username</th>
    </thead>
    @foreach($forms as $value)
    <tr>
        <td> {{$value['id']}} </td>
        <td> {{$value['username']}} </td>
    </tr>
    @endforeach
</table>

<div>
    <a href="{{route('forms.create')}}">Create</a>
</div>

<form method="POST" action="{{route('logout')}}">
    @csrf
    <button>Logout</button>
</form>
