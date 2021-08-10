<?php
session_start();
if (isset($_POST['id'])) {
    if (isset($_POST['Title'])) {
        if (isset($_POST['Discription'])) {
            if (isset($_POST['Price'])) {
                if (isset($_FILES['image'])) {
                    $folder = '../img/';
                    $path = $folder.$_FILES['image']['name'];
                    if (file_exists($path)) {
                        echo "Bu fayl mavjud ";
                        die();
                    } else {
                        if ($_FILES['image']['size'] > 5000000) {
                            echo "faylni hajmi 5mb dan ortib ketdi";
                            die();
                        } else {
                            $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
                            if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif' || $ext == 'bmp') {
                                if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
                                    $_SESSION['id'] = $_POST['id'];
                                    $_SESSION['title'] = $_POST['Title'];
                                    $_SESSION['discription'] = $_POST['Discription'];
                                    $_SESSION['price'] = $_POST['Price'];
                                    $_SESSION['image'] = $path;
                                    header("Location: product.php");
                                } else {
                                    echo "error" ;
                                    die();
                                }
                            }
                        }
                    }
                } else {
                    echo "Image null!!";
                }
            } else {
                echo "price null!!";
            }
        } else {
            echo "Discription null!!";
        }
    } else {
        echo "title null!!";
    }
}





?>
