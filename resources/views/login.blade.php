@extends('master_front')
@section('content')
    <section class="container g-py-50">
        <div class="row justify-content-center">
            <div class="col-sm-8 col-lg-5">
                <div class="g-brd-around g-brd-gray-light-v4 rounded g-py-40 g-px-30">
                    <header class="text-center mb-4">
                        <h2 class="h2 g-color-black g-font-weight-600">Login</h2>
                    </header>

                    <a  id="btn-login-fb" class="btn btn-block u-btn-indigo g-color-white">
                        <span class="fa fa-facebook"></span> Sign in with Facebook
                    </a>
                    <div class="u-divider u-divider-solid u-divider-center g-brd-gray-dark-v3 g-my-40">
                        <i class="u-divider__icon g-bg-gray-dark-v3 g-color-white rounded-circle">OR</i>
                    </div>
                    <!-- Form -->
                    <form id="login-form" role="form">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="email" class="form-control" required name="email"  placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" required name="password"  placeholder="Password">
                        </div>
                        <div class="form-group" data-error="message">
                            <p class="text-danger center error-content"></p>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-8">
                                <a href="{{ route('password.request') }}"><small>Forgot password?</small></a>
                            </div>
                            <div class="col-4 align-self-center text-right">
                                <button class="btn btn-md u-btn-primary rounded g-py-13 g-px-25" type="submit">Login</button>
                            </div>
                        </div>
                    </form>
                    <!-- End Form -->
                    <footer class="text-center g-my-20">
                        <p class="text-muted text-center"><small>Don't have an account? <a class="btn btn-sm btn-white btn-block" href="{{ route('register') }}">Create an account</a></small> </p>
                    </footer>
                </div>
            </div>
        </div>
    </section>
@stop
