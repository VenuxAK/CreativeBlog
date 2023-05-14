<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12  col-sm-10 col-md-8 col-lg-6 col-xl-5">
                <div class="card px-4 pt-1 pb-3 my-4 shadow-sm">
                    <h3 class="text-primary text-center mb-2">Register</h3>
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="inputName" class="form-label">Full name</label>
                            <input name="name" value="{{ old('name') }}" type="text" class="form-control"
                                id="inputName">
                            @error('name')
                            <p class="text-danger"> <b> {{ $message }} </b> </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="inputUsername" class="form-label">Username</label>
                            <input name="username" value="{{ old('username') }}" type="text" class="form-control"
                                id="inputUsername">
                            @error('username')
                            <p class="text-danger"> <b> {{ $message }} </b> </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label">Email address</label>
                            <input name="email" value="{{ old('email') }}" type="email" class="form-control"
                                id="inputEmail">
                            @error('email')
                            <p class="text-danger"> <b> {{ $message }} </b> </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword" class="form-label">Password</label>
                            <input name="password" value="{{ old('password') }}" type="password" class="form-control"
                                id="inputPassword">
                            @error('password')
                            <p class="text-danger"> <b> {{ $message }} </b> </p>
                            @enderror
                        </div>
                        <p class="mt-3">Already have an account?
                            <a href="/login">Login</a> Here
                        </p>
                        <div class="d-md-flex justify-content-between align-items-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
