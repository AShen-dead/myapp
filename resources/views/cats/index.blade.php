<x-layout>
<div class="container mt-5">
    <h1 class="text-center mb-4">🐱 Cats CRUD</h1>
    
    <a href="{{ route('cats.create') }}" class="btn btn-success mb-3">+ Add New Cat</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Breed</th>
                <th>Age</th>
                <th>Color</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($cats as $cat)
                <tr>
                    <td>{{ $cat->id }}</td>
                    <td>{{ $cat->name }}</td>
                    <td>{{ $cat->breed }}</td>
                    <td>{{ $cat->age }}</td>
                    <td>{{ $cat->color }}</td>
                    <td>
                        <a href="{{ route('cats.edit', $cat->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('cats.destroy', $cat->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No cats found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
</x-layout>
