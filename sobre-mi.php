<?php
$pg = "sobre-mi";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mi</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/icono.png">


</head>

<body id="sobre-mi">
    <header class="container">
        <?php include_once("menu.php"); ?>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-12 mt-4">
                    <h1>Sobre mi</h1>
                    <p class="pb-sm-5">Soy una persona responsable, dinámica y creativa, me adapto fácilmente al cambio
                        y me
                        apasiona trabajar en equipo. Alta eficiencia en condiciones de alta presión, con iniciativa para
                        resolver problemas eficazmente y lograr metas y objetivos propuestos por la empresa.</p>
                    <a href="contacto.php" class="btn btn-rojo">Enviar mensaje</a>
                </div>
                <div class="col-sm-3 col-12 mt-4 offset-sm-2 pb-5">
                    <img src="images/Foto CV  (2).jpg" alt="Federico Coronel Alegre" title="Federico Coronel Alegre" class="foto-perfil">
                </div>
            </div>
        </div>
        <section id="stack-tecnologico" class="pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="my-sm-5 text-white">Stack tecnologico</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-6  my-sm-2 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Javascript</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="images/javascript.jpeg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 my-sm-2 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>PHP</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="images/php.jpg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 my-sm-2 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>HTML5</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="images/html5.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 my-sm-2 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>React.js</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="images/reacts.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 my-sm-2 text-center">
                        <div class="px-0 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>jQuery</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="images/jquery.jpg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 my-sm-2 text-center">
                        <div class="px-0 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Bootstrap</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="images/bootstrap.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 my-sm-2 text-center">
                        <div class="px-0 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Laravel</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="images/laravel.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 my-sm-2 text-center">
                        <div class="px-0 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>mySQL</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="images/mySql.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 my-sm-2 text-center">
                        <div class="px-0 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>CSS</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="images/css.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 my-sm-2 text-center">
                        <div class="px-0 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Git</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="images/git.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 my-sm-2 text-center">
                        <div class="px-0 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Apache</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="images/apache.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 my-sm-2 text-center">
                        <div class="px-0 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Mercado Pago</h3>
                            <img class="img-fluid d-block mx-auto" width="60" src="images/mercado pago.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="experiencia" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-briefcase"></i>Experiencia Laboral</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded">
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="images/banco santander.png" class="img-fluid baw" title="bancosantander">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Oficial Semi Senior Empresas</h3>
                            <h4>Banco Santander S.A.</h4>
                            <h5>Noviembre 2011 - Septiembre 2019</h5>
                            <p>Generar y desarrollar la cartera de clientes del segmento empresas para garantizar y
                                contribuir al cumplimiento de los objetivos comerciales. Lograr el breakeven en menos de
                                un año colocando a la sucursal en primeros puestos dentro del ranking junto a otras
                                sucursales. Gestión de una cartera con más de setenta empresas, dentro de las cuales
                                veinte pertenecían al segmento de empresas con una facturación de más de 60MM y varias
                                en banca privada.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="images/banco santander.png" class="img-fluid baw" title="bancosantander">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Cajero Operativo Senior</h3>
                            <h4>Banco Santander S.A.</h4>
                            <h5>Noviembre 2011 - Septiembre 2019</h5>
                            <p>Reemplazo directo del tesorero de la Sucursal. Atención al cliente y sus operatorias.
                                Arqueo de caja, operaciones de compra y venta de moneda extranjera: Pesos, dólares y
                                euros. Manejo y procesamiento de valores (clearing): Cheques, plazos fijos, FCI.
                                Operaciones de comercio exterior y segmento Pyme y empresas. Apertura, balanceo y
                                control del tesoro. Envío y recepción de remesas. Balanceo de terminales ATM y
                                autoservicio..</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="images/banco supervielle.jfif" class="img-fluid baw" title="bancosantander">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Oficial Semi Senior Empresas</h3>
                            <h4>Banco Supervielle S.A.</h4>
                            <h5>Octubre 2011 - Noviembre 2011</h5>
                            <p>Gestionar la cartera de clientes seleccionada para ofrecer los productos financieros:
                                Tarjetas de crédito, préstamos personales y seguros de vivienda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="images/parabrisas7.jfif" class="img-fluid baw" title="bancosantander">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Administrativo contable</h3>
                            <h4>Parabrisas 4 S.R.L.</h4>
                            <h5>Julio 2009 - Diciembre 2010</h5>
                            <p>Tareas administrativas contables y de gestión de RRHH. Atención a proveedores y control
                                de stock, pedidos de materiales y liquidación de pagos. Arqueo de caja y manejo de
                                valores. Contacto permanente con bancos y administraciones públicas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="images/banco galicia.png" class="img-fluid baw" title="bancosantander">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Cajero</h3>
                            <h4>Banco Galicia S.A.</h4>
                            <h5>Agosto 2007 - Julio 2008</h5>
                            <p>Atención al cliente. Cobros, pagos y operaciones de moneda extranjera. Ingreso y egreso
                                de efectivo. Manejo de valores, clearing, arqueo de caja Balanceo de terminales ATM y
                                autoservicio. Presupuesto de ventas de seguro de incendios y cartera. Segmento
                                individuos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="images/credil.png" class="img-fluid baw" title="bancosantander">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Responsable de Sucursal</h3>
                            <h4>Credil S.R.L.</h4>
                            <h5>Julio 2005 - Julio 2007</h5>
                            <p>Atención al cliente. Cobros, pagos y operaciones de moneda extranjera. Ingreso y egreso
                                de efectivo. Manejo de valores, clearing, arqueo de caja. Balanceo de terminales ATM y
                                autoservicio. Presupuesto.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="images/coto.jfif" class="img-fluid baw" title="bancosantander">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Cajero</h3>
                            <h4>COTO C.I.C.S.A</h4>
                            <h5>Abril 2003 - Diciembre 2003</h5>
                            <p>Recibir y registrar pagos en efectivo. Manejo de valores: cheque, pesos y dólares,
                                tarjetas de crédito/débito. Entregar recibos/créditos. Emitir cupones y procesar
                                tarjetas de fidelidad.</p>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <section id="formacion" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fa fa-graduation-cap"></i>Formacion academica</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded p-1">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/untref.png" class="img-fluid baw" title="untrefvirtual">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Licenciatura en Sociologia</h3>
                            <h4>Universidad Nacional Tres de Febrero</h4>
                            <h5>2020 - Presente</h5>
                            <p>https://www.untrefvirtual.edu.ar/</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/liceo.png" class="img-fluid baw" title="untrefvirtual">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Bachillerato Or. Empresarial</h3>
                            <h4>Universidad Nacional de La Plata</h4>
                            <h5>1997 - 2001 - Presente</h5>
                            <p>https://www.lvm.unlp.edu.ar/</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="formacion" class="container mb-5">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="col-12 pt-5 pb-4"></i>Cursos de Desarrollo Profesional</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded p-1">
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/depc.png" class="img-fluid baw" title="depcsuite">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Programacion Full Stack</h3>
                            <h4>DePC Suite</h4>
                            <p>https://depcsuite.com/</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="idiomas">
            <div class="container">
                <div class="row py-5 mx-0">
                    <div class="col-sm-6 col-12 pb-3 pb-sm-0">
                        <div class="row mr-sm-1 bg-white card-idioma shadow me-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>IDIOMAS</h2>
                                <ul>
                                    <li>Español - Nativo</li>
                                    <li>Ingles - Intermedio</li>
                                    <li>Portugues - Basico</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="row ml-sm-2 bg-white card-idioma shadow ms-sm-1">
                            <div class="col-4 text-center card">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>HOBBIES</h2>
                                <ul>
                                    <li>Deportes</li>
                                    <li>Actividades al aire libre</li>
                                    <li>Viajar</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <footer class="container mt-auto pb-4">
        <div class="row">
            <div class="col-3">
                <a href="http://github.com" target="_blank" title="Github">
                    <i class="fab fa-github"></i></a>

                <a href="https://www.linkedin.com/in/federico-coronel-alegre/" target="_blank" title="Linkedin">
                    <i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-3">
                Sponsor <a href="http://depcsuite.com" target="_blank" title="DEPCSUITE">DePC Suite</a>
            </div>
            <div class="col-3">
                <a href="mailto:">fcoronel1510@gmail.com</a>
            </div>

        </div>


    </footer>
    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=541156104668" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
    </div>

</body>

</html>