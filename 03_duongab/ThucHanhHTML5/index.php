<!DOCTYPE html>
<html>
<head>
	<title>Demo HTML5</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<header>
		<div class="row">
			<div class="col-sm-12">
				<h1>This is my first website</h1>
			</div>
		</div>
	</header>
	<nav>
		<div class="row">
			<div class="col-sm-12">
				<div class="col-sm-2">
					<details>
						<summary>Menu</summary>
						<ul>
							<li><a href="#">Item 1</a></li>
							<li><a href="#">Item 2</a></li>
						</ul>
					</details>
				</div>
				<div id="menu">
				<div class="col-sm-10">
					<ul>
    					<li><a href="#">Home</a></li>
    					<li><a href="#">About Us</a></li>
    					<li><a href="#">News</a></li>
    					<li><a href="#">Contact Us</a></li>
  					</ul>
				</div>
				</div>
			</div>
		</div>
	</nav>
	<aside class="col-sm-3">
			<ul>
    			<li><a href="#">Home</a></li>
    			<li><a href="#">About Us</a></li>
    			<li><a href="#">News</a></li>
    			<li><a href="#">Contact Us</a></li>

  			</ul>
	</aside>
	<section class="col-sm-8">
		<article>
  		<p class="col-sm-6">
  		<mark>HTML5</mark><br>
  		HTML 5 (formerly spelled HTML5[a]) is a markup language used for structuring and presenting content on the World Wide Web. It is the fifth and current major version of the HTML standard, and subsumes XHTML.</p>
  		<p class="col-sm-6">
  		<mark>CSS3</mark><br>
  		Unlike CSS 2, which is a large single specification defining various features, CSS 3 is divided into several separate documents called "modules". 
  		</p>
  		</article>
	</section>
	<div class="video">
	<div class="col-sm-6">
		<h3><mark>Play video</mark></h3>
		<video width="400px" controls>
			<source src="images/video.mp4" type="video/mp4">
		</video>
	</div>
	</div>
	<div class="audio">
	<div class="col-sm-6">
		<h2><mark>Play audio</mark></h2>
		<audio controls="">
			<source src="images/audio.mp3" type="audio/mp3">
		</audio>
		<time>10:30</time>
	</div>
	</div>
	<div class="image">
		<div class="col-sm-6">
		<figure>
			<img src="images/flower.jpg">
		</figure>
		<figcaption>This is flower</figcaption>
		</div>
	</div>
		<canvas id="myCanvas" width="200" height="100" style="border:1px solid #d3d3d3;">
		Your browser does not support the HTML5 canvas tag.</canvas>
		<script>
			var c = document.getElementById("myCanvas");
			var ctx = c.getContext("2d");
			ctx.moveTo(0,0);
			ctx.lineTo(200,100);
			tx.stroke();
		</script>
	<menu>
		<command type="command" label="Save" onclick="save()">Save</command>
	</menu>
	<form action="/action_page.php" method="get">
  		<input list="browsers" name="browser">
  		<datalist id="browsers">
    		<option value="Internet Explorer">
    		<option value="Firefox">
    		<option value="Chrome">
    		<option value="Opera">
    		<option value="Safari">
  		</datalist>
  		<input type="submit">
	</form>
	<embed src="images/anhdong.gif"">
	<p>Display a gauge:</p>
	<meter value="2" min="0" max="10">2 out of 10</meter><br>
	<meter value="0.6">60%</meter>
	<progress value="22" max="100"></progress>
	<form oninput="x.value=parseInt(a.value)+parseInt(b.value)">0
  		<input type="range" id="a" value="50" style="width: 20%;">100
  		+<input type="number" id="b" value="50">=<output name="x" for="a b"></output>
	</form>
	<footer>
			<h1>This is footer</h1>
	</footer>
</body>
</html>