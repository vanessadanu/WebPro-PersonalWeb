@extends('layouts.app')
@section('dashboard nav', 'collapsed')
@section('portfolio nav', 'collapsed')
@section('categories nav', 'collapsed')
@section('profile nav', 'collapsed')

@section('content')
    <main id="main" class="main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('You are logged in!') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
