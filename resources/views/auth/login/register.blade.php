@extends('auth.master');

@section('title')
    <div class="signin">

        <div class="content">

            <h2>Register </h2>

            <form action="{{ route('register') }}" method="post">

                <div class="inputBox">

                    <input type="text" name="name" required> <i>Username</i>

                </div>

                <div class="inputBox">

                    <input type="email" name="email" required> <i>Email</i>

                </div>

                <div class="inputBox">

                    <input type="password" name="password" required> <i>Password</i>

                </div>

                <div class="inputBox">

                    <input type="password" name="password_confirmation" required> <i>Confirm Password</i>

                </div>


                <div class="inputBox">

                    <input type="submit" value="Register">

                </div>

            </form>

        </div>

    </div>

@endsection
