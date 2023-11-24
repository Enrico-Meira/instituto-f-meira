<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

    <form id="myForm">
        Email: <input type="email" id="email" name="email" onBlur="checkEmail()">
        <span id="emailMessage"></span>
        <br>
        <input type="submit" value="Submit" onclick="addData(); return false;">
    </form>

    <script>
        function checkEmail() {
            var email = document.getElementById('email').value;

            $.ajax({
                type: 'POST',
                url: 'process.php',
                data: { action: 'check_email', email: email },
                success: function(response) {
                    document.getElementById('emailMessage').innerHTML = response;
                }
            });
        }

        function addData() {
            var email = document.getElementById('email').value;

            $.ajax({
                type: 'POST',
                url: 'process.php',
                data: { action: 'add_data', email: email },
                success: function(response) {
                    alert(response);
                }
            });
        }
    </script>

</body>
</html>
