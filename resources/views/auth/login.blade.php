@extends('layouts.app')

@section('content')
<div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
         <!--   <img id="profile-img" class="profile-img-card" src="images.jpg" />-->
            <img src="login.png" class="img-responsive img-circle"/>
            <p id="profile-name" class="profile-name-card"></p>
              <form class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
               <!-- <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>-->
                <a href="check.html" class="btn btn-lg btn-primary btn-block">Sign in</a>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
        </div><!-- /card-container -->
@endsection
