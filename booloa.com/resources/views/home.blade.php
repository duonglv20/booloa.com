@extends('layouts.app')

@section('content')
<div class="w3-center w3-row">
    <div class="w3-third">
            <div class="w3-green">{{ 'Dashboard' }}</div>

            <div class="w3-blue">
                @if (session('status'))
                    <div class="w3-panel w3-green">
                        {{ session('status') }}
                    </div>
                @endif

                {{ 'You are logged in!' }}
            </div>
    </div>
</div>
@endsection
