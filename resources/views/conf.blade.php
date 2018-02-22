<?php
define('BASE', str_replace('\\', '/', realpath(__DIR__)),false);

include 'meekrodb.2.3.class.php';
include 'config.class.php';
include 'configX.php';

DB::$host = Config::Read('db.hostname');
DB::$user = Config::Read('db.username');
DB::$password = Config::Read('db.password');
DB::$dbName = Config::Read('db.database');

function getAllBlogs() {
  $getAllBlogs = DB::query("SELECT * FROM `blogs` ORDER BY datum DESC, tijd DESC");
  return $getAllBlogs;
}

function getBlogCategories($id) {
  $getBlogCategories = DB::query("SELECT c.name FROM `categories` c, `blogs_categories` bc WHERE bc.blogs_id = %i AND bc.category_id = c.id", $id);
  return $getBlogCategories;
}

function getBlogReactions($id) {
  $getBlogReactions = DB::query("SELECT * FROM `reactions` WHERE blogs_id = %i", $id);
  if(DB::count()) {
    return $getBlogReactions;
  } else {
    return false;
  }
}

function setReaction($title, $bid, $text) {
  DB::insert('reactions', array(
  'title' => $title,
  'blogs_id' => $bid,
  'text' => $text,
  'datum' => date('Y-m-d'),
  'tijd' => date('G:i:s')
  ));
}

function deleteReaction($id) {
  DB::delete('reactions', "id=%i", $id);
}

function disableBlogReactions($id) {
  DB::update('blogs', array('disabled' => '1'), "id=%i", $id);
}

function getSearchBlogIds($search) {
  $getSearchBlogIds = DB::query("SELECT id FROM `blogs` WHERE title LIKE %s OR blog LIKE %s OR subtitle LIKE %s OR text LIKE %s OR datum LIKE %s ORDER BY id DESC", '%'.$search.'%', '%'.$search.'%', '%'.$search.'%', '%'.$search.'%', '%'.$search.'%');
  if(DB::count()) {
    return $getSearchBlogIds;
  } else {
    return false;
  }
}

function getBlogsIds() {//moet nog
  $getBlogsIds = DB::query("SELECT id FROM `blogs`");
  return $getBlogsIds;
}

function getBlog($id) {//moet nog
  $getBlog = DB::queryFirstRow("SELECT * FROM `blogs` WHERE id = %i", $id);
  return $getBlog;
}

function getAccount($username, $password) {
  $getAccount = DB::queryFirstRow("SELECT * FROM `accounts` WHERE username=%s AND password=%s", $username, $password);
  if (DB::count()) {
    return $getAccount;
  } else {
    return false;
  }
}

function getAccountUsername($username) {
  $getAccountUsername = DB::query("SELECT username FROM `accounts` WHERE username=%s", $username);
  if (DB::count()) {
    return $getAccountUsername;
  } else {
    return false;
  }
}

function getBlogsOfMonth($month, $year) {
  $d=cal_days_in_month(CAL_GREGORIAN,$month,$year);
  $getBlogsOfMonth = DB::query("SELECT * FROM `blogs` WHERE datum BETWEEN %s AND %s", $year.'-'.$month.'-01', $year.'-'.$month.'-'.$d);
  if (DB::count()) {
    return $getBlogsOfMonth;
  } else {
    return false;
  }
}
  
function getAccountEmail($email) {
  $getAccountEmail = DB::query("SELECT email FROM `accounts` WHERE email=%s", $email);
  if (DB::count()) {
    return $getAccountEmail;
  } else {
    return false;
  }
}

function getAccountUsernameAndEmail($username, $email) {
  $getAccountUsernameAndEmail = DB::queryFirstRow("SELECT id, username, email FROM `accounts` WHERE username=%s AND email=%s", $username, $email);
  if (DB::count()) {
    return $getAccountUsernameAndEmail;
  } else {
    return false;
  }
}
?>
