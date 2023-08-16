@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header">{{ __('My Dashboard') }}</div>
                <h6 class="card-header">Profile</h1>
                <h6 class="card-header">Check Balance</h1>
                <h6 class="card-header">Deposit</h1>
                <h6 class="card-header">Withdraw</h1>
                <h6 class="card-header">Edith Profile</h1>
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
@endsection
