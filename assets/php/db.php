<?php

class h_num{
  private $_arr = array();

  public function __set($name, $value){
    $this->_arr[$name] = $value;
  }

  public function &__get($name){
    if (isset($this->_arr[$name])){
      return $this->_arr[$name];
    } else return null;
  }

}
?>

<!-- , 'visit' => 'http://www.englishharbouryachts.com', 'tweet'=>['English Harbour Yachts by Elliot Greenwood','http://elliotgreenwood.co.uk/#project-ehy'] 



$html = '<span class="like-span">';
		//$html += '<a href="php/like.php?id='. $id .'&no='. noOfHearts($id, 1) .'" class="like'. isset($_COOKIE[$id]) ? ' active' : '' .'">';
		$html += '<img src="images/heart.svg" class="svg" data-png-fallback="images/heart.png" height="20px" width="auto"/>';
		//$html += '<span id="'.$id.'_count">'. noOfHearts($id, 0) .'</span>';
		$html += '</a></span>';
		
		'. isset($_COOKIE[$id]) ? ' active' : '' .'
		
		$html  = '<span class="visit-span">';
		$html += '<a href="'.$link.'" class="visit">';
		$html += '<img src="images/visit.svg" class="svg" data-png-fallback="images/visit.png" height="20px" width="auto"/>visit</a></span>';


		$html  = '<span class="download-span">';
	$html += '<a href="'.$link.'" class="download">';
	$html += '<img src="images/download.svg" class="svg" data-png-fallback="images/download.png" height="20px" width="auto"/>download</a></span>';
	
	
	foreach($data as $key => $value){
		$data[$key] = urlencode($value);
		}
	$html  = '<span class="twitter-span">';
	$html += '<a href="http://twitter.com/share?text='.$data[0].'&url='.$data[1].'" target="_blank" class="tweet">';
	$html += '<img src="images/tweet.svg" class="svg" data-png-fallback="images/tweet.png" height="20px" width="auto"/>tweet</a></span>';
-->