<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alumnado
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">ent
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <title>Diseno de USMAH</title>

  <link rel="preload" href="ccs/normalize.css" as=" style">
  <link rel="stylesheet" href="css/normalaze.css">
  <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
  <link rel="preload" href="ccs/style.css" as=" style">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">




</head>

<body>

  <!-- primera navegacion y pestalla
  esto cubre desde el logo, USMAH, Hola Bienvenido:, boton cerrar, 
  las navegaciones  inicio, informacion y claces aprobadas-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand">
        <img src="img/LogoU.jpg" alt="Logo" style="border-radius: 50% 50%; width: 3rem">
      </a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page">
              <h2>USMAH</h2>
            </a>
          </li>
        </ul>
        <div class="d-flex">

          <a class="nav-link active" aria-current="page">
            <h3 style=color:white>Hola Bienvenido</h3>
          </a>
          <button type="button" class="btn btn-danger">Cerrar Sesión
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
              class="bi bi-arrow-left-square" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </nav>

  <!-- segunda navegacion y pestalla
  esto cubre desde las navegaciones inicio, informacion y claces aprobadas-->
  <nav class="nav  flex-column flex-sm-row navbar-dark bg-dark">
    <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="index.php">
      <h4>INICIO
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-house-down-fill"
          viewBox="0 0 16 16">
          <path
            d="M12.5 9a3.5 3.5 0 1 1 0 7 3.5 3.5 0 0 1 0-7Zm.354 5.854 1.5-1.5a.5.5 0 0 0-.708-.707l-.646.646V10.5a.5.5 0 0 0-1 0v2.793l-.646-.646a.5.5 0 0 0-.708.707l1.5 1.5a.5.5 0 0 0 .708 0Z" />
          <path
            d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z" />
          <path d="m8 3.293 4.712 4.712A4.5 4.5 0 0 0 8.758 15H3.5A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z" />
        </svg>

      </h4>
    </a>

    <a class="flex-sm-fill text-sm-center nav-link" href="informacion.php">
      <h4>INFORMACION
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-inboxes-fill"
          viewBox="0 0 16 16">
          <path
            d="M4.98 1a.5.5 0 0 0-.39.188L1.54 5H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0A.5.5 0 0 1 10 5h4.46l-3.05-3.812A.5.5 0 0 0 11.02 1H4.98zM3.81.563A1.5 1.5 0 0 1 4.98 0h6.04a1.5 1.5 0 0 1 1.17.563l3.7 4.625a.5.5 0 0 1 .106.374l-.39 3.124A1.5 1.5 0 0 1 14.117 10H1.883A1.5 1.5 0 0 1 .394 8.686l-.39-3.124a.5.5 0 0 1 .106-.374L3.81.563zM.125 11.17A.5.5 0 0 1 .5 11H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0 .5.5 0 0 1 .5-.5h5.5a.5.5 0 0 1 .496.562l-.39 3.124A1.5 1.5 0 0 1 14.117 16H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .121-.393z" />
        </svg>
      </h4>
    </a>

    <a class="flex-sm-fill text-sm-center nav-link" href="clasesCursadas.php">
      <h4>CLASES CURSADAS
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-mortarboard"
          viewBox="0 0 16 16">
          <path
            d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5ZM8 8.46 1.758 5.965 8 3.052l6.242 2.913L8 8.46Z" />
          <path
            d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46l-3.892-1.556Z" />
        </svg>
      </h4>
    </a>

    <a class="flex-sm-fill text-sm-center nav-link" href="pagos.php">
      <h4>PAGOS
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-credit-card"
          viewBox="0 0 16 16">
          <path
            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z" />
          <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
        </svg>
      </h4>
    </a>

  </nav>
  </div>
</body>

<br>
<div class="pago">
  <h1>RECIBO DE PAGO</h1>
  <form class="row g-3 needs-validation" novalidate>
    <div>
      <div class="col-md-12 position-relative">
        <label for="validationTooltip01" class="form-label">RECIBO</label>
        <input type="file" class="form-control" id="validationTooltip01" value="..." required>
        <div class="valid-tooltip">
        </div>
      </div>
    </div>
    <div>
      <div class="col-md-12  position-relative">
        <label for="validationTooltip02" class="form-label">DESCRIPCION</label>
        <input type="text" class="form-control" id="validationTooltip02" value="" required>
        <div class="valid-tooltip">
        </div>
      </div>
    </div>
    <div>
      <div class="col-md-12 position-relative">
        <label for="validationTooltip03" class="form-label">MONTO</label>
        <input type="text" class="form-control" id="validationTooltip03" required>
        <div class="invalid-tooltip">
        </div>
      </div>
    </div>
    <div>
    </div>
    <div class="col-12">
      <button type="button" class="btn btn-outline-dark">ENVIAR RECIBO</button>
    </div>
  </form>
