<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php
            echo $displayName; 
        ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>

    <!-- HEADER -->
    <header>
        <div class="px-3 py-2 bg-dark text-white">
            <div class="container">
                <span class="fs-4"><?php echo $hello ?></span>
            </div>
        </div>
    </header>

    <!-- MAIN CONTENT --> 
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-start g-5 py-5 ">
            <div class="col-10 col-sm-8 col-lg-6 ">
                <img class="d-block mx-lg-auto img-thumbnail rounded" src="img/photo.jpeg" alt="<?php echo $dispalyName ?>"  width="240" height="320"/>
            </div>
            <div class="col-lg-6 text-end">
                <h2 class="">
                    <?php
                        echo $displayName;
                    ?>
                </h2>
                <p><strong>Name:&nbsp</strong> <?php echo $name ?> </p>
                <p><strong>Last Name:&nbsp</strong> <?php echo $lastname ?> </p>
                <p><strong>City:&nbsp</strong> <?php echo $city ?> </p>
                <p><strong>Age:&nbsp</strong> <?php echo $age ?> </p>
            </div>
        </div>
    </div>


    <footer class="bd-footer py-4 py-md-5 mt-5 bg-light">
        <div class="container col-md-4">
            <span class="mb-3 mb-md-0 muted">(c) 2022 Andrew Totmakov</span>
        </div>
    </footer>


    <!-- Bootstrap JS --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
