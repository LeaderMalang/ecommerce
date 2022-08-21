@extends('layout.master')
@section('content')
<div class="container">
        <div class="image01">
            <form action="" method="POST" class="sign-in-page">
                @csrf
                <h2 style="padding: 95px 0px 10px 0px;font-weight: 900;letter-spacing:1px;text-align: center;">Sign In</h2>
                <label for="email">E-MAIL</label><br>
                <input type="email" class="sign-in-input" placeholder="Email Address" name="email" id="email"><br>
                <label for="password">PASSWORD</label><br>
                <input type="text" class="sign-in-input" placeholder="Enter Password" name="password" id="password"><br>
                <input type="submit" id="submit-btn" value="Sign In">
                <a href="/ecommerce-signup" class="sign_in" style="color: var(--dark-grey);">Sign Up<i
                        class="fa-solid fa-arrow-right-long" style="margin-left: 10px;"></i></a>
            </form>
        </div>
    </div>

@endsection