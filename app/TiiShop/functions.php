<?php
function MenuMulti($data,$parent_id ,$str='---| ',$select)
{
	foreach ($data as $val) {
		$id = $val["id"];
		$ten= $val["name"];
		if ($val['parent_id'] == $parent_id) {
			// print_r($select);  exit();
			if ($select!=0 && $id == $select) {
				echo '<option value="'.$id.'" selected >'.$str." ".$ten.'</option>';
			}	else {
				echo '<option value="'.$id.'">'.$str." ".$ten.'</option>';
			}
			MenuMulti($data,$id,$str.'---|',$select);
		}
	}
}
function listcate ($data,$parent_id =0,$str="")
{
	foreach ($data as $val) {
		$id = $val["id"];
		$ten= $val["name"];
		if ($val['parent_id'] == $parent_id) {
			echo '<tr>';
			if ($str =="") {
				echo '<td ><strong>'.$id.'</strong></td>';
				echo '<td ><strong style="color:blue;">'.$str.'- '.$ten.'</strong></td>';
			} else {
				echo '<td ><strong>'.$id.'</strong></td>';
				echo '<td style="color:green;">'.$str.'--|'.$ten.'</td>';
			}
			echo '<td class="list_td aligncenter">
		            <a href="../admin/danhmuc/edit/'.$id.'" title="Sửa"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;&nbsp;&nbsp;
		            <a href="../admin/danhmuc/del/'.$id.'" title="Xóa" onclick="return xacnhan(\'Xóa danh mục này ?\') "> <span class="glyphicon glyphicon-remove"></span> </a>
			      </td>
			    </tr>';
			listcate ($data,$id,$str." ---| ");
		}
	}
}
function cate_parent($data,$parent=0,$str="---|",$select=0){
	foreach ($data as $key =>$value){
	$id=$value['id'];
	$name=$value['name'];
	if ($value['parent_id'] == $parent){
		if ($select !=0 && $id==$select){
			echo "<option value='$id' selected>$str $name</option>";
		}else{
			echo "<option value='$id'>$str $name</option>";
		}
		cate_parent($data,$id,$str."---|",$select);
	}
	}
}
?>