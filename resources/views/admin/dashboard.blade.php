@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div >
                <h1>{{ __('User Dashboard') }}</h1>

                <div>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Complimenti!!Hai loggato correttamente') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
