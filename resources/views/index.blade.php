@extends("layout.base")
		<!--header--->
@section("content")		
        <div id="ms">
<!--選單-->
@include("front.menu")
@switch($main)
  @case("news")
    @include("front.news")
  @break
  @case("login")
    @include("front.login")
  @break
  @default
    @include("front.main")
  @break
@endswitch
  
@include("front.image")
        </div>
        <div style="clear:both;"></div>
@endsection				
	<!--footer--->
