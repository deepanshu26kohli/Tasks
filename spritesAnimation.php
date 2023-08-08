<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    #spriteContainer {
  width: 300px;
  height: 300px;
  display: block;
  background-image: url("sprites_final.png");
  margin:auto;
  animation: sprite .5s steps(24) infinite;
}
@keyframes sprite {
     100% {
       background-position: 7188px;
     }
    }
</style>
</head>
<body>
<div id="spriteContainer"></div>
</body>
</html>