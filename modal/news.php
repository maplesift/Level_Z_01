<!-- from backend/$do.php -->
<h3 class="cent">新增最新消息資料</h3>
<hr>
<form action="api/insert.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>最新消息資料：</td>
            <textarea name="text" style="width:300px;height:100px;"></textarea>
        </tr>

    </table>
    <div class="cent">
        <!-- *** 藏變數 val=ad  -->
        <input type="hidden" name="table" value="<?=$_GET['table']?>">

        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>