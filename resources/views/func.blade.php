<?php
function getCategoryOptionsHTML(){
  $output = "";
  $cats = DB::query("SELECT * FROM categories");
  foreach($cats as $dogs) {
    $output .= "<option value='$dogs[id]'>".$dogs['name']."</option>";
  }
  return $output;
}
function getCategoryOptionsHTMLupdate($id){
  $output = "";
  $catsAll = DB::query("SELECT name FROM categories");
  $cats = getBlogCategories($id);
  $i=0;//print_r($cats[0]);
  foreach($catsAll as $dogs) { //}($i=0;$i<count($catsAll);$i++) {
    if(in_array($dogs, $cats)) {
      $output .= "<option value='".$i++."' selected>".$dogs['name']."</option>";
    } else {
      $output .= "<option value='".$i++."'>".$dogs['name']."</option>";
    }

  }
  return $output;
}

function getBlogCategoriesOptionsHTML(){
  $output = "";
  $cats = DB::query("SELECT * FROM categories");
  foreach($cats as $dogs) {
    $output .= "<option value='$dogs[id]'>".$dogs['name']."</option>";
  }
  return $output;
}

function disableHtml($value) {
	return htmlentities(mysql_fix_string($value));
}

function mysql_fix_string($value) {
	if (get_magic_quotes_gpc()) $value = stripslashes($value);
	return mysqli_real_escape_string(DB::get(), $value);
}

function getCategoryOptionsArray(){
  $newCatarray = [];
  $cats = DB::query("SELECT * FROM `categories`");
  foreach($cats as $dogs) {
    array_push($newCatarray, $dogs['name']);
  }
  return $newCatarray;
}

function isError($error) {
  if($error!="") {
    $error = "<span class='errorfield'>&#8658;&nbsp;&nbsp;".$error."</span><br />";
    return $error;
  }
}

function isInlogError($error) {
  if($error!="") {
    $error = "<span class='error'>&#8658;&nbsp;&nbsp;".$error."&nbsp;</span><br />";
    return $error;
  }
}

function dutchDate($datum){
  $dateParts = explode("-", $datum);
  $d = $dateParts[2];
  $mo = $dateParts[1];
  $y = $dateParts[0];
  $date = $d . "-" . $mo . "-" . $y;
  return $date;
}

function isSuperBlogger() {
  if(isset($_SESSION['usernameBlog'])) {
    $query = DB::queryFirstField("SELECT rank FROM accounts WHERE username = %s AND password = %s", $_SESSION['usernameBlog'], $_SESSION['passwordBlog']);
    if($query < 3) {
			return false;
		}
		return true;
	}
}

function isBlogger() {
  if(isset($_SESSION['usernameBlog'])) {
    $query = DB::queryFirstField("SELECT rank FROM accounts WHERE username = %s AND password = %s", $_SESSION['usernameBlog'], $_SESSION['passwordBlog']);
    if($query < 2) {
			return false;
		}
		return true;
	}
}

function isSuperReader() {
	if(isset($_SESSION['usernameBlog'])) {
    $query = DB::queryFirstField("SELECT rank FROM accounts WHERE username = %s AND password = %s", $_SESSION['usernameBlog'], $_SESSION['passwordBlog']);
		if($query < 1) {
			return false;
		}
		return true;
	}
}

function isReader() {
	if(isset($_SESSION['usernameBlog'])) {
    $query = DB::queryFirstField("SELECT rank FROM accounts WHERE username = %s AND password = %s", $_SESSION['usernameBlog'], $_SESSION['passwordBlog']);
		if($query < 0) {
			return false;
		}
		return true;
	}
}

function redirect($url) {
  if (!headers_sent()) {
    header('Location: '.$url);
    exit;
  } else {
    echo '<script type="text/javascript">';
    echo 'window.location.href="'.$url.'";';
    echo '</script>';
    echo '<noscript>';
    echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
    echo '</noscript>';
    exit;
  }
}

?>
