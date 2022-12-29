<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
    <link href="{{ asset('css/app.css') }}" rel=stylesheet">
</head>
<body>
    <div class="container">
        <div class="mt-5">
            <!-- @if (session('login_success'))
                <div class="alert alert-success">
                    {{ session('login_success') }}
                </div>
            @endif -->

            <x-alert type="success" :session="session('login_success')"></x-alert>


            <h3>profile</h3>
            <ul>
                <li>name:{{ Auth::user()->nickname }}</li>
                <li>mailaddress:{{Auth::user()->email }}</li>
            </ul>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-danger">log out</button>
            </form>
        </div>
    </div>
</body>
</html>
