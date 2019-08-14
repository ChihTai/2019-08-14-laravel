<h3 class="cent">更換動畫圖片</h3>
<hr>
<form action="/api/update/mvim/{{ $cid }}" method="post" enctype="multipart/form-data">
@csrf
  <table style="margin:auto;width:550px">
    <tr>
      <td style="text-align:right">動畫圖片：</td>
      <td><input type="file" name="file" ></td>
    </tr>
  </table>
  <div class="cent">
    <input type="submit" value="更換">
    <input type="reset" value="重置">
  </div>
</form>