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
                    <span>Login</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb END-->



<!---Login section begin-->
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="login-form">
                    <h2>Login</h2>
                    <form action="#">
                        <div class="group-input">
                            <label for="username">Username or Email
                            </label>
                            <input type="text" id="username" placeholder="Enter Your Username or Email">
                        </div>
                        <div class="group-input">
                            <label for="password">Password
                            </label>
                            <input type="text" id="password" placeholder="Enter your Password">
                        </div>
                        <div class="group-input gi-check">
                            <div class="gi-more">
                                <label>
                                    Save Password
                                    <input type="checkbox" id="save-pass">
                                    <span class="checkmark"></span>
                                </label>
                                <a href="#" class="forget-pass">Forget Your Password</a>
                            </div>
                        </div>
                        <button type="submit" class="site-btn login-btn">
                            SignIn
                        </button>
                    </form>
                    <div class="switch-login">
                        <a href="register.html" class="or-login">Create An Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---Login section end-->


@endsection


   