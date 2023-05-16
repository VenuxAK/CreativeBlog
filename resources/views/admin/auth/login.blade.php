<x-admin.layout>
    <div style="width:100vw;height:100vh;display:grid;place-items:center">
        <div class="container">
            <div class="row">
                <div class="col-12 col sm-10 col-md-7 col-lg-5 mx-auto">
                    <div class="card shadow px-3 py-4">
                        <h3 class="text-center text-primary">Login</h3>
                        <form action="">
                            <div class="mb-3">
                                <label for="inputEmail">Email Address</label>
                                <input type="email" name="email" class="form-control" id="inputEmail">
                            </div>
                            <div class="mb-3">
                                <label for="inputPassword">Password</label>
                                <input type="password" name="password" class="form-control" id="inputPassword">
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.layout>
