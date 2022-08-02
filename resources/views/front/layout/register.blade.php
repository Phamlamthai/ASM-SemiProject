@extends('front.layout.master')

@section('title','User')

@section('body')

<!--Breadcrumb BEGIN-->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="index.html"><i class="fa fa-home">Home</i></a>
                    <span>Register</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb END-->


<!---register section begin-->
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="login-form">
                    <h2>Register</h2>
                    <form action="{{route('front.layout.register')}}" method="POST">
                        @csrf
                        <div class="group-input">
                            <label for="username">Email
                            </label>
                            <input type="text" id="username" >
                        </div>
                        <div class="group-input">
                            <label for="password">Password
                            </label>
                            <input type="text" id="password" >
                        </div>
                        <div class="group-input">
                            <label for="password">Confirm Password
                            </label>
                            <input type="text" id="password">
                        </div>
                        <button type="submit" class="site-btn login-btn">
                            Register
                        </button>
                    </form>
                    <div class="switch-login">
                        <a href="login.html" class="or-login">Return SingIn</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---register section end-->

@endsection









