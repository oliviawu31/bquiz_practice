<!-- h3.cent =>文字置中 -->
<h3 class="cent">新增校園映像圖片</h3>
<hr>
<!-- 上傳檔案功能=> -->
<form action="api/insert_image.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>校園映像圖片：</td>
            <td><input type="file" name="img" id="img"></td>
        </tr>
    </table>
    <div class="cent"><input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>


</form>