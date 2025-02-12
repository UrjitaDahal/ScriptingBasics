<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Username Availability</title>
    <style>
        input,
        button {
            margin: 10px 0;
            padding: 10px;
            font-size: 16px;
        }

        .message {
            font-size: 18px;
            color: blue;
        }
    </style>
    <script>
        function checkUsername() {
            const username = document.getElementById("username").value;
            const xhr = new XMLHttpRequest();
            const url = `checkusername13.php?username=${username}`;

            xhr.open("GET", url, true);

            xhr.onload = function() {
                if (xhr.status === 200) {
                    document.getElementById("message").textContent = xhr.responseText;
                } else {
                    document.getElementById("message").textContent = "Error checking username.";
                }
            };

            xhr.onerror = function() {
                document.getElementById("message").textContent = "Request failed.";
            };

            xhr.send();
        }
    </script>
</head>

<body>
    <h1>Reset Password</h1>
    <form onsubmit="return false;">
        <label for="username">Enter Username:</label><br>
        <input type="text" id="username" name="username" required>
        <button type="button" onclick="checkUsername()">Check Availability</button>
    </form>
    <div id="message" class="message"></div>
</body>

</html>