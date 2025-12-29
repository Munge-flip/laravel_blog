<div>
    <h3>Details</h3>
    <p><strong>ID: </strong> {{$form->id}} </p>
    <p><strong>Text: </strong> {{$form->text}} </p>
    <p><strong>Email: </strong> {{$form->email}} </p>
    <p><strong>Password: </strong> {{$form->password}} </p>
    <p><strong>Color: </strong> {{$form->color}} </p>
    <p><strong>Game: </strong> {{$form->game}} </p>
    <p><strong>Checkbox: </strong> {{$form->checkbox}} </p>
    <p><strong>Birthday: </strong> {{$form->date}} </p>
    <p><strong>Date Created: </strong> {{$form->created_at->format('M d, Y')}} </p>
</div>
