<?php
$id = $_POST['id'];
$no = $_POST['no'];	
$icn = (isset($_POST['i']) && $_POST['i'] == 1) ? 1 : 0;
function build_html($i, $id, $no, $icn = 1) {
	$n = ($i) ? $no+1 : $no-1;
	$is_active = ($i) ? ' active' : '';
	$is_animated = ($i) ? ' animated tada' : '';
	$prm = ($icn) ? '&i=1' : '';
    $app = ($icn) ? '-i' : '';
	$concat = $is_active . $is_animated;
	$html  = "<span class=\"like-span{$app}\">";
	$html .= "<a href=\"http://elliotgreenwood.co.uk/assets/php/like.php?id=". $id ."&no=". $n ."{$prm}\" class=\"like". $concat ."\">";
	$html .= '<i class="icon-heart"></i> ';
	if (!$icn){
        $ending = ($n == 1) ? "like" : "likes";
    	$num = $n . ' ' . $ending;
    	$html .= '<span id="'. $id .'_count"> '. $num .'</span>';	
	}
	$html .= '</a></span>';
	$op = ($i) ? (3600*24*365) : -(3600*24*365);
	setcookie("$id","1",time()+$op,"/");
	echo($html);
}
function connectToDB() {
	mysql_connect("database.lcn.com", "LCN323672_eg", "EST(bluebook") or die(mysql_error());
    mysql_select_db("elliotgreenwood_co_uk_db") or die(mysql_error());
}
if (isset($id) && $id != ''){
	connectToDB();
	if(!isset($_COOKIE["$id"])){
			$sql = "UPDATE `hearts` SET `hearts` = `hearts`+1 WHERE `Project`='{$id}'";
			mysql_query($sql); 
			build_html(1, $id, $no, $icn);
			
	}
	else {
			$sql = "UPDATE `hearts` SET `hearts` = `hearts`-1 WHERE `Project`='{$id}'";
			mysql_query($sql); 
			build_html(0, $id, $no, $icn);
	}	
}
?>