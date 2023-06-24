<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <title>
        @yield('set-title')
    </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" rel="stylesheet" type="text/css">

    <!-- <link rel="icon" type="image/png" href="/images/favicon.ico"> -->
    <link rel="icon" type="image/png" href="/image/logo_clinicee.png">
    <!-- General CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css"
        rel="stylesheet">
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css"
        rel="stylesheet">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <!-- CSS Libraries -->

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('stisla-master/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla-master/assets/css/components.css') }}">
    <link href="/js/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    @vite(['resources/js/app.js', 'resources/sass/admin.scss'])

    @yield('main-style')
    @yield('more-style')

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment-with-locales.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js">
    </script>

    <script src="/stisla-master/assets/js/scripts.js"></script>
    <script src="/js/fancybox/source/jquery.fancybox.js" type="text/javascript"></script>

    {{-- script --}}
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-151870569-1"></script>
    <link rel="stylesheet" href="{{ asset('css/backend.css') }}">
</head>

<body class="bg-bg">
    <form method="POST" action="{{ route('login') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="container  px-0" >
            <main>
                <div class="col-12 row px-0 mx-0 mt-5">
                <div class="col-12  px-0">
                    @if ($errors->any())
                    <div class="col-10 offset-1">
                        <div class="form-floating mt-2 ">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ $errors->first() }}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="col-10 offset-1">
                        <div class="form-floating mt-2 ">
                            <input type="text" class="form-control" id="floatingInput" name="username"
                                placeholder="name@example.com">
                            <label for="floatingInput">Email/Username</label>
                        </div>
                        <div class="form-floating mt-2">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                                name="password">
                            <label for="floatingPassword">Password</label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center my-5">
                        <button class="btn btn-main mr-md-2">LOGIN</button>
                    </div>
                </div>
            </main>
            </div>
        </div>
    </form>
</body>

</html>
