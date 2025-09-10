<x-layout>
<div class="container mt-5">
    <h2>Add New Cat</h2>

    <form action="{{ route('cats.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Breed</label>
            <input type="text" name="breed" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Age</label>
            <input type="number" name="age" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Color</label>
            <input type="text" name="color" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('cats.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
</x-layout>
