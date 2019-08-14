<h3 class="cent">新增校園映象圖片</h3>
<hr>
<form action="/api/add/image" method="post" enctype="multipart/form-data">
  @csrf
  
  <table style="margin:auto;width:550px">
    <tr>
      <td style="text-align:right">校園映象圖片：</td>
      <td><input type="file" name="file" ></td>
    </tr>
  </table>
  <div class="cent">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
  </div>
</form>