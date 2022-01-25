<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    @include('layouts.ecommerce.admin_template.link_stylesheets')
</head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container" data-layout="container">
            <div class="row flex-center min-vh-100 py-6 text-center">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <a class="d-flex flex-center mb-4" href="{{ route('home') }}">
                        <img class="me-2" src="{{ asset('ecommerce/img/icon.jpeg') }}" alt="" width="58" />
                        <span class="font-sans-serif fw-bolder fs-5 d-inline-block">ehardwares</span>
                    </a>
                    <div class="card">
                        <div class="card-body p-4 p-sm-5">
                            <h5 class="mb-0">Forgot your password?</h5>
                            <small>Enter your email and we'll send you a reset link.</small>
                            <form class="mt-4">
                                <input class="form-control" type="email" placeholder="Email address" />
                                <div class="mb-3"></div>
                                <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Send reset link</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
    @include('layouts.ecommerce.admin_template.scripts_link')
    @include('layouts.ecommerce.admin_template.scripts')
    @yield('scripts')
  </body>
</html>
