<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log In</title>
    <link rel="stylesheet" href="{{ asset('css/loginAdmin.css') }}">
</head>

<body>
    <div class="login-container">
        <h2>Welcome Back Admin</h2>
        <form class="login-form" action="{{ route('admin.login') }}" method="POST">
            @csrf
            <small>Group Name</small><br>
            <div class="input-group">
                <input type="text" name="group_name" id="group_name" placeholder="Enter Your group_name" required>
            </div>
            @error('group_name')
                <p style="color: red;">{{ $message }}</p>
            @enderror
            <br><br>
            <small>Password</small><br>
            <div class="input-group">
                <input type="password" name="password" id="password" placeholder="Enter Your Password" required>
            </div>
            @error('password')
                <p style="color: red;">{{ $message }}</p>
            @enderror
            <br><br>
            <div id="btn">
                <button type="submit" id="myButton">Login</button><br><br><br>
                <a href="/admin/index.html" id="myLink" target="_blank" style="display:none;"></a>
            </div>
            <br>
        </form>
    </div>

    <script>
        var button = document.getElementById('myButton');
        var link = document.getElementById('myLink');
        button.addEventListener('click', function () {
            window.location.href = link.href;
        });
    </script>
</body>

</html>
