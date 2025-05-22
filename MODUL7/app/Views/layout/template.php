<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <style>
      html, body{
        height: 100%;
      }
      body{
        display: flex;
        flex-direction: column;
      }
    </style>

    <!-- My CSS -->
     <link rel="stylesheet" href="/css/style.css">
  </head>
  <body class = "bg-body-tertiary">

    <?= $this->include('layout/navbar') ?>
    <?= $this->renderSection('content') ?>


  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card mt-3">
          <div class="card-body">
            <?= $this->renderSection('content') ?>
          </div>
        </div>
      </div>
    </div>
  </div>  

<?= $this->renderSection('content') ?>

  <footer class="footer mt-auto py-3 bg-secondary">
  <div class = "container text-center">
    <span class="text-white">
      copyright
    </span>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>