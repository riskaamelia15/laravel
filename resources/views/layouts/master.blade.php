<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('judul')</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>

<body>
    {{-- navbar ada di folder include --}}
    @include('include.nav')

    <!-- Header-->
    <header class="py-5">
        <div class="container px-lg-5">
            <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                <div class="m-4 m-lg-5">
                    <h1 class="display-5 fw-bold">@yield('welcome')</h1>
                    <p class="fs-4">Bootstrap utility classes are used to create this jumbotron since the old
                        component has been removed from the framework. Why create custom CSS when you can use utilities?
                    </p>
                    <a class="btn btn-primary btn-lg" href="{{ route('album') }}">Call to action</a>
                </div>
            </div>
        </div>
    </header>
    {{-- Akhir header --}}

    <!-- Page Content-->
    <section class="pt-4">
        <div class="container px-lg-5">
            <!-- Page Features-->
            <div class="row gx-lg-5">

                {{-- Memanggil isi content --}}
                @yield('content')

            </div>
        </div>
    </section>
    {{-- Akhir page content --}}

    <!-- Footer ada di folder include -->
    @include('include.footer')

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
