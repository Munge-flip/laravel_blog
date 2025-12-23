<div>
    <p><strong>ID: </strong> {{$form->id}} </p>
    <p><strong>Username: </strong> {{$form->username}} </p>
    <p><strong>Password: </strong> {{$form->password}} </p>
    <p><strong>Date Created: </strong> {{$form->created_at->format('M d, Y')}} </p>
    <a href="{{route('forms.index')}}">Back to the list</a>
</div>
