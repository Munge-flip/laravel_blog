this is the index

<form method="POST" action="{{route('logout')}}">
    @csrf
    <button>Logout</button>
</form>

<a href="{{route('forms.create')}}">Add</a>

<table border="1">
    <thead>
        <th>ID</th>
        <th>Username</th>
        <th>Date Created</th>
        <th>Action</th>
    </thead>
    @forelse($forms as $form)
    <tr>
        <td> {{$form->id}} </td>
        <td> {{$form->username}} </td>
        <td> {{$form->created_at->format('M d, Y')}} </td>
        <td>
            <a href="{{route('forms.edit', $form->id)}}">Edit</a>
        </td>
    </tr>
    @empty
    <div>Forms is empty</div>
    @endforelse
</table>
