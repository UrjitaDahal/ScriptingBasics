<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display File Content</title>
    <script>
        function loadContent() {
            // Create an XMLHttpRequest object
            const xhr = new XMLHttpRequest();

            // Define what happens on successful data submission
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // Display the content of the file in the "content" div
                    document.getElementById('content').textContent = xhr.responseText;
                } else {
                    document.getElementById('content').textContent = 'Error loading file.';
                }
            };

            // Define what happens in case of error
            xhr.onerror = function() {
                document.getElementById('content').textContent = 'An error occurred.';
            };

            // Configure the request
            xhr.open('GET', 'bca.txt', true);

            // Send the request
            xhr.send();
        }
    </script>
</head>

<body>
    <h1>Display Content from BCA File</h1>
    <button onclick="loadContent()">Load BCA Content</button>
    <div id="content" style="margin-top: 20px; border: 1px solid #000; padding: 10px;">
        <!-- File content will be displayed here -->
    </div>
</body>

</html>