</div>




<nav class="nav  flex-column flex-sm-row navbar-dark bg-dark">
  <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="index.php">
    <h4>INICIO
      <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-house-down-fill"
        viewBox="0 0 16 16">
        <path
          d="M12.5 9a3.5 3.5 0 1 1 0 7 3.5 3.5 0 0 1 0-7Zm.354 5.854 1.5-1.5a.5.5 0 0 0-.708-.707l-.646.646V10.5a.5.5 0 0 0-1 0v2.793l-.646-.646a.5.5 0 0 0-.708.707l1.5 1.5a.5.5 0 0 0 .708 0Z" />
        <path
          d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z" />
        <path d="m8 3.293 4.712 4.712A4.5 4.5 0 0 0 8.758 15H3.5A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z" />
      </svg>
    </h4>
  </a>

  <a class="flex-sm-fill text-sm-center nav-link" href="informacion.php">
    <h4>INFORMACION
      <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-inboxes-fill"
        viewBox="0 0 16 16">
        <path
          d="M4.98 1a.5.5 0 0 0-.39.188L1.54 5H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0A.5.5 0 0 1 10 5h4.46l-3.05-3.812A.5.5 0 0 0 11.02 1H4.98zM3.81.563A1.5 1.5 0 0 1 4.98 0h6.04a1.5 1.5 0 0 1 1.17.563l3.7 4.625a.5.5 0 0 1 .106.374l-.39 3.124A1.5 1.5 0 0 1 14.117 10H1.883A1.5 1.5 0 0 1 .394 8.686l-.39-3.124a.5.5 0 0 1 .106-.374L3.81.563zM.125 11.17A.5.5 0 0 1 .5 11H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0 .5.5 0 0 1 .5-.5h5.5a.5.5 0 0 1 .496.562l-.39 3.124A1.5 1.5 0 0 1 14.117 16H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .121-.393z" />
      </svg>
    </h4>
  </a>


  <a class="flex-sm-fill text-sm-center nav-link" href="clasesCursadas.php">
    <h4>CLASES CURSADAS
      <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-mortarboard"
        viewBox="0 0 16 16">
        <path
          d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5ZM8 8.46 1.758 5.965 8 3.052l6.242 2.913L8 8.46Z" />
        <path
          d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46l-3.892-1.556Z" />
      </svg>
    </h4>
  </a>

  <a class="flex-sm-fill text-sm-center nav-link" href="pagos.php">
    <h4>PAGOS
      <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-credit-card"
        viewBox="0 0 16 16">
        <path
          d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z" />
        <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
      </svg>
    </h4>
  </a>

</nav>

<!-- Footer inicio de pie de pajina  -->
<!-- Footer inicio de pie de pajina  -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted" style="background-color: #282d32;">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-top">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Conéctate con nosotros en las redes sociales:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="https://www.facebook.com/unisanmiguel" class="me-5 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://www.instagram.com/usmah.eduhn/" class="me-5 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://api.whatsapp.com/send?phone=%2B50431489225&data=ARDUMFwWkpcEFPnF1XOZ0FCxRGvZ1nPnxj4_AijjC_GdHNVLfpI4L8VDA5HTZyQF8aRByduj_6-h1JZ25jFbXcF8aRGjWhq0RPy932TymSSKGdIIzeM8rJln8Islfsbgqna130mPP2JFT4B6n3wKQlAzdg&source=FB_Page&app=facebook&entry_point=page_cta&fbclid=IwAR3ewNkzGTkYexVWwHSRGIPhU9AapLCgckr86q_5eemFTBeZ_nJhewqVCxw"
        class="me-4 text-reset">
        <i class="fab fa-whatsapp"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-1 col-xl-4 mx-auto mb-2">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-graduation-cap me-3"></i>USMAH
          </h6>
        </div>
        <!-- Grid column -->
        <div class="col-md-2 col-lg-1 col-xl-4 mx-auto mb-2">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            TELEFONO: +504 3148-9225
          </h6>
        </div>
        <!-- Grid column -->
        <div class="col-md-2 col-lg-1 col-xl-3 mx-auto mb-2">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            GRUPO PROGRAMACION WEB II
          </h6>
        </div>
      </div>
    </div>
    <!-- Grid column -->
  </section>
</footer>
<!-- Grid container -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>