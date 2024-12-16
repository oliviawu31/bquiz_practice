<!-- h3.cent =>文字置中 -->
<h3 class="cent">新增動態文字廣告</h3>
<hr>
<!-- 上傳檔案功能=> -->
<form action="api/insert_ad.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>新增動態文字廣告：</td>
            <td><input type="text" name="text" id="text"></td>
        </tr>
    </table>
    <div class="cent"><input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>


</form>