<?php
    // ob_start();
    require_once('../../config.php');
    $head = "cabecalho2";
    $footer = "footer";
    if(!isset($_SESSION))
    {
      session_start();
    }

    include(header_template);
?>

<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo baseurl; ?>/src/css/tst.css">
    <title>Dynamic Calendar JavaScript | CodingNepal</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font Link for Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
  </head>

  <div class="cld-container">
    <div class="ghostDiv"></div>
    <div class="wrapper">
        <div class="icons">
          <span id="prev" class="material-symbols-rounded">chevron_left</span>
          <p class="current-date"></p>
          <span id="next" class="material-symbols-rounded">chevron_right</span>
        </div>
      <div class="calendar">
        <ul class="weeks">
          <li>Dom</li>
          <li>Seg</li>
          <li>Ter</li>
          <li>Qua</li>
          <li>Qui</li>
          <li>Sex</li>
          <li>Sab</li>
        </ul>
        <ul class="days"></ul>
      </div>
    </div>

    <div class="fundo">
      <div class="flex-period">
        <button class="period"><</button>
        <p class="pPeriodo">Período</p>
        <button class="period">></button>
      </div>
      <div class="botoes-container-manha">
        <!-- botões manha -->
      </div>
      <div class="botoes-container-tarde">
        <!-- botões tarde -->
      </div>
    </div>
  </div>
    

<?php 
      require_once('modal.php');
      require_once(footer_template);
      // ob_end_flush();
?>