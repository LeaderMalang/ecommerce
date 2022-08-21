@extends('layout.master')
@section('content')

<div class="container">
    <div class="row " id="sign-page">
        <div class=" sign-up-image  image">
        </div>
        <div class=" sign-up-from">
                <div class="container sign-form">
                    <h4 style="margin: 36px 0px;font-weight: 700;">Sign Up</h4>
                    <form action="" method="POST" class=" sign_up-page">
                        @csrf
                        <label for="name">Full Name</label>
                        <input type="text" class="input-field" placeholder="Name" name="full_name" id="name"><br>
                        <label for="email">Email</label>
                        <input type="email" class="input-field" placeholder="Email Address" name="email" id="email"><br>
                       
                        <label for="password">Password</label>
                        <input type="password" class="input-field" placeholder="*********" name="password" id="password"><br>
                        <label for="repeat">Repeat Password</label>
                        <input type="password" class="input-field" placeholder="*********" name="password_confirmation"  id="repeat"><br>
                        
                        <div class="container-fluid d-flex align-items-center">
                            <input type="checkbox" id="select" class="checkbox">
                            <label for="select" style="font-weight: 300px;font-size: 14px;">I agree to the
                            <a href="">Terms of Users</a> </label><br>
                        
                        </div>
                        <input type="submit" id="submit-btn" value="Sign Up">
                        <a href="/ecommerce-signin" class="sign_in" style="color: var(--dark-grey);">Sign In<i
                                class="fa-solid fa-arrow-right-long" style="margin-left: 10px;"></i></a>
                    </form>
                </div>
        </div>
    </div>
</div>


@endsection