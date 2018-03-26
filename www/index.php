<!DOCTYPE html>
<html>
<head>
  <title>ProjectClark</title>
  <style>
  div {
    background-color: rgba(255,0,0,.5);
  }
  .name {
    font-weight: bold; 
  }
  @-webkit-keyframes rotator {
    from {-webkit-transform: rotate(0deg)}
    to {-webkit-transform: rotate(360deg)}
  }
  .box {
    width: 50px;
    height: 50px; 
    border: 1px solid black;
  }
  .box:hover {
    -webkit-animation-name: rotator;
    -webkit-animation-duration: 4s;
  }
  .circle {
    width: 250px;
    height: 250px;
    border-radius: 50px;
    background-color: blue;
    text-align: center;
  } 
  .circle:hover {
    font-weight:bold;
    font-size: 25px;
  }
  </style>
</head>
<body>
Sample
<div class="box"><span>B</span><span>o</span>x 1</div>
<div class="box">Box 2</div>
<div class="box">Box 3</div>
<div class="box">Box 4</div>
<div class="circle">Circle</div>
</body>
</html>
