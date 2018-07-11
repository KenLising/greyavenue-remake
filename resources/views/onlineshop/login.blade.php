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
                            <h3 class="mb-0 text-white">Customer Login</h3>
                        </div>
                        <div class="card-body text-white">
                            <form class="form" 
                            role="form" 
                            autocomplete="off" 
                            id="formLogin" 
                            method="POST"
                            action="{{ url('/customer/login') }}">
                            {{ csrf_field() }}
                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email">E-Mail Address</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" 
                                    name="email" 
                                    id="email"
                                    autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif

                                </div>
                                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" 
                                    name="password" 
                                    id="password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif

                                </div>

                                Don't have a account? <a href="{{ url('/customer/register') }}">Sign up now</a>
                                
                                <button type="submit" class="btn btn-light float-right pl-5 pr-5" id="btnLogin">
                                	Login
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