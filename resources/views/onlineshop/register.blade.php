@extends('onlineshop.layout.app')

@section('content')
<div class="container pt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded-0 bg-dark">
                        <div class="card-header">
                            <h3 class="mb-0 text-white">Customer Registration</h3>
                        </div>
                        <div class="card-body text-white">
                            <form class="form" 
                            role="form" 
                            autocomplete="off" 
                            method="POST" 
                            action="{{ url('/customer/register') }}">
                            {{ csrf_field() }}
                                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" 
                                	name="name" 
                                	id="name"
                                	value="{{ old('name') }}">

                                	@if ($errors->has('name'))
                                	    <span class="help-block">
                                	        <strong>{{ $errors->first('name') }}</strong>
                                	    </span>
                                	@endif

                                </div>
                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email">E-Mail Address</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" 
                                	name="email" 
                                	id="email"
                                	value="{{ old('email') }}">
									
									@if ($errors->has('email'))
									    <span class="help-block">
									        <strong>{{ $errors->first('email') }}</strong>
									    </span>
									@endif

                                </div>
                                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label>Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" 
                                	name="password" 
                                	id="password">

									@if ($errors->has('password'))
									    <span class="help-block">
									        <strong>{{ $errors->first('password') }}</strong>
									    </span>
									@endif

                                </div>
                                <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" 
                                	name="password_confirmation"
                                	id="password_confirmation">

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif

                                </div>
                                <button type="submit" class="btn btn-light float-right pl-5 pr-5" id="btnLogin">
                                	Register
                                </button>
                            </form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->

                </div>


            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->
@endsection