@extends('admin.auth.layout')
@section('page-title', '| Admin Login')
@section('auth-content')
    <div class="grid">
        <form action="" method="POST" class="form login">
            <div class="form_field">
                <label for="login_username">
                    <svg class="icon"><use xlink:href="#icon-user"></use></svg>
                    <span class="hidden">Email</span>
                </label>
                <input autocomplete="off" id="login_username" type="text" name="username" class="form_input" placeholder="Email" required>
            </div>
            <div class="form_field">
                <input type="submit" value="Send link to email">
            </div>
        </form>

        <svg xmlns="http://www.w3.org/2000/svg" class="icons">
            <symbol id="icon-user" viewBox="0 0 1792 1792">
                <path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z" />
            </symbol>
        </svg>
    </div>
@endsection
