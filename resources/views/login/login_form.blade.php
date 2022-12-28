<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
</head>
<body>
    <script src="{{ asset('js/app.js') }}"></script>
    <form class="form-signin" method="POST" action="{{ route('login') }}">
        @csrf
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login in</button>
    </form>

    <link href={{ asset('css/app.css') }} rel="stylesheet"></link>
    <link href={{ asset('css/app.css') }} rel="stylesheet"></link>
</body>
</html>
