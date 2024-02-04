<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
<title>Login As Member</title>

<div class="container">
    <form class="login-card" method="POST" action="{{ route('login.action') }}">
        @csrf
        <p class="title">Welcome Back !</p>
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="email-section">
            <p>Group Name</p>
            <div class="input-section">
                <input name="group_name" type="text" placeholder="  Masukkan nama Group">
            </div>
        </div>
        <div class="password-section">
            <p>Password</p>
            <div class="input-section">
                <input name="password" type="password" placeholder="  Masukkan password anda">
            </div>
        </div>
        <div class="login-button">
            <button type="submit">Login</button>
        </div>
        <div class="change-to-register">
            <p>Don't have an account? <a href="register">Create one</a></p>
        </div>
    </form>

</div>
