<?php

$DATA_DIR = __DIR__ . '/data';
$DEFAULT = null;
$PASS = '1234';

if (!is_dir($DATA_DIR)) {
  throw new Exception('Invalid Configuration');
}

// redirect to avoid invalid directory on home page
if (!is_null($DEFAULT) && $_SERVER['REQUEST_URI'] === '/') {
  header("Location: /$DEFAULT");
}

// get current directory in URI
$directory = null;
if (preg_match('/^\/[a-zA-Z0-9]{1,64}$/', $_SERVER['REQUEST_URI']) === 1) {
  $directory = str_replace('/', '', $_SERVER['REQUEST_URI']);

  if (!is_dir("$DATA_DIR/$directory")) {
    $directory = null;
  }
}

// initialize the list of directories from the DATA_DIR
$directories = [];
$d = dir("$DATA_DIR");
while (($entry = $d->read()) !== false) {
  if (preg_match('/^[a-zA-Z0-9]{1,64}$/', $entry) === 1) {
    $directories[] = $entry;
  }
}

ob_start();
include 'templates/dirList.php';
$body = ob_get_clean();

// initialize the list of images from DATA_DIR/directory
$images = [];
if (!is_null($directory)) {
  // handle form POST
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
      if (!isset($_POST['name']) || !isset($_POST['pass']) || !isset($_FILES['img'])) {
        throw new Exception('Missing required input');
      }

      if ($_POST['pass'] !== $PASS) {
        throw new Exception('Invalid password');
      }

      if (preg_match('/\//', $_POST['name'])) {
        throw new Exception('Username cannot contain `/` character');
      }

      if (strlen($_POST['name']) > 64) {
        throw new Exception('Username too loooong');
      }

      $ext = strtolower(pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION));
      if (!in_array($ext, ['jpeg', 'jpg', 'png'])) {
        throw new Exception('Invalid file type');
      }

      if (!getimagesize($_FILES['img']['tmp_name'])) {
        throw new Exception('Invalid file type');
      }

      if ($_FILES['img']['size'] > 20000000) {
        throw new Exception('Image bigger than 20MB');
      }

      $file = (new DateTime())->format('Ymd_His_');
      $file .= $_POST['name'];
      $file .= ".$ext";

      move_uploaded_file($_FILES['img']['tmp_name'], "$DATA_DIR/$directory/$file");
    } catch (Exception $e) {
      // display forms error
      $error = $e->getMessage();

      ob_start();
      include 'templates/errorPopup.php';
      $body .= ob_get_clean();
    }
  }

  // display the list of images after the upload
  $d = dir("$DATA_DIR/$directory");
  while (($entry = $d->read()) !== false) {
    if (preg_match('/^[0-9]{8}_[0-9]{6}_.*$/', $entry) === 1) { // update rules for real images
      $images[] = $entry;
    }
  }

  if (count($images) === 0) {
    $placeholder = "Empty directory";
  }

  ob_start();
  include 'templates/imgList.php';
  $body .= ob_get_clean();
} else {
  $error = "Invalid directory";
  ob_start();
  include 'templates/error.php';
  $body .= ob_get_clean();
}

require 'templates/root.php';
