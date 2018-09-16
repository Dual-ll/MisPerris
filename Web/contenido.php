<?php session_start();
if (!isset($_SESSION['usuario'])) {
	header('Location: login.php');
} else{
	$usuario=$_SESSION["usuario"];
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!--        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/lightbox.min.css">
        <title>Mis Perris Web</title>
    </head>
    <?php
    include_once './menu.php';
    ?>
    <body>
        
        <section>
            <div>
                <center>
                    <div id="carouselReubicados" class="carousel slide" data-ride="carousel" id="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselReubicados" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselReubicados" data-slide-to="1"></li>
                            <li data-target="#carouselReubicados" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block img-thumbnail" src="img/Apolo.jpg" alt="Apolo" id="imgcarousel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Apolo</h5>
                                    <p>Su nueva familia está muy feliz, y comenta "le encantan los viajes en auto".</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-thumbnail" src="img/Duque.jpg" alt="Duque" id="imgcarousel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Duque</h5>
                                    <p>Sus nuevos padres: "Siempre quisimos un acompañante para nuestros viajes, y con Duque tenemos eso y mas".</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-thumbnail" src="img/Tom.jpg" alt="Tom" id="imgcarousel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Tom</h5>
                                    <p>La familia que lo reubicó: "Es el perfecto acompañante para nuestra hija, no podriamos estar mas felices".</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselReubicados" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselReubicados" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Siguiente</span>
                        </a>
                    </div>
                </center>
            </div>
        </section>
        <br>
        <br>
        <br>
        <div id="contenedort1" >
            <div id="izquierda" >+56 9 98765431</div>
            <div id="centro">Rescate y adopcion de perros callejeros</div>
            <div id="derecha">
                <img src="img/icono_redondo_fb-01.png" class="icons">
                <img src="img/google.png" class="icons">
                <img src="img/instagram.png" class="icons">
                <img src="img/icono-redondo-correo-01.png" class="icons">
            </div>
        </div>
        <br>
        <br>
        <br>
        <section class="colorfondo2">
            <br>
            <br>
            <br>
            <center>
                <div id="contenedor2">
                    <div class="C">
                        <h1>RESCATE</h1>
                        <article>
                            <p>ETAPA UNO</p>
                            <br>
                            <hr class="hr1">
                            <br>
                            <samp>Rescatamos a los perros en situación de peligro y/o abandono. Los rehabilitamos y los<br>
                                preparamos para buscarles un hogar.
                                <br>
                                <br>
                                <br>
                                <img src="img/rescate.jpg" class="imagena shadow p-2 mb-5 rounded">
                            </samp>
                        </article>
                    </div>
                    <div class="D">
                        <img src="img/crowfunding.jpg" class="imagenb shadow p-2 mb-5 rounded">
                        <h1>CROWFUNDING</h1>
                        <article>
                            <p>FINANCIAMIENTO</p>
                            <br>
                            <hr class="hr2">
                            <br>
                            <samp>
                                Sigue nuestras redes sociales para informarte acerca de las diversas campañas y <br>
                                actividades que realizamos para obtener financiamiento para seguir ayudando.
                                <br>
                                <br>
                                <button type="button" id="botonC">CAMPAÑAS</button>
                            </samp>
                        </article>
                    </div>
                </div>
            </center>
            <br>
            <br>
            <br>
        </section>
        <div class="container galeria">
            <h1 id="titulogaleria">Perros rescatados</h1>
            <articles class="row" id="subt">

                <article class="col-md-3">
                    <a href="img/Bigotes.jpg" data-lightbox="example-set" data-title="Adulto, 12kg, muy juguetón.">
                        <img src="img/Bigotes_tn.jpg" alt="Bigotes" class="img-thumbnail rounded-circle shadow-lg" id="fotoR"></a>
                    <p id="subtImg">Bigotes</p>
                </article>

                <article class="col-md-3">
                    <a href="img/Chocolate.jpg" data-lightbox="example-set" data-title="Adulto, 18kg, muy amigable y dócil.">
                        <img src="img/Chocolate_tn.jpg" alt="Chocolate" class="img-thumbnail rounded-circle shadow-lg" id="fotoR"></a>
                    <p id="subtImg">Chocolate</p>
                </article>

                <article class="col-md-3">
                    <a href="img/Luna.jpg" data-lightbox="example-set" data-title="Cachorra, 3kg, inquieta y juguetona.">
                        <img src="img/Luna_tn.jpg" alt="Luna" class="img-thumbnail rounded-circle shadow-lg" id="fotoR"></a>
                    <p id="subtImg">Luna</p>

                </article>
                <article class="col-md-3">
                    <a href="img/Maya.jpg" data-lightbox="example-set" data-title="Cachorra, 4kg, tranquila y dócil.">
                        <img src="img/Maya_tn.jpg" alt="Maya" class="img-thumbnail rounded-circle shadow-lg" id="fotoR"></a>
                    <p id="subtImg">Maya</p>
                </article>

                <article class="col-md-3">
                    <a href="img/Oso.jpg" data-lightbox="example-set" data-title="Cachorro, 6kg, juguetón y activo.">
                        <img src="img/Oso_tn.jpg" alt="Oso" class="img-thumbnail rounded-circle shadow-lg" id="fotoR"></a>
                    <p id="subtImg">Oso</p>
                </article>

                <article class="col-md-3">
                    <a href="img/Pexel.jpg" data-lightbox="example-set" data-title="Cachorro, 3kg, activo y muy sociable.">
                        <img src="img/Pexel_tn.jpg" alt="Pexel" class="img-thumbnail rounded-circle shadow-lg" id="fotoR"></a>
                    <p id="subtImg">Pexel</p>
                </article>

                <article class="col-md-3">
                    <a href="img/Wifi.jpg" data-lightbox="example-set" data-title="Adulto, 7kg, tranquilo y regalón.">
                        <img src="img/Wifi_tn.jpg" alt="Wifi" class="img-thumbnail rounded-circle shadow-lg" id="fotoR"></a>
                    <p id="subtImg">Wifi</p>
                </article>

            </articles>
        </div>
        <footer>
            <br>
            <br>
            <div id="footP">
                <div id="footH">Desarrollo Web y Mobile</div> 
                <div id="footH">2018 copyright &copy; DUOC</div>
            </div>
            <br> 
        </footer>
        <script src="js/lightbox.min.js"></script>
        <script>
            lightbox.option({
                'albumLabel': "Imagen %1 de %2"
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>