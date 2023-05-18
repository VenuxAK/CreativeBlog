<x-admin.layout>
    <x-slot name="title">
        Categories
    </x-slot>
    <div class="my-3">
        <a href="/admin/categories/create" class="btn btn-primary">Create Category</a>
    </div>
    <x-admin.tables.category :categories="$categories" />
</x-admin.layout>
