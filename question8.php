<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery Effects Demo</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        #box {
            width: 150px;
            height: 150px;
            background-color: #007BFF;
            margin: 20px auto;
            text-align: center;
            line-height: 150px;
            color: white;
            font-size: 18px;
        }

        .buttons {
            text-align: center;
            margin: 10px;
        }

        .buttons button {
            margin: 5px;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center;">jQuery Effect Methods</h1>
    <div id="box">Box</div>
    <div class="buttons">
        <button id="hideBtn">Hide</button>
        <button id="showBtn">Show</button>
        <button id="toggleBtn">Toggle</button>
        <button id="fadeInBtn">Fade In</button>
        <button id="fadeOutBtn">Fade Out</button>
        <button id="fadeToggleBtn">Fade Toggle</button>
        <button id="slideUpBtn">Slide Up</button>
        <button id="slideDownBtn">Slide Down</button>
        <button id="slideToggleBtn">Slide Toggle</button>
        <button id="animateBtn">Animate</button>
    </div>

    <script>
        $(document).ready(function() {
            // Hide the box
            $("#hideBtn").click(function() {
                $("#box").hide();
            });

            // Show the box
            $("#showBtn").click(function() {
                $("#box").show();
            });

            // Toggle visibility
            $("#toggleBtn").click(function() {
                $("#box").toggle();
            });

            // Fade in the box
            $("#fadeInBtn").click(function() {
                $("#box").fadeIn();
            });

            // Fade out the box
            $("#fadeOutBtn").click(function() {
                $("#box").fadeOut();
            });

            // Fade toggle the box
            $("#fadeToggleBtn").click(function() {
                $("#box").fadeToggle();
            });

            // Slide up the box
            $("#slideUpBtn").click(function() {
                $("#box").slideUp();
            });

            // Slide down the box
            $("#slideDownBtn").click(function() {
                $("#box").slideDown();
            });

            // Slide toggle the box
            $("#slideToggleBtn").click(function() {
                $("#box").slideToggle();
            });

            // Animate the box
            $("#animateBtn").click(function() {
                $("#box").animate({
                    width: "300px",
                    height: "300px",
                    marginLeft: "50px"
                }, 1000, function() {
                    $(this).animate({
                        width: "150px",
                        height: "150px",
                        marginLeft: "0px"
                    }, 1000);
                });
            });
        });
    </script>
</body>

</html>