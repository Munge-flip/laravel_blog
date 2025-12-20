<a href="{{route('forms.create')}}">Add</a>
<form method="POST" action="{{route('logout')}}">
    @csrf
    <button type="submit">Logout</button>
</form>

<table border="1">
    <thead>
        <th>ID</th>
        <th>Username</th>
        <th>Created Date</th>
        <th>Action</th>
    </thead>
    @forelse($forms as $form)
    <tr>
        <td> {{$form->id}} </td>
        <td> {{$form->username}} </td>
        <td> {{$form->created_at->format('M d, Y')}} </td>
        <td>
            <a href="{{route('forms.show', $form->id)}}">View</a>
            <a href="{{route('forms.edit', $form->id)}}">Edit</a>
            <a href="{{route('forms.destroy', $form->id)}}">Delete</a>
        </td>
    </tr>
    @empty

    @endforelse
</table>
