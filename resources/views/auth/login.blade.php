@extends('layouts.app')

@section('content')
            <!-- Intro -->
            <section class="site-section site-section-light site-section-top themed-background-dark">
                <div class="container">
                    <h1 class="text-center animation-slideDown"><i class="fa fa-arrow-right"></i> <strong>Log In</strong></h1>
                    <h2 class="h3 text-center animation-slideUp">Connect to your dashboard!</h2>
                </div>
            </section>
            <!-- END Intro -->
                        
            <!-- Log In -->
            <section class="site-content site-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 site-block">
                            <!-- Log In Form -->
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                            <input id="email" type="email" class="form-control input-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>
                                </div>
        
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                            <input id="password" type="password" class="form-control input-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-actions">
                                    <div class="col-xs-6">
                                        <label for="remember" class="switch switch-primary">
                                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><span></span>
                                            </label>
                                            <small>{{ __('Remember Me') }}</small>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <button type="submit" class="btn btn-sm btn-primary">
                                            <i class="fa fa-arrow-right"></i>
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="text-center">
                                <a href="{{ route('password.request') }}"><small>{{ __('Forgot Your Password?') }}</small></a>
                            </div>
                            <!-- END Log In Form -->
                        </div>
                    </div>
                    <hr>
                </div>
            </section>
            <!-- END Log In -->

            <!-- Support Links -->
            <section class="site-content site-section">
                <div class="container">
                    <div class="row row-items text-center">
                        <div class="col-sm-3 animation-fadeIn">
                            <a href="javascript:void(0)" class="circle themed-background">
                                <i class="gi gi-life_preserver"></i>
                            </a>
                            <h4>Open a <strong>ticket</strong></h4>
                        </div>
                        <div class="col-sm-3 animation-fadeIn">
                            <a href="javascript:void(0)" class="circle themed-background">
                                <i class="gi gi-envelope"></i>
                            </a>
                            <h4><strong>Email</strong> Us</h4>
                        </div>
                        <div class="col-sm-3 animation-fadeIn">
                            <a href="javascript:void(0)" class="circle themed-background">
                                <i class="fa fa-comments"></i>
                            </a>
                            <h4><strong>Chat</strong> Live</h4>
                        </div>
                        <div class="col-sm-3 animation-fadeIn">
                            <a href="javascript:void(0)" class="circle themed-background">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <h4><strong>Tweet</strong> Us</h4>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Support Links -->
@endsection