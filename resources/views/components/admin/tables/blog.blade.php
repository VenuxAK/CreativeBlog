<x-admin.card>
    <x-slot name="title">
        Blogs Table
    </x-slot>
    <x-admin.table>
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Author</th>
                <th>Intro</th>
                <th>Created At</th>
                @if (!Request::is('admin'))
                <th class="text-center" colspan="2">Action</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach (range(0,5) as $blog)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>
                    <a href="#" target="_blank">What is programming?</a>
                </td>
                <td>Minn</td>
                <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti</td>
                <td>16 May 2023</td>
                @if (!Request::is('admin'))
                <td>
                    <a href="/admin/blogs/blog-name/edit" class="btn btn-warning">Edit</a>
                </td>
                <td>
                    <button class="btn btn-danger">Delete</button>
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </x-admin.table>
</x-admin.card>