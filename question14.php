<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country-City Dropdown</title>
    <style>
        select {
            padding: 10px;
            font-size: 16px;
            margin: 10px 0;
        }
    </style>
    <script>
        function fetchCities() {
            const country = document.getElementById("country").value;
            const xhr = new XMLHttpRequest();
            const url = `fetchcity14.php?country=${country}`;

            xhr.open("GET", url, true);

            xhr.onload = function() {
                if (xhr.status === 200) {
                    const cities = JSON.parse(xhr.responseText);

                    // Clear the city dropdown
                    const cityDropdown = document.getElementById("city");
                    cityDropdown.innerHTML = '<option value="">Select City</option>';

                    // Populate the city dropdown
                    cities.forEach(city => {
                        const option = document.createElement("option");
                        option.value = city;
                        option.textContent = city;
                        cityDropdown.appendChild(option);
                    });
                } else {
                    console.error("Error fetching cities.");
                }
            };

            xhr.onerror = function() {
                console.error("Request failed.");
            };

            xhr.send();
        }
    </script>
</head>

<body>
    <h1>Country and City Dropdown</h1>
    <form>
        <label for="country">Select Country:</label><br>
        <select id="country" name="country" onchange="fetchCities()">
            <option value="">Select Country</option>
            <option value="USA">USA</option>
            <option value="India">India</option>
            <option value="nepal">nepal</option>
        </select><br>

        <label for="city">Select City:</label><br>
        <select id="city" name="city">
            <option value="">Select City</option>
        </select>
    </form>
</body>

</html>