<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Animated Arc Popup Menu Demo</title>
<style type="text/css">
body {
  font: .75em/1.2;
  background: #f2f2f2;
  background: linear-gradient(left, #f2f2f2, #dddddd);
  background: -moz-linear-gradient(left, #f2f2f2, #dddddd);
  background: -webkit-linear-gradient(left, #f2f2f2, #dddddd);
  background: -o-linear-gradient(left, #f2f2f2, #dddddd);
}

a:focus { outline: none; }

h3 { text-shadow: 0 2px #ccc; }

.tc { text-align: center; }

#navs {
  position: fixed;
  left: 150px;
  bottom: 150px;
  width: 40px;
  height: 40px;
  line-height: 40px;
  list-style-type: none;
  margin: 0;
  padding: 0;
  text-align: center;
  color: #fff;
  cursor: pointer;
}

#navs>li,
#navs:after {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  -webkit-border-radius: 50%;
  background-color: #e74c3c;
}

#navs>li {
  transition: all .6s;
  -webkit-transition: all .6s;
  -moz-transition: .6s;
}

#navs:after {
  content: attr(data-close);
  z-index: 1;
  border-radius: 50%;
  -webkit-border-radius: 50%;
}

#navs.active:after { content: attr(data-open); }

#navs a {
  width: 40px;
  height: 40px;
  display: inline-block;
  border-radius: 50%;
  -webkit-border-radius: 50%;
  text-decoration: none;
  color: #fff;
  font-size: 0.8em;
}
</style>
</head>
<body>
<h1>Animated Arc Popup Menu Demo</h1>
<div class="jquery-script-ads"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript" src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
<ul id="navs" data-open="close" data-close="open">
  <li><a href="http://www.17sucai.com/">go</a></li>
  <li><a href="http://www.17sucai.com/">menu</a></li>
  <li><a href="http://www.17sucai.com/">menu</a></li>
  <li><a href="http://www.17sucai.com/">menu</a></li>
  <li><a href="http://www.17sucai.com/">come</a></li>
</ul>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
(function(){
	var ul=$("#navs"),li=$("#navs li"),i=li.length,n=i-1,r=120;
	ul.click(function(){
		$(this).toggleClass('active');
		if($(this).hasClass('active')){
			for(var a=0;a<i;a++){
				li.eq(a).css({
					'transition-delay':""+(50*a)+"ms",
					'-webkit-transition-delay':""+(50*a)+"ms",
					'left':(r*Math.cos(90/n*a*(Math.PI/180))),
					'top':(-r*Math.sin(90/n*a*(Math.PI/180)))	
				});
			}
		}else{
			li.removeAttr('style');
		}
	});
})($);
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>