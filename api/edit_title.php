<?php
include_once "db.php";

if(isset($_POST['id'])){
    foreach($_POST['id'] as $idx => $id){
        // 刪除
        if(isset($_POST['del']) && in_array($id,$_POST['del'])){
            $Title->del($id);

            // 編輯
        }else {
            $row=$Title->find($id);
            $row['text']=$_POST['text'][$idx];
            $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;

            $Title->save($row); 
        }
    }
}
to("../admin.php?do=title")
// dd($_POST);
?>