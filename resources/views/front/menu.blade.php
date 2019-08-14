<div id="lf" style="float:left;">
    <div id="menuput" class="dbor">
        <!--主選單放此-->
        <span class="t botli">主選單區</span>
    @foreach($menu as $mu)
        <div class="mainmu">
            <a href="{{$mu['href']}}">{{$mu['text']}}</a>
        <div class="mw"    >
        @if(!empty($mu['subs']))
            @foreach($mu['subs'] as $su)
            <div class="mainmu2">
                <a href="{{ $su['href'] }}">{{$su['text'] }}</a>
            </div>
            @endforeach
        @endif
        </div>
        </div>
    @endforeach

    </div>
    <div class="dbor" style="margin:3px; width:95%; height:20%; line-height:100px;">
        <span class="t">進站總人數 :{{$total}}</span>
    </div>
</div>
