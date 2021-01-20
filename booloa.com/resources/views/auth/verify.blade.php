@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ 'Verify Your Email Address' }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ 'A fresh verification link has been sent to your email address.' }}
                        </div>
                    @endif

                    {{ 'Before proceeding, please check your email for a verification link.' }}
                    {{ 'If you did not receive the email' }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="w3-btn w3-indigo">{{ 'click here to request another' }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
