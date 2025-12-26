<div>
    <h3>Details</h3>
    <p><strong>ID: </strong>{{$form->id}}</p>
    <p><strong>First Name: </strong>{{$form->firstName}}</p>
    <p><strong>Last Name: </strong>{{$form->lastName}}</p>
    <p><strong>Middle Name: </strong>{{$form->middleName}}</p>
    <p><strong>Date of Birth: </strong>{{$form->dateOfBirth}}</p>
    <p><strong>Password</strong> {{$form->password}} </p>
    <p><strong>Created at: </strong>{{$form->created_at->format('M d, Y')}}</p>

    <a href="{{route('forms.index')}}">Back to List</a>
</div>
