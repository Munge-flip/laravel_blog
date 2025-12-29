This is the index

<form method="POST" action="{{route('logout')}}">
    @csrf
    <button type="submit">Logout</button>
</form>

<a href="{{route('forms.create')}}">
    <button>Add</button>
</a>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Text</th>
            <th>Email</th>
            <th>Color</th>
            <th>Game</th>
            <th>Checkbox</th>
            <th>Birthday</th>
            <th>Created at</th>
            <th>Action</th>
        </tr>
    </thead>
    @forelse($forms as $form)
    <tr>
        <td> {{$form->id}} </td>
        <td> {{$form->text}} </td>
        <td> {{$form->email}} </td>
        <td> {{$form->color}} </td>
        <td> <span style="background-color: {{ $form->color }}; padding: 5p 10px; color: white; border: 1px solid #ccc">
                {{$form->game}}
        </td>
        <td> {{$form->checkbox}} </td>
        <td> {{$form->date}} </td>
        <td> {{$form->created_at->format('M d, Y')}} </td>
        <td>
            <a href="{{route('forms.show', $form->id)}}">View</a>
            <a href="{{route('forms.edit', $form->id)}}">Edit</a>
            <form method="POST" action="{{route('forms.destroy', $form->id)}}" onsubmit="return confirm('Are you sure');" style="display: inline">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @empty
    <div>The table is empty</div>
    @endforelse
</table>
