<x-admin.card>
    <x-slot name="title">
        Categories Table
    </x-slot>
    <x-admin.table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Created At</th>
                <th class="text-center" colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td> {{ $category->name }} </td>
                <td> {{ $category->slug }} </td>
                <td> {{ $category->created_at->format("j M Y") }} </td>
                <td class="text-center">
                    <a href="/admin/categories/{{$category->slug}}/edit" class="btn btn-warning">Edit</a>
                </td>
                <td class="text-center">
                    <form action="/admin/categories/{{$category->slug}}/delete" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Are you sure want to delete?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </x-admin.table>
</x-admin.card>
