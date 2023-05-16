<x-admin.layout>
    <x-slot name="title">
        Users
    </x-slot>
    <div class="my-3">
        <a href="/admin/users/create" class="btn btn-info">Create User</a>
    </div>
    <x-admin.tables.user />
</x-admin.layout>