<x-admin.layout>
    <!-- Page Heading -->
    <x-slot name="title">Dashboard</x-slot>

    <!-- DataTales Example -->
    <x-admin.tables.blog :blogs="$blogs">
        <x-slot name="paginate"></x-slot>
    </x-admin.tables.blog>
    <x-admin.tables.user />

</x-admin.layout>
