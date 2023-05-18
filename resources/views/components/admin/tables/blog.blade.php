<x-admin.card>
    <x-slot name="title">
        Blogs Table
    </x-slot>
    <x-admin.table>
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Intro</th>
                <th>Author</th>
                <th>Category</th>
                <th>Created At</th>
                @if (!Request::is('admin'))
                <th class="text-center" colspan="2">Action</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
            <tr>
                <td>{{ $blog->id }}</td>
                <td>
                    <a href="/blogs/{{$blog->slug}}" target="_blank"> {{ $blog->title }} </a>
                </td>
                <td> {!! substr($blog->body, 0, 20)."..." !!} </td>
                <td> {{ $blog->author->name }} </td>
                <td> {{ $blog->category->name }} </td>
                <td> {{ $blog->created_at->format('j M Y') }} </td>
                @if (!Request::is('admin'))
                <td>
                    <a href="/admin/blogs/{{ $blog->slug }}/edit" class="btn btn-warning">Edit</a>
                </td>
                <td>
                    <form action="/admin/blogs/{{$blog->slug}}/delete" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Are you sure want to delete this blog')">Delete</button>
                    </form>
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </x-admin.table>
    {{ $paginate }}
</x-admin.card>
