<div class="di di ad" style="height:540px; width:23%; padding:0px; margin-left:22px; float:left; ">
    <!--右邊-->
    <button style="width:100%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px;"
        onclick="lo(&#39;?do=admin&#39;)">管理登入</button>
    <div style="width:89%; height:480px;" class="dbor">
        <span class="t botli">校園映象區</span>
        <script>
            var nowpage = 0,
                num = 0;

            function pp(x) {
                var s, t;
                if (x == 1 && nowpage - 1 >= 0) {
                    nowpage--;
                }
                if (x == 2 && (nowpage + 1) * 3 <= num * 1 + 3) {
                    nowpage++;
                }
                $(".im").hide()
                for (s = 0; s <= 2; s++) {
                    t = s * 1 + nowpage * 1;
                    $("#ssaa" + t).show()
                }
            }
            pp(1)

        </script>
    </div>
</div>
