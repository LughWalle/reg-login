@extends('layouts.app')

@section('content')
    @if (session('status'))
        <section class="site-section site-section-light site-section-top themed-background-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Dashboard</div>

                            <div class="card-body">
                                
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                

                                You are logged in!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
