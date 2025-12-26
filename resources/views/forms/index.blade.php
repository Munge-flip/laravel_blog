This is the index

<form method="POST" action="{{route('logout')}}">
    @csrf
    <button type="submit">Logout</button>
</form>

<a href="{{route('forms.create')}}">
    Add
</a>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Middle Name</th>
            <th>Date of Birth</th>
            <th>Favorite Color</th>
            <th>Created at</th>
            <th>Action</th>
        </tr>
    </thead>
    @forelse($forms as $form)
    <tr>
        <td> {{$form->id}} </td>
        <td> {{$form->firstName}} </td>
        <td> {{$form->lastName}} </td>
        <td> {{$form->middleName}} </td>
        <td> {{$form->dateOfBirth}} </td>
        <td>
            <span style="background-color: {{ $form->color }}; padding: 5p 10px; color: white; border: 1px solid #ccc">
                {{$form->color}}
            </span>
        </td>
        <td> {{$form->created_at->format('M d, Y')}} </td>
        <td>
            <a href="{{route('forms.show', $form->id)}}">View</a>
            <a href="{{route('forms.edit', $form->id)}}">Edit</a>
            <form method="POST" action="{{route('forms.destroy', $form->id)}}" onsubmit="return confirm('Are you sure');" style="display: inline">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        </td>
    </tr>
    @empty

    @endforelse
</table>
