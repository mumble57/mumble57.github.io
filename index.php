 <?php include "include/header.php"; ?>
 
<html>
 <head>
  <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="proj/styles/home.css">
 <link rel="SHORTCUT ICON" href="proj/images/icn.png" type="image/png">
  <title>start</title>
  	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  	
  	<script type="text/javascript">
 
$(document).ready(function(){
	$("#smooth").on("click","a", function (event) {
		//отменяем стандартную обработку нажатия по ссылке
		event.preventDefault();
		//забираем идентификатор бока с атрибута href
		var id  = $(this).attr('href'),
		//узнаем высоту от начала страницы до блока на который ссылается якорь
			top = $(id).offset().top;	
		//анимируем переход на расстояние - top за 1500 мс
		$('body,html').animate({scrollTop: top}, 1500);
	});
});

</script>

  <style>
.body{
}
  #block-header{
    position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
  width: 99.3%;
  height: 100px;
 border: 4px double black; /* Параметры границы */
 
  }
  
  .scale {
    display: inline-block; /* Строчно-блочный элемент */
    overflow: hidden; /* Скрываем всё за контуром */
    width: 89%

    
   }
   .scale img {
    transition: 1s; /* Время эффекта */
    display: block; /* Убираем небольшой отступ снизу */
   }
   .scale img:hover {
    transform: scale(1.5); /* Увеличиваем масштаб */
   }
   
   .menu {
    position: fixed; /* Фиксированное положение */
    right: 10px; /* Расстояние от правого края окна браузера */
    top: 20%; /* Расстояние сверху */
    padding: 10px; /* Поля вокруг текста */ 
    background: #ffe; /* Цвет фона */ 
    border: 1px solid #333; /* Параметры рамки */ 
   }
   .text 
   {
    height: 1000px;
   }
   .video
   {
  padding-top: 10px; /* Поля вокруг текста */ 
   }
   h1 a
   {
    text-align:center;
    color:white;
	position	: absolute;
	top		: 500px;
	left		: 0;
	width		: 100px;
	}
	   h2 a
   {
    color:white;
	position	: absolute;
	top		: 500px;
	left		: 100px;
	width		: 100px;
	}
	   h3 a
   {
    color:white;
	position	: absolute;
	top		: 500px;
	left		: 1200px;
	width		: 100px;
	}
  </style>
 </head>
 <body class = "body">
 
<div id="smooth" class = "main_pic" align-items-center >
<video video src = "/proj/images/splash.m4v" autoplay muted width = 100%>	</video>
	<h1  class="splash_logo"><a href = "/proj/include/header.php">Жопа</a></h1>
	<h2  class="splash_logo"><a href = "#yak2">Жопа2</a></h2>
	<h3  class="splash_logo"><a href = "#yak3">Жопа3</a></h3>
</div>

	 <div class="scale"><img src="/proj/images/road.jpg" alt="moving around" class="scale"></div>


<div class = "splash">
	<div class = "video"  >
		<section id="yak1">
			<video video src = "/proj/images/splash.m4v" autoplay muted width = 100%>	</video>
	</div>
</div>

<div class = "video"  >
   <p><a name="top"></a></p>
   		<section id="yak2">
 
	<video video src = "/proj/images/splash.m4v" controls width = 100%>
	</video>
	
</div>
		<section id="yak3">

  <ol type="I" start="4">
    <li>Чебурашка</li>
    <li>Крокодил Гена</li>
    <li>Шапокляк</li>
  </ol>

 </body>
</html>
