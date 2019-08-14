<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">管理者帳號管理</p>
    <form method="post" action="/api/edit/admin">
    @csrf
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="45%">帳號</td>
                    <td width="45%">密碼</td>
                    <td>刪除</td>
                </tr>
        @foreach($rows as $key => $row) 
                <tr class="cent">
                    <td width="45%"><input type="text" name="acc[]" value="{{ $row['acc'] }}" style="width:80%"></td>
                    <td width="45%"><input type="password" name="pw[]" value="{{ $row['pw'] }}" style="width:80%"></td>
                    <td><input type="checkbox" name="del[]" value="{{ $row['id'] }}"></td>
                    <input type="hidden" name="id[]" value="{{ $row['id'] }}">
                </tr>
        @endforeach                
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button"
                            onclick="op('#cover','#cvr','/admin/add/admin')" value="新增管理者帳號">
                    </td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>
