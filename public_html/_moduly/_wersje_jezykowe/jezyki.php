<?php 
	$url = str_replace ('index.php', '', 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'] );
	$lang = '';
	if( strpos($url,'/pl/') ){ //pl
		$lang = '/pl/';
	}else if( strpos($url,'/en/') ){ //en
		$lang = '/en/';
	}else{ //ru
		$lang = '/ru/';
	}
?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div style='float: left; padding-top: 4px; height: 25px;' class="fb-like" 
	data-href="https://www.facebook.com/ommasaz" 
	data-layout="standard" data-action="like" data-size="large" 
	data-show-faces="false" data-share="false"></div>
	
	

<section id=jezyki>
	<h2 class=ukryj>Languages</h2>
	<a href='<?php echo str_replace ($lang, '/pl/', $url);?>'>
		<img src='./../../_moduly/_img/pl.png' alt='pl'>
	</a>
	<a href='<?php echo str_replace ($lang, '/en/', $url);?>'>
		<img src='./../../_moduly/_img/en.png' alt='en'>
	</a>
	<!--
	<a href='<?php echo str_replace ($lang, '/ru/', $url);?>'>
		<img src='./../../_moduly/_img/ru.png' alt='ru'>
	</a>
	-->
</section>
<div style='clear:both;'></div>
