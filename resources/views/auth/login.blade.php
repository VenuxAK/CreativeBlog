<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-5">
                <div class="card px-4 pt-1 pb-3 my-4 shadow-sm">
                    <h3 class="text-primary text-center mb-2"> Login </h3>
                    <form action="" method="POST">
                        @csrf
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
                            <input name="password" type="password" class="form-control" id="inputPassword">
                            @error('password')
                            <p class="text-danger"> <b> {{ $message }} </b> </p>
                            @enderror
                        </div>
                        <div>
                            <p class="mt-3"> Don't have an account yet?
                                <a href="/register">Register</a> Here
                            </p>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>