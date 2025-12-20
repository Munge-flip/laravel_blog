<div>
    <h3>Form Details</h3>
    <p><strong>ID:</strong> {{ $form->id }}</p>
    <p><strong>Username:</strong> {{ $form->username }}</p>
    <p><strong>Password (Hashed):</strong> {{ $form->password }}</p>
    <p><strong>Created:</strong> {{ $form->created_at->format('M d, Y') }}</p>
    
    <a href="{{ route('forms.index') }}">Back to List</a>
</div>