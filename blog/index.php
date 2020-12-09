<?php require_once 'lib/utils.php' ?>
<?php require_once 'lib/security.php' ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Sitio web</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row mt-2">
          <h1>Sitio web - Home</h1>
        </div>

        <div class="row">
          <?php
            echo getErrorMessage();
            echo getInfoMessage();
          ?>
        </div>

        <div class="row mt-3">
          <?php 
            if (!isAllowed()) {
              require_once 'components/login_form.php';
            } else {
              require_once 'components/logout_form.php';
            }
          ?>
        </div>

        <div class="row mt-3">
            <?php if (isAllowed()) { ?>
              <a href="nuevo.php">Nuevo Post</a>
            <?php } ?>
        </div>

        <div class="row mt-3">
          <label for="lPost">Lista de Post
            <?php echo getListPosts(); ?>
          </label>
        </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>