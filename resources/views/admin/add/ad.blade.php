<h3 class="cent">新增動態廣告文字</h3>
<hr>
<form action="/api/add/ad" method="post" enctype="multipart/form-data">
  @csrf
  
  <table style="margin:auto;width:550px">

    <tr>
      <td style="text-align:right">動態廣告文字</td>
      <td><input type="text" name="text"></td>
    </tr>
  </table>
  <div class="cent">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
  </div>
</form>