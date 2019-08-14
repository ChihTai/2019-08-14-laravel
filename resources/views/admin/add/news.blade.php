<h3 class="cent">新增最新消息內容</h3>
<hr>
<form action="/api/add/news" method="post" enctype="multipart/form-data">
  @csrf
  
  <table style="margin:auto;width:550px">

    <tr>
      <td style="text-align:right;text-align:top">最新消息內容</td>
      <td><textarea name="text" style="width:250px;height:100px"></textarea></td>
    </tr>
  </table>
  <div class="cent">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
  </div>
</form>