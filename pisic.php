<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
    body{background:white;}

		.tuna {
  animation: walk-cycle 1s steps(12) infinite;
  background: url(http://stash.rachelnabors.com/img/codepen/tuna_sprite.png) 0 0 no-repeat; 
  height: 200px;
  width: 400px;
  position: absolute;
  bottom: 1px;
  left: 50%;
  margin-left: -200px;
  transform: translateZ(0); 
}

@keyframes walk-cycle {  
  0% {background-position: 0 0; } 
  100% {background-position: 0 -2391px; } 
}

.foreground, .midground, .background {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0; left: 0;
  translate3d(0,0,0); 
}

.foreground {
  animation: parallax_fg linear 10s infinite both;
  background:  url(http://stash.rachelnabors.com/24ways2012/foreground_grass.png) 0 100% repeat-x;
  z-index: 3;
}

@keyframes parallax_fg {  
  0% { background-position: -3584px 100%;} 
  100% {background-position: 0 100%; } 
}

.midground {
  animation: parallax_mg linear 20s infinite;
  background:  url(http://stash.rachelnabors.com/24ways2012/midground_grass.png) 0 100% repeat-x;
  z-index: 2;
}

@keyframes parallax_mg {  
  0% { background-position: -3000px 100%;} 
  100% {background-position: 0 100%; } 
}

.background {
  background-image:
    url(http://stash.rachelnabors.com/24ways2012/background_mountain5.png),
    url(http://stash.rachelnabors.com/24ways2012/background_mountain4.png),
    url(http://stash.rachelnabors.com/24ways2012/background_mountain3.png),
    url(http://stash.rachelnabors.com/24ways2012/background_mountain2.png),
    url(http://stash.rachelnabors.com/24ways2012/background_mountain1.png);
  background-repeat: repeat-x;
  background-position: 0 100%;
  z-index: 1;
  animation: parallax_bg linear 40s infinite;
}

@keyframes parallax_bg {
  100% { background-position-x: 2400px, 2000px, 1800px, 1600px, 1200px;}
}

body {
    background: linear-gradient(top, rgba(255,255,255,1) 0%,rgba(255,255,255,0) 100%),
    #d2d2d2 url(http://stash.rachelnabors.com/24ways2012/background_clouds.png);
}
	</style>
</head>
<body>
<div class="foreground"></div>

<div class="midground">
  <div class="tuna"></div>
</div>

<div class="background">
</div>
</body>
</html>