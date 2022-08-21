@extends('layout.master')
@section('content')
<div class="container">
        <div class="image01">
            <form action="{{route('login_check')}}" method="POST" class="sign-in-page">
                @csrf
                <h2 style="padding: 95px 0px 10px 0px;font-weight: 900;letter-spacing:1px;text-align: center;">Sign In</h2>
                @if($errors->any())
                @foreach ($errors->all() as $error )
                <h4 style="color:red">{{$error}}</h4>

                @endforeach
                @endif

                @isset($message)
                <h4 style="color:rgb(28, 51, 9)">{{$message}}</h4>

                @endisset
                <label for="email">E-MAIL</label><br>
                <input type="email" placeholder="Email Address" name="email" id="email"  class="sign-in-input"><br>
                <label for="password">PASSWORD</label><br>
                <input type="text" placeholder="Enter Password" name="password" id="password" class="sign-in-input">><br>
                <input type="submit" id="submit-btn" value="Sign In">
                <a href="/ecommerce-signup" class="sign_in" style="color: var(--dark-grey);">Sign Up<i
                        class="fa-solid fa-arrow-right-long" style="margin-left: 10px;"></i></a>
            </form>
        </div>
    </div>

@end
