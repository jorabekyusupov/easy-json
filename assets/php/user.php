<?php
session_start();




if (empty($_SESSION['verify'])) {
    header("Location: /index.php");
}

$jsonlist = file_get_contents('data.json');
$list = json_decode($jsonlist, true);

?>



<!doctype html>
<html lang="en">

<head>
    <title>PageTitle</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <!-- Convert this to an external style sheet -->
    <style>
        body {
            color: white;
        }

        #hero {
            min-height: 100vh;
            background: #141E30;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #243B55, #141E30);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #243B55, #141E30);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        .card {

            background: #141E30;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #243B55, #141E30);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #243B55, #141E30);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="./logout.php">Logout</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">

            </div>
        </div>
    </nav>
    <!-- ======= Hero Section ======= -->
    <main id="hero">
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row  justify-content-center align-items-center g-5 py-5">



                <?php foreach ($list as  $value) {
                    foreach ($value as  $item){?>
               
                <div class='card' style='width:400px; height: 500px; margin:5px; padding:25px;'>
                    <h5 class='card-header'><?= $item['title'] ?></h5>
                    <img style="width: 300px; height: 300px; margin: 5px;"  src='<?= $item['img']?>' class='card-img-top' alt=''>
                    <div class='card-body'>
                        <h5 class='card-title'><?= $item['disc']?></h5>
                        <p class='card-text'><?= $item['price']?> </p>
                        <a href='' class='btn btn-primary'>Sotib olish</a>
                    </div>
                </div>

                <?php }} ?>

            </div>
        </div>
    </main>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
</body>

</html>