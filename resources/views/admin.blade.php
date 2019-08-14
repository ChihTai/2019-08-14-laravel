@extends("layout.base")
@section("content")
<div id="ms">
@include("admin.left")
    <div class="di"
        style="height:540px; border:#999 1px solid; width:76.5%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
        <!--正中央-->
    @include("admin.headbar")
    @include("admin.main")
    </div>

</div>
<div style="clear:both;"></div>
@endsection