<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  div {
      text-align: center;
      font-size: 60px;
      margin-top: 0px;
  }
  </style>
</head>
<body>
<?php 
  date_default_timezone_set('Asia/Kolkata');
 ?>
<div id='total_interval'></div>
<script type="text/javascript">
var countDownDate = <?php echo strtotime('Sep 5, 2030 15:37:25') ?> * 1000;
var now = <?php echo time() ?> * 1000;

// Update the count down every 1 second
var x = setInterval(function() {

    now = now + 1000;

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="total_interval"
    var c_minutes = (minutes%3);
    document.getElementById("total_interval").innerHTML = c_minutes + "m " + seconds + "s ";

    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("total_interval").innerHTML = "EXPIRED";
    }
}, 1000);
</script>
</body>
</html>
