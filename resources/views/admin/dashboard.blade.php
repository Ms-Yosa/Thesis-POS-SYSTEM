@extends('layouts.admin.master')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>
                    <a href="{{ route('register') }}" class="btn btn-primary"><li class="la la-user-plus"></li>  Add new</a>
                    {!! Toastr::message() !!}
                    <h4>Hi Admin: {{ Auth::user()->name }}</h4>
                    
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
</div> -->
{!! Toastr::message() !!}
@endsection

