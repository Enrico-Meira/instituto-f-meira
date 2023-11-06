<?php
    require_once('functions.php');
    $head = "cabecalho2";
    include(header_template); 
?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="../js/evo-calendar.min.js"></script>

    <script>

      $(document).ready(function() {
        $('#calendar').evoCalendar({
          //settingName: settingValue
        })
      })

    </script>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="<?php echo baseurl; ?>/src/css/evo-calendar.min.css">
  <link rel="stylesheet" href="<?php echo baseurl; ?>/src/css/evo-calendar.midnight-blue.min.css">
</head>
<body>
  <div id='calendar'></div>
</body>
</html>

