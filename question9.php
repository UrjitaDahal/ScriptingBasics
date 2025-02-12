<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form Validation</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .error {
            color: red;
            display: none;
        }

        .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <h1>Registration Form</h1>
    <form id="registrationForm">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
            <span id="nameError" class="error">Name cannot be empty and must not contain numbers.</span>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <textarea id="address" name="address"></textarea>
            <span id="addressError" class="error">Address cannot be empty.</span>
        </div>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <span id="usernameError" class="error">Username cannot be empty, contain spaces, or special characters except underscore (_).</span>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            <span id="emailError" class="error">Please enter a valid email address.</span>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <span id="passwordError" class="error">Password must be at least 8 characters long with at least one digit, one uppercase, one lowercase, and one special character.</span>
        </div>
        <div class="form-group">
            <label for="website">Website:</label>
            <input type="url" id="website" name="website">
            <span id="websiteError" class="error">Please enter a valid website URL.</span>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone">
            <span id="phoneError" class="error">Phone number must start with 98, 97, or 96 and contain 10 digits.</span>
        </div>
        <div class="form-group">
            <label for="gender">Gender:</label>
            <input type="radio" id="male" name="gender" value="male"> Male
            <input type="radio" id="female" name="gender" value="female"> Female
            <span id="genderError" class="error">Please select a gender.</span>
        </div>
        <div class="form-group">
            <label for="course">Course:</label>
            <select id="course" name="course">
                <option value="">Select Course</option>
                <option value="course1">Course 1</option>
                <option value="course2">Course 2</option>
                <option value="course3">Course 3</option>
            </select>
            <span id="courseError" class="error">Please select a course.</span>
        </div>
        <button type="button" id="submitButton">Submit</button>
    </form>

    <script>
        $(document).ready(function() {
            $('#submitButton').click(function() {
                let isValid = true;

                // Name validation
                const name = $('#name').val();
                if (name === "" || /\d/.test(name)) {
                    $('#nameError').show();
                    isValid = false;
                } else {
                    $('#nameError').hide();
                }

                // Address validation
                const address = $('#address').val();
                if (address === "") {
                    $('#addressError').show();
                    isValid = false;
                } else {
                    $('#addressError').hide();
                }

                // Username validation
                const username = $('#username').val();
                if (username === "" || /\s/.test(username) || /[^a-zA-Z0-9_]/.test(username)) {
                    $('#usernameError').show();
                    isValid = false;
                } else {
                    $('#usernameError').hide();
                }

                // Email validation
                const email = $('#email').val();
                if (email === "" || !email.includes('@')) {
                    $('#emailError').show();
                    isValid = false;
                } else {
                    $('#emailError').hide();
                }

                // Password validation
                const password = $('#password').val();
                const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
                if (password === "" || !passwordRegex.test(password)) {
                    $('#passwordError').show();
                    isValid = false;
                } else {
                    $('#passwordError').hide();
                }

                // Phone validation
                const phone = $('#phone').val();
                if (phone === "" || !/^(98|97|96)\d{8}$/.test(phone)) {
                    $('#phoneError').show();
                    isValid = false;
                } else {
                    $('#phoneError').hide();
                }

                // Gender validation
                const gender = $('input[name="gender"]:checked').val();
                if (!gender) {
                    $('#genderError').show();
                    isValid = false;
                } else {
                    $('#genderError').hide();
                }

                // Course selection validation
                const course = $('#course').val();
                if (course === "") {
                    $('#courseError').show();
                    isValid = false;
                } else {
                    $('#courseError').hide();
                }

                if (isValid) {
                    alert('Form submitted successfully!');
                } else {
                    alert('Please correct the errors in the form.');
                }
            });
        });
    </script>
</body>

</html>