<div class="w3ls is-table-row">
	@forelse($two_posts as $post)
		<div class="col-md-6 w3ls-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
			<div class="tc-ch">
				<div class="tch-img">
					<a href="#{{$post->slug}}"><img src="{{URL::to('storage')}}/{{$post->image}}" class="img-responsive" alt="{{$post->title}}"></a>
				</div>
				<h3><a href="#{{$post->slug}}">{{$post->title}}</a></h3>
				<h6>BY <a href="#{{$post->slug}}">ADAM ROSE </a>JULY 10 2016.</h6>
				{!! str_limit($post->body, $limit = 150, $end = '...') !!}
				<div class="bht1">
					<a href="#{{$post->slug}}">Read More</a>
				</div>
				<div class="soci">
					<ul>
						<li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
						<li class="hvr-rectangle-out"><a class="drib" href="#"></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	@empty
		<div class="col-md-6 w3ls-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
			<div class="tc-ch">
				No posts available
			</div>
		</div>
	@endforelse
	<div class="clearfix"></div>
</div>