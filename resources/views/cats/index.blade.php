<x-layout>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Cats Table</h1>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Breed</th>
                        <th>Age</th>
                        <th>Color</th>
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
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No cats found 🐾</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
