<x-admin.card>
    <x-slot name="title">
        Users Table
    </x-slot>
    <x-admin.table>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Job</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Created At</th>
                @if (!Request::is('admin'))
                <th>Actions</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach (range(0,4) as $user)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>airi@gmail.com</td>
                <td>09123456789</td>
                <td>Tokyo</td>
                <td>2008/11/28</td>
                @if (!Request::is('admin'))
                <td>
                    <a href="/admin/users/username/edit" class="btn btn-warning">Edit</a>
                    <button class="btn btn-danger">Delete</button>
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Job</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Created At</th>
                @if (!Request::is('admin'))
                <th>Actions</th>
                @endif
            </tr>
        </tfoot>
    </x-admin.table>
</x-admin.card>