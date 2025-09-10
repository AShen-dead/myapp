<x-layout>
<div class="container mt-5">
    <h2>Edit Cat</h2>

    <form action="{{ route('cats.update', $cat->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ $cat->name }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Breed</label>
            <input type="text" name="breed" value="{{ $cat->breed }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Age</label>
            <input type="number" name="age" value="{{ $cat->age }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Color</label>
            <input type="text" name="color" value="{{ $cat->color }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('cats.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
</x-layout>
