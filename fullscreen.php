<?php 
$view_head_height = 200

?>
<!DOCTYPE html>
<html>
<head>
<title>HTML Input Test</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">
  
</head>
<body>
<h1 class="alert alert-primary"><a href="https://rapidapi.com/guides/fullscreen-api" target="_blank">フルスクリーン API</a></h1>

<div id="main" class="m-4">
  <img id="target" src="sample.jpg" class="mb-4">
  <input type="button" value="FullScreen" id="fullscreen" class="btn btn-primary ms-4 align-top">

  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>

</div>

<script>

var fullscreenButton = document.getElementById("fullscreen");

fullscreenButton.addEventListener("click", function () {
  document.getElementById("target").requestFullscreen();
});

</script>

</body>
</html>



<?//php phpinfo() ?>