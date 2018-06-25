<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Presupuesto</title>

    <link rel="stylesheet" href="css/styles.css">

    <script type="text/javascript" src="js/Html2Canvas0.4.1.js"></script>
    <script type="text/javascript" src="js/jspdf.debug.js"></script>

</head>
<?php

$Fecha = $_POST["Fecha"];
$NombreCliente = $_POST["NC"];
$NombreProyecto = $_POST["NP"];
$NombreDatoTrabajo = $_POST["NDT"];
$DatoTrabajo = $_POST["DT"];
$InfoAdicional = $_POST["IA"];
$BalanceTotal = $_POST["BT"];

?>

<body>
    <!--
        El header se divide en tres partes:
        • #CodBar: Código de barra.
        • #Tit: Título.
        • #ConSide: Zona de Contacto.
    --->

    <header>
        <div id="CodBar">
            <aside id="img"><img src="image/220px-EAN13.png" alt="Codigo de Barras" class="img1"></aside>
        </div>

        <div id="Tit">
            <h2>Presupuesto</h2>
            <!---F=Fecha-->
            <p>FECHA: <span id="Fecha"><?php echo "{$Fecha}"?></span></p>
        </div>

        <div id="ConSide">

            <div id="C1">
                <aside><img src="image/tlf.png" alt="" style="width: 7%;"></aside><p>+58-0414-155-74-01</p>

            </div>

            <div id="C2">
                <aside><img src="image/mundo.png" alt="" style="width: 12%;"></aside>
                <p>https://soycreactivo.com/</p>
            </div>
            <div id="Mail">
                <aside><img src="image/buzon.png" alt="" style="width: 16%;"></aside>
                <p>proyectoscreactiva@gmail.com</p>
            </div>

        </div>
    </header>

    <!--
        El content contiene estos elementos:
        • IC: Información del cliente
        • DC: Data central TABLA
    --->

    <content>
        <!--
            Información del Cliente Area
        --->
        <div id="IC">
                <div id="IC1">
                    <h3><span class="N">Información para el cliente</span></h3>
                    <!--Nombre De Cliente--->
                    <h2 id="Name"><?php echo "{$NombreCliente}"?></h2>
                    <!--Nombre de Proyecto--->
                    <h2 id="NP"><?php echo"{$NombreProyecto}"?></h2>
                </div>

                <!--Logo Seccion Información del cliente--->
                <div id="ICL">
                    <aside><img src="image/CreActivaLogo.png" alt="LogoCreactiva"></aside>
                </div>
        </div>


        <!--
            Data Central Area
        -->
        <!--
        #S = Separador /*width*/
        #C = Contenedor dentro /*padding*/
        --->
        <div id="Title">
           <div id="S"></div>
            <div id="TitleT1">
                <div id="C">
                    <h2 class="N">Nombre de Trabajo</h2>
                </div>
            </div>


            <div id="TitleT2">
                <div id="C">
                    <h2 class="N">Descripción de Trabajo</h2>
                </div>
            </div>
            <div id="S"></div>
        </div>

        <div id="DC">
           <div id="S"></div>
            <div id="NDT">
                <div id="C">
                    <h2><span class="N">Nombre: </span><?php echo"{$NombreDatoTrabajo}"?></h2>
                </div>
            </div>


            <div id="DT">
                <div id="C">
                    <h2><?php echo"{$DatoTrabajo}"?>
                    </h2>
                </div>
            </div>
            <div id="S"></div>
        </div>

        <div id="DC">
           <div id="S"></div>
            <div id="NDT">
                <div id="C">
                    <h2><span class="N">Nombre: </span><?php echo"{$NombreDatoTrabajo}"?></h2>
                </div>
            </div>


            <div id="DT">
                <div id="C">
                    <h2><?php echo"{$DatoTrabajo}"?>
                    </h2>
                </div>
            </div>
            <div id="S"></div>
        </div>

        <div id="DC">
           <div id="S"></div>
            <div id="NDT">
                <div id="C">
                    <h2><span class="N">Nombre: </span><?php echo"{$NombreDatoTrabajo}"?></h2>
                </div>
            </div>


            <div id="DT">
                <div id="C">
                    <h2><?php echo"{$DatoTrabajo}"?>
                    </h2>
                </div>
            </div>
            <div id="S"></div>
        </div>

        <div id="DC">
           <div id="S"></div>
            <div id="NDT">
                <div id="C">
                    <h2><span class="N">Nombre: </span><?php echo"{$NombreDatoTrabajo}"?></h2>
                </div>
            </div>


            <div id="DT">
                <div id="C">
                    <h2><?php echo"{$DatoTrabajo}"?>
                    </h2>
                </div>
            </div>
            <div id="S"></div>
        </div>

        <div id="DC">
           <div id="S"></div>
            <div id="NDT">
                <div id="C">
                    <h2><span class="N">Nombre: </span><?php echo"{$NombreDatoTrabajo}"?></h2>
                </div>
            </div>


            <div id="DT">
                <div id="C">
                    <h2><?php echo"{$DatoTrabajo}"?> </h2>
                </div>
            </div>
            <div id="S"></div>
        </div>



    </content>

    <!--
        El footer se divide en tres partes:
        • #IA: Información Adicional.
        • .ia.
        • #Mas: Leer Más.
        • #Bal: Balance total area.
    --->

    <footer>
        <div id="IA">
        <h3>Información Adicional</h3>
        <!--6 listas desordenadas--->
        <ul>
           <!--
           ia = información adicional 
           --->
           <!--207 caracteres--->
            <li class="ia"><?php echo "{$InfoAdicional}"?></li>
            <li class="ia"><?php echo "{$InfoAdicional}"?></li>
        </ul>
        </div>
        <div id="Mas">
            <p>Puedes contactarnos a través de <span class="N">proyectoscreactiva@gmail.com</span></p>
        </div>
        <!---
           BT = Balance total
        --->
          
        <div id="Bal">
            <h2>Balance Total: <span class="BT"><?php echo "{$BalanceTotal}"?></span></h2>
        </div>
    </footer>
    <script type="text/javascript" src="js/impresion.js"></script>
</body>

</html>