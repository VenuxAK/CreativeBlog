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
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (range(0,3) as $blog)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td> Travel </td>
                <td>travel</td>
                <td>16 May 2023</td>
                <td class="text-center">
                    <a href="/admin/categories/name/edit" class="btn btn-warning">Edit</a>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </x-admin.table>
</x-admin.card>