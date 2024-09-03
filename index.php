<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users - ¡STRATEGY</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.13.1/dist/sweetalert2.all.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.13.1/dist/sweetalert2.min.css" rel="stylesheet">
</head>

<body>
  <!-- <?php /* include_once "./agregar_usuario.php";  */ ?> -->

  <div class="vh-100 bg-gray-blue">
    <?php include_once 'header.php'; ?>

    <main class="row h-100 bg-white">
      <?php include_once 'aside.php'; ?>

      <div class="col w-100 p-0">
        <?php include_once 'tabla.php'; ?>
      </div>
    </main>
  </div>

</body></html>