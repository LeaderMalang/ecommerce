@extends('layout.master')
@section('content')

<div class="container">
        <div class="row" id="sign-page">
            <div class="col-8 image">
                <br><br><br><br><br><br>
            </div>
            <div class="col-4">
                <div class="container sign-form">
                    <h4 style="margin: 36px 0px;font-weight: 700;">Sign Up</h4>
                    <form action="" method="POST" class=" sign_up-page">
                        @csrf
                        <label for="name">Full Name</label><br>
                        <input type="text" placeholder="Name" name="full_name" id="name"><br>
                        <label for="email">Email</label><br>
                        <input type="email" placeholder="Email Address" name="email" id="email"><br>
                       
                        <label for="password">Password</label><br>
                        <input type="password" placeholder="*********" name="password" id="password"><br>
                        <label for="repeat">Repeat Password</label><br>
                        <input type="password" placeholder="*********" name="password_confirmation"  id="repeat"><br>
                        <input type="checkbox" id="select">
                        <label for="select" style="font-weight: 300px;font-size: 14px;margin-top: 25px;">I agree to the
                            <a href="">Terms of Users</a> </label><br>
                        <input type="submit" id="submit-btn" value="Sign Up">
                        <a href="/ecommerce-signin" class="sign_in" style="color: var(--dark-grey);">Sign In<i
                                class="fa-solid fa-arrow-right-long" style="margin-left: 10px;"></i></a>
                    </form>
                </div>
            </div>
        </div>
    </div>


@end