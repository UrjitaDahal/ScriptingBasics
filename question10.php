<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Login Form</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .error {
            color: red;
            display: none;
        }

        .welcome {
            color: green;
            display: none;
        }

        #loginForm {
            margin: 20px;
        }
    </style>
</head>

<body>
    <h1>Login Form</h1>
    <form id="loginForm">
        <div>
            <label for="userid" id="label1">User ID:</label>
            <input type="text" id="userid" name="userid" required>
        </div>
        <div>
            <label for="password" id="label2">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit" id="label3">Login</button>
        </div>
        <div id="error" class="error">Invalid User ID or Password. Please try again.</div>
        <div id="welcome" class="welcome">Welcome, <span id="userName"></span>!</div>
    </form>

    <script>
        $(document).ready(function() {
            $('#loginForm').submit(function(e) {
                e.preventDefault(); // Prevent form from reloading the page

                const userID = $('#userid').val();
                const password = $('#password').val();

                $.ajax({
                    url: 'backend10.php', // Replace with the name of your backend PHP file
                    type: 'POST',
                    dataType: 'json', // Expect JSON response
                    data: {
                        userid: userID,
                        password: password
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            $('#error').hide();
                            $('#userid').hide();
                            $('#password').hide();
                            $('#button').hide();
                            $('#label1').hide();
                            $('#label2').hide();
                            $('#label3').hide();
                            $('#welcome').show();
                            $('#userName').text(response.username);
                        } else {
                            $('#error').show();
                            $('#welcome').hide();
                        }
                    },
                    error: function() {
                        alert('An error occurred while processing your request. Please try again.');
                    }
                });
            });
        });
    </script>
</body>

</html>