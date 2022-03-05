@extends('layouts.admin.master')
@section('content')

<!-- <div class="modal fade text-left" id="add-class-modal" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content" style=" background-color: #F7F8FA">
               <div class="modal-header" style="background-color:#FBD848;letter-spacing: 3px; color:black">
                    <h4 class="modal-title">{{ __('Register') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>

                    </div>
                         <div class="modal-body">

                                <div class="row p-3">
                                    <div class="form-group">
                                        <h6><label for="role">{{ __('Role') }}</label></h6>
                                        <select name="role" class="form-control @error('role') is-invalid @enderror" aria-label="Default select example" required >
                                            <option selected disabled>Open this select menu</option>
                                                <option value="admin" >Admin</option>
                                                <option value="cashier" >Cashier</option>
                                            </select>

                                            @error('role')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>

                              <div class="row p-3">
                                    <div class="form-group">
                                            <h6><label for="name">{{ __('Name') }}</label></h6>
                                            <input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                              </div>
                              
                              <div class="row p-3">
                                    <div class="form-group">
                                        <h6><label for="last_name">{{ __('Last Name') }}</label></h6>
                                        <input type="text" class="form-control form-control-sm @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                        @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                              
                              <div class="row p-3">
                                    <div class="form-group">
                                        <h6><label for="email">{{ __('E-Mail Address') }}</label></h6>
                                        <input type="text" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                              
                              <div class="row p-3">
                                    <div class="form-group">
                                        <h6><label for="phone_number">{{ __('Phone Number') }}</label></h6>
                                        <input type="text" class="form-control  @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number">

                                        @error('phone_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row p-3">
                                    <div class="form-group">
                                        <h6><label for="password">{{ __('Password') }}</label></h6>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                              
                                <div class="row p-3">
                                    <div class="form-group">
                                        <h6><label for="password-confirm">{{ __('Confirm Password') }}</label></h6>
                                        <input id="password-confirm" type="password" class="form-control" name="password-confirm" required autocomplete="password-confirm">

                                        @error('password-confirm')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                              
                              
                         </div>

                         <div class="modal-footer">
                              <button type="submit" class="btn btn-secondary" style="background-color: #0c223a" data-dismiss="modal">{{ __('Register') }}</button>
                             
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div> -->

            <!-- <div class="card col-lg-12 align-self-center" style="background-color:#f1dca7;">
                
            </div> -->


            <div class="col-lg-12">
     <div class="row tab-content">
          <div id="list-view" class="tab-pane fade active show col-lg-12">
               <div class="card" style="background-color:#f1dca7;">
              
                    <div class="card-header">
                         <h4 class="card-title">Registration Form  </h4>
                         <!-- <a href="{{ route('register') }}" class="btn" style="background-color:#718355;"><li class=
                         "la la-user-plus"></li>Add new</a> -->
                         <!-- <a data-toggle="modal" data-target="#add-class-modal" class="btn btn-primary">
                                        <li class="la la-plus-circle"></li> Register
                         </a> -->
                         
                    </div>
                    

<div class="card-body" style="background-color:white;">
    <form method="POST" action="{{ route('user-create') }}">
    {!! Toastr::message() !!}
        @csrf

        <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="last_name" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

            <div class="col-md-6">
                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" >

                @error('last_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="phone_number" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

            <div class="col-md-6">
                <input id="phone_number" type="tel" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number">

                @error('phone_number')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>

            <div class="col-md-6">
            <select name="role" class="form-control @error('role') is-invalid @enderror" aria-label="Default select example" required >
                            <option selected disabled>Open this select menu</option>
                                <option value="admin" >Admin</option>
                                <option value="cashier" >Cashier</option>
                            </select>

                @error('role')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn" style="background-color:#718355;">
                    {{ __('Register') }}
                </button>
                <button class="btn"  style="background-color:#f1dca7;"><a href="{{ route('user-tab') }}" >Cancel</a></button>
            </div>
        </div>
    </form>
</div>
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection
