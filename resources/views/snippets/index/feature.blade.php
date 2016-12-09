<div class="tc-ch wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
	<div class="tch-img">
		<a href="#{{$feature->slug}}"><img src="{{URL::to('storage')}}/{{$feature->image}}" class="img-responsive" alt="{{$feature->title}}"></a>
	</div>
	<h3><a href="singlepage.html">{{$feature->title}}</a></h3>
	<h6>BY <a href="singlepage.html">ADAM ROSE </a>JULY 10 2016.</h6>
	{!!$feature->body!!}
	<div class="bht1">
		<a href="#{{$feature->slug}}">Continue Reading</a>
	</div>
	<div class="soci">
		<ul>
			<li class="hvr-rectangle-out"><a class="fb" href="#"></a></li>
			<li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
			<li class="hvr-rectangle-out"><a class="goog" href="#"></a></li>
			<li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
			<li class="hvr-rectangle-out"><a class="drib" href="#"></a></li>
		</ul>
	</div>
	<div class="clearfix"></div>
</div>
<div class="clearfix"></div>