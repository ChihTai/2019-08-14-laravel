<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">校園映像圖片管理</p>
    <form method="post" action="/api/edit/image">
    @csrf
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="68%">校園映像圖片</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td></td>
                </tr>
        @foreach($rows as $key => $row)                
                <tr class="cent">
                    <td width="68%"><img src="{{ asset('storage/img/'.$row['file'])}}" style="width:100px;height:68px"></td>
                    <td width="7%"><input type="checkbox" name="sh[]" value="{{ $row['id'] }}" {{$row['sh']}}></td>
                    <td width="7%"><input type="checkbox" name="del[]" value="{{ $row['id'] }}"></td>
                    <input type="hidden" name="id[]" value="{{ $row['id'] }}">
                    <td><input type="button" value="更換圖片" onclick="op('#cover','#cvr','/admin/update/image/{{ $row['id'] }}')"></td>
                </tr>
        @endforeach
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button"
                    onclick="op('#cover','#cvr','/admin/add/image')" value="新增校園映像圖片">
                    </td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>
