<?php
/**
 * Created by Muhammad.
 * Email: "muhammadnoamany@gmail.com"
 * Date: 10/16/2019
 */
ini_set('upload_max_filesize', '10M');
ini_set('post_max_size', '10M');
ini_set('max_input_time', 300);
ini_set('max_execution_time', 300);
if (isset($_POST)) {

    $name = $_FILES['file']['name'];
    $tmp = $_FILES['file']['tmp_name'];

    move_uploaded_file($tmp, "uploads/" . $name);


}
?>