<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['create'])) {

    $ROOM = new Room(NULL);
    $VALID = new Validator();

    $ROOM->title = filter_input(INPUT_POST, 'title');
    $ROOM->short_description = filter_input(INPUT_POST, 'short_description');
    $ROOM->description = filter_input(INPUT_POST, 'description');
    $ROOM->no_of_rooms = filter_input(INPUT_POST, 'no_of_rooms');
    $ROOM->price = filter_input(INPUT_POST, 'price');

    $dir_dest = '../../upload/room/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 470;
        $handle->image_y = 433;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $ROOM->image_name = $imgName;

    $VALID->check($ROOM, [
        'title' => ['required' => TRUE],
        'short_description' => ['required' => TRUE],
        'description' => ['required' => TRUE],
        'no_of_rooms' => ['required' => TRUE],
        'price' => ['required' => TRUE],
        'image_name' => ['required' => TRUE],
    ]);

    if ($VALID->passed()) {
        $ROOM->create();

        if (!isset($_SESSION)) {
            session_start();
        }
        $VALID->addError("Your data was saved successfully", 'success');
        $_SESSION['ERRORS'] = $VALID->errors();

        header("location: ../view-room-photos.php?id=" . $ROOM->id);
    } else {

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}

if (isset($_POST['update'])) {
    $dir_dest = '../../upload/room/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 470;
        $handle->image_y = 433;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $ROOM = new Room($_POST['id']);

    $ROOM->image_name = $_POST['oldImageName'];
    $ROOM->title = filter_input(INPUT_POST, 'title');
    $ROOM->short_description = filter_input(INPUT_POST, 'short_description');
    $ROOM->description = filter_input(INPUT_POST, 'description');
    $ROOM->no_of_rooms = filter_input(INPUT_POST, 'no_of_rooms');
    $ROOM->price = filter_input(INPUT_POST, 'price');

    $VALID = new Validator();

    $VALID->check($ROOM, [
        'title' => ['required' => TRUE],
        'short_description' => ['required' => TRUE],
        'description' => ['required' => TRUE],
        'no_of_rooms' => ['required' => TRUE],
        'price' => ['required' => TRUE],
        'image_name' => ['required' => TRUE],
    ]);

    if ($VALID->passed()) {
        $ROOM->update();

        if (!isset($_SESSION)) {
            session_start();
        }
        $VALID->addError("Your changes saved successfully", 'success');
        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['ERRORS'] = $VALID->errors();

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}


if (isset($_POST['save-data'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $ROOM = Room::arrange($key, $img);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}