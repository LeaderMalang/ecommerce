@extends('layout.master')
@section('content')

<div class="container">
        <div class="row" id="sign-page">
            <div class="sign-up-image image">

            </div>
            <div class="sign-up-form">
                <div class="container sign-form">
                    <h2 style="margin: 36px 0px;font-weight: 700;">Sign Up</h2>

                    @if($errors->any())
                    @foreach ($errors->all() as $error )
                    <h4 style="color:red">{{$error}}</h4>

                    @endforeach

                @endif
                    <form action="{{route('signup_store')}}" method="POST" class=" sign_up-page">
                        @csrf
                        <label for="name">Full Name</label>
                        <input type="text" placeholder="Name" name="full_name" class="input-field" id="name"><br>

                        <label for="email">Email</label>
                        <input type="email" placeholder="Email Address" name="email"  class="input-field" id="email"><br>


                        <label for="password">Password</label>
                        <input type="password" placeholder="*********" name="password" class="input-field" id="password"><br>

                        <label for="repeat">Repeat Password</label>
                        <input type="password" placeholder="*********" name="password_confirmation"  class="input-field"  id="repeat"><br>

                        <div class="container-fluid d-flex align-items-center">

                            <input type="checkbox" id="select" class="checkbox">
                        <label for="select" style="font-weight: 300px;font-size: 14px;margin-top: 25px;">I agree to the<a href="">Terms of Users</a> </label>
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

