<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
                  <meta name="viewport" content="initial-scale=1, maximum-scale=1" >
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<link rel="stylesheet" href="style_b.css">


  <title>Pizza bootstrap 4</title>
</head>
<body>





<!-- HEADER -->

  <header class="bg-header">
    <div class="container-fluid">
      <div class="row">

        <div class="col-12 col-md-3 "> <!-- logo?-->
          <a href="/" class="nav-link">
            <img src="images/ph.png" class="img-fluid" alt="pizza_logo" >
          </a>
        </div>

        <div class="col-md-1">

        </div>

        <div class="col-12 col-md-8 align-self-center">
          <ul class="nav justify-content-end">
            <li class="nav-item">
              <a href="" class="nav-link"> INICIO </a>
            </li>
            <li class="nav-item">
              <a href="#l_nosotros" class="nav-link" > NOSOTROS </a>
            </li>
            <li class="nav-item">
              <a href="#l_menu" class="nav-link"> MENU </a>
            </li>
            <li class="nav-item">
              <a href="#l_sucursales" class="nav-link"> CONTACTO </a>
            </li>
          </ul>
        </div>

      </div>
    </div> <!-- container end -->
  </header>








        <!-- BANNER -->

  <div class="container-fluid">
    <div class="row">
      <div class="col-12 no-padding">
        <img src="images/banner1.jpg" alt="pizza_banner" class="img-fluid">
      </div>
    </div>
  </div>










<!-- BODY INFO-->

<div class="container-fluid">
  <div class="row body-info">
    <div class="col-md-5 align-self-center">
      <br>
      <h2 id="l_nosotros">TENEMOS LA MEJOR PIZZA VEGANA</h2><br>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem iste quisquam, distinctio in nam accusantium deserunt veniam culpa? Voluptas, reiciendis. <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam quas, repellat. Recusandae at repellat quia eveniet est repudiandae iure deserunt.</p>
    </div>

    <div class="col-md-7 justify-content-end" align="right">
      <img src="images/vegan-pizza.jpg" alt="pizza_vegana" width="100%">
    </div>
  </div>

</div> <!-- container end -->










    <!-- MENU ad a peli carousel ,, slides -->


<div align="center" class="">
  <p id="l_menu"><h3>NUESTRO MENU!</h3></p><br>
</div>


<div class="container-fluid">
  <div class="row">

    <div class="col-md-4">
      <img src="images/big_pizza.jpg" alt="">
      <h4>Super Pizza Saludable</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates aut eligendi adipisci veniam, <br> <strong>COMBO #1:</strong> <br>totam harum eum nesciunt incidunt doloremque ad!</p><br>
    </div>

    <div class="col-md-4">
      <img src="images/pizza1.jpg" alt="">
      <h4>Mega Pizza Light</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates aut eligendi adipisci veniam,<br> <strong>COMBO #2:</strong> <br>totam harum eum nesciunt incidunt doloremque ad!</p><br>
    </div>

    <div class="col-md-4">
      <img src="images/newPizza.jpg" alt="">
      <h4>Pizza Gluten free!</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates aut eligendi adipisci veniam, <br> <strong>COMBO #3:</strong> <br>totam harum eum nesciunt incidunt doloremque ad!</p><br>
    </div>

  </div>
</div> <!-- container end -->
<br>










<!-- SUCURSALES ad a peli carousel ,, slides -->


<div align="center" class="">
  <p id="l_menu"><h3>NUESTRAS SUCURSALES!</h3></p><br>
</div>

<div class="container-fluid">
  <div class="row" id="l_sucursales">
    <div class="col-12 col-md-6">
      <button type="button" onclick="showGalerias()" class="btn btn-outline-primary">GALERIAS</button>
      <p>DIRECCION: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores eveniet veritatis porro obcaecati. Maiores, et.</p>

      <button type="button" onclick="showMultiplaza()" class="btn btn-outline-primary">MULTIPLAZA</button>
      <p>DIRECCION: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores eveniet veritatis porro obcaecati. Maiores, et.</p>

      <button type="button" onclick="showCentroH()" class="btn btn-outline-primary">CENTRO HISTORICO</button>
      <p>DIRECCION: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores eveniet veritatis porro obcaecati. Maiores, et.</p>
    </div>

    <div class="col-12 col-md-6">
            <h4 id="name_label"></h4>
      <div id="map-container"
      class="map-container shadow-sm p-3 mb-5 rounded" style="height: 400px;">

      </div>
    </div>

  </div>
</div>
<br>







                            <!--  REGISTRO  -->


<div class="container">

<p align="center" class="texto2">REGISTRATE PARA RECIBIR MAS NOTICIAS?</p> <br>

  <form class="" action="index.html" method="post">
    <div class="form-row">
      <div class="col-12 col-md-6">
        <input type="text" class="form-control" name="nombre" placeholder="NOMBRE:" value="">
      </div>
      <div class="col-12 col-md-6">
        <input type="text" class="form-control" name="apellido" placeholder="APELLIDO:" value="">
      </div>

<br>
<br>
      <div class="col-12 col-md-6">
        <input type="text" class="form-control" name="pais" placeholder="PAIS:" value="">
      </div>
      <div class="col-12 col-md-6">
        <input type="number" class="form-control" name="edad" placeholder="EDAD:" value="">
      </div>

      <div class="form-group row">
          <label for="colFormLabel" class="col-form-label col-12 texto">Email</label>
          <div class="col-sm-10">
                  <input type="email" class="form-control" name="mail" id="colFormLabel" placeholder="you@mail.com">
                </div>
      </div>

    </div>  <!-- ROW end  -->
    <input type="checkbox" id="check_accept" class="form-check-input" name="" value="">
    <label for="check_accept" class="form-check-label texto">Acepto los terminos y condiciones</label>
    <br>
    <br>
    <button type="button" class="btn btn-outline-primary texto" name="button"
    data-toggle="modal" data-target="#miModal">REGISTRATE</button>
  </form>
</div>  <!-- CONTAINER END -->
<br>
<br>






<!-- MODAL -->

<div class="modal fade" id="miModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Noticias de Matrix 4!.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          &times;
        </button>
      </div>

      <div class="modal-body">
        <p><h4>Te has registrado exitosamente</h4></p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div>                        <!-- MODAL END  -->




<!-- AGREGAR img-fluid a las imagenes -->



</script>
  <script src="js_b.js" charset="utf-8"></script>
<script src="https://maps.google.com/maps/api/js">

</script>
</body>
</html>
