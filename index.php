<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>PHP - CHARTS</title>
  </head>
  <body>
    <div class="container">
      <h3>Esercizio 1</h3>
      <canvas id="chart1"></canvas>
      <h3>Esercizio 2</h3>

    </div>
      <script type="text/javascript">
        var jarray1 = <?php echo json_encode($array1); ?>
        
      </script>
  </body>
</html>
