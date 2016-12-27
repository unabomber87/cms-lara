@extends('layouts.master')
@section('content')
    @include('snippets.banner')
    <div class="technology">
        <div class="container">
        		<div class="col-md-9 technology-left">
            	@include('snippets.index.left')
            </div>
            <div class="col-md-3 technology-right">
            	@include('snippets.index.right')
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection

@section('custom_javascript')
<script type="text/javascript">
$(document).ready(function(){
  //alert("hello");
  getQuote();

});
function getQuote(){
 var url = "http://quotesondesign.com/wp-json/posts?filter[orderby]=rand&filter[posts_per_page]=1";

$.ajax({
  url: url,
  dataType: 'json',
  cache: false
})
.done(function(data) {
  $("#quote").html(data[0].content);
  $("#author").html(data[0].title);
  var tweet = $(data[0].content).text();
  $("#twitter").attr("href", "https://twitter.com/intent/tweet?text="+tweet+" &hashtags=random_quotes");
});

}

</script>
@endsection
