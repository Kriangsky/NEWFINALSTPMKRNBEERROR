<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login as</title>
    <link rel="stylesheet" href="css/loginas.css">
</head>

<body>
    <div class="login-container">
        <h2>Login As?</h2>
            <div class="options">
                <span id="adminBtn" class="indiv">
                    <button class="opsi" id="admin"></button>
                    <label>Admin</label>
                    <a href="{{ route('loginadmins') }}" id="adminLink" target="_blank" style="display:none;"></a>
                </span>

                <span id="userBtn" class="indiv">
                    <button class="opsi" id="user"></button>
                    <label>User</label>
                    <a href="{{ route('loginmembers') }}" id="userLink" target="_blank" style="display:none;"></a>
                </span>

            </div>

        <script>
            var adminButton = document.getElementById('adminBtn');
            var adminLink = document.getElementById('adminLink');

            adminButton.addEventListener('click', function() {
                window.location.href = adminLink.href;
            });

            var userButton = document.getElementById('userBtn');
            var userLink = document.getElementById('userLink');

            userButton.addEventListener('click', function() {
                window.location.href = userLink.href;
            });
        </script>
    </div>
</body>
</html>
