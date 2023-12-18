<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Year Countdown</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h1>New Year Countdown</h1>
    <p id="countdown">Calculating...</p>
</div>

<script>
    // Function to update the countdown
    function updateCountdown() {
        // Fetch the remaining time components from the server using AJAX
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var timeComponents = JSON.parse(xhr.responseText);
                document.getElementById("countdown").innerHTML =
                    "<strong>" + timeComponents.days + "</strong> days, " +
                    "<strong>" + timeComponents.hours + "</strong> hours, " +
                    "<strong>" + timeComponents.minutes + "</strong> minutes, " +
                    "<strong>" + timeComponents.seconds + "</strong> seconds";
            }
        };
        xhr.open("GET", "getCountdown.php", true);
        xhr.send();
    }

    // Update the countdown every second
    setInterval(updateCountdown, 1000);
</script>

</body>
</html>
