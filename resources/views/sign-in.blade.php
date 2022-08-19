@extends('layout.master')
@section('content')
<div class="container">
        <div class="image01">
            <form action="" method="POST" class="sign-in-page">
                @csrf
                <h4 style="padding: 56px 0px 10px 0px;font-weight: 700;text-align: center;">Sign In</h4>
                <label for="email">Email</label><br>
                <input type="email" placeholder="Email Address" name="email" id="email"><br>
                <label for="password">Password</label><br>
                <input type="text" placeholder="Enter Password" name="password" id="password"><br>
                <input type="submit" id="submit-btn" value="Sign In">
                <a href="/ecommerce-signup" class="sign_in" style="color: var(--dark-grey);">Sign Up<i
                        class="fa-solid fa-arrow-right-long" style="margin-left: 10px;"></i></a>
            </form>
        </div>
    </div>

@end