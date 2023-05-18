<x-admin.layout>
    <x-slot name="title"> Blogs </x-slot>
    <div class="my-3">
        <a class="btn btn-primary" href="/admin/blogs/create">Create Blog</a>
    </div>
    <x-admin.tables.blog :blogs="$blogs">
        <x-slot name="paginate">
            {{ $blogs->links() }}
        </x-slot>
    </x-admin.tables.blog>
</x-admin.layout>
