<h3 class="cent">新增網站標題圖片</h3>
<hr>
<form action="/api/add/title" method="post" enctype="multipart/form-data">
  @csrf
  
  <table style="margin:auto;width:550px">
    <tr>
      <td style="text-align:right">標題區圖片</td>
      <td><input type="file" name="file" ></td>
    </tr>
    <tr>
      <td style="text-align:right">標題區文字</td>
      <td><input type="text" name="title"></td>
    </tr>
  </table>
  <div class="cent">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
  </div>
</form>