<x-admin.layout>
    <x-slot name="title"> </x-slot>
    <div class="row">
        <div class="col-12 col sm-10 col-md-7 col-lg-5 mx-auto">
            <div class="card shadow ">
                <div class="card-header">
                    <h3 class="text-center text-primary">Edit User</h3>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="mb-3">
                            <label for="inputName">Full name</label>
                            <input type="text" name="name" class="form-control" id="inputName">
                        </div>
                        <div class="mb-3">
                            <label for="inputUsername">Username</label>
                            <input type="text" name="username" class="form-control" id="inputUsername">
                        </div>
                        <div class="mb-3">
                            <label for="inputJobs">Jobs (Optional) </label>
                            <input type="text" name="jobs" class="form-control" id="inputJobs">
                        </div>
                        <div class="mb-3">
                            <label for="inputAddress">Address (Optional) </label>
                            <input type="text" name="address" class="form-control" id="inputAddress">
                        </div>
                        <div class="mb-3">
                            <label for="inputEmail">Email Address</label>
                            <input type="email" name="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword">Password</label>
                            <input type="password" name="password" class="form-control" id="inputPassword">
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" name="role" type="checkbox" value=""
                                id="flexCheckIndeterminate">
                            <label class="form-check-label" for="flexCheckIndeterminate">
                                Admin
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin.layout>