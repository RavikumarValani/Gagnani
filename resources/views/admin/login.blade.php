<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/login.css') }}">
</head>

<body>
    <div class="container tm-mt-big tm-mb-big">
        <div class="row">
            <div class="col-12 mx-auto tm-login-col">
                <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h2 class="tm-block-title mb-4">Welcome to Admin Dashboard</h2>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            <x-input-success :messages="session('success')" class="mt-2" />
                            <form action="{{ route('verify') }}" method="post" class="tm-login-form">
                                @csrf
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input name="email" type="text" class="form-control validate" id="username" value="" required />
                                </div>
                                <div class="form-group mt-3">
                                    <label for="password">Password</label>
                                    <input name="password" type="password" class="form-control validate" id="password" value="" required />
                                    <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                                <div class="form-group mt-4">
                                    <button type="submit" class="btn btn-primary btn-block text-uppercase">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('admin/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('admin/js/form.js') }}"></script>
</body>

</html>