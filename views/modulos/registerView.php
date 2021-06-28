<?php
use App\Controllers\LoginController;
$login = new LoginController();
$pais = isset($_GET["pais"]) ? $_GET["pais"] : 'colombia';

if (isset($_SESSION["usuario_cedula".APP_UNIQUE_KEY])){
    header("Location:index.php?&action=dashboard");  
 } 
 
?> 
    
    <div class="main-container main-background" id="app" >
      <section >
        <div class="container">
          <div class="row flex-md-row card card-lg border-0">
            <div class="col-12 col-md-6 card-body" style="padding: 1rem !important">
              <div class="row">
              <div class="col-12 justify-content-center text-center">
                <h5 class="primary-color">Estás participando para la promoción de</h5>
              </div>
              
              <div class="col-12 justify-content-center text-center mt-2">
              <?php 
                  $flag = $login->getFlag($pais);
                  echo '<img alt="Image" src="assets/img/'.$flag.'" class="w-25 zoom mb-3" />';
                ?>
              </div>
               
              
              </div>
              
              <div class="row justify-content-center mb-2">
                <div class="col-12 col-lg-9">
                  <div class="mb-1">
                    <span class="text-uppercase primary-color font-weight-bold">Informacion personal</span>
                  </div>
                  <!--form-->
                  <form @submit.prevent="addNewCliente()" method="POST">
                    <div>

                      <div class="form-group">
                        <label for="nombre">Nombre Completo</label>
                        <input type="text" v-model="cliente.nombres" class="form-control form-control-sm text-uppercase" id="nombre" placeholder="Ingrese su nombre y apellido" maxlength="200" required>
                      </div>
                      
                      <div class="form-group">
                        <label for="cedula">Documento de Identidad</label>
                        <input type="text" v-model="cliente.cedula" class="form-control form-control-sm" id="cedula" placeholder="Ingrese su numero de documento" pattern="[0-9]+" maxlength="13" required>
                      </div>
                      <div class="form-group">
                        <label for="cedula">Confirmar Documento de Identidad</label>
                        <input type="text" v-model="cliente.confcedula" class="form-control form-control-sm" id="confcedula" placeholder="Confirme su Documento de Identidad" pattern="[0-9]+" maxlength="13" required>
                      </div>

                      <div class="mb-1">
                        <span class="text-uppercase primary-color font-weight-bold">Contacto</span>
                      </div>

                      <div class="form-group">
                        <label for="telefono">Teléfono celular</label>
                        <input type="text" v-model="cliente.telefono" class="form-control form-control-sm" id="telefono" placeholder="Ingrese su numero de Teléfono" pattern="[0-9]+" maxlength="10" required>
                      </div>
                      <div class="form-group">
                        <label for="telefono">Confirmar Teléfono celular</label>
                        <input type="text" v-model="cliente.conftelefono" class="form-control form-control-sm" id="conftelefono" placeholder="Confirme su numero de Teléfono" pattern="[0-9]+" maxlength="10" required>
                      </div>

                      <div class="form-group">
                        <label for="email">Correo Electrónico (Opcional)</label>
                        <input type="email" v-model="cliente.email" class="form-control form-control-sm" id="email" placeholder="Indique su email" maxlength="50">
                      </div>
                      <div class="">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" v-model="cliente.terminos" class="custom-control-input" value="agree" name="agree-terms" id="check-agree">
                          <label class="custom-control-label text-justify small" for="check-agree">He leído y aceptado los Términos y condiciones, y autorizo el tratamiento de mis datos personales para participar en la Actividad promocional.</a>
                          </label>
                        </div>
                      </div>

                      <button type="submit" class="btn btn-success btn-block primary-color-background">Ingresar</button>
                    </div>
                  </form>

                  <div class="text-center mt-3 mb-3">
                      <span>¿Ya tienes una cuenta? <a class="primary-color" href="?action=bienvenidos">Ingresa aquí</a>
                      </span>
                  </div>
                </div>
              </div>
            </div>
            <!--end of col-->
            <div class="col-12 col-md-6 card-body pt-0" style="background-color: #01548a">
              <div class="col-12 float-right pr-2">
                <a href="?action=bienvenidos" class="float-right text-white" aria-hidden="true" style="font-size:2rem">&times;</a>
              </div>
              <div style="height: 100%">
                <div class="text-center">
                  <h3 class="h3 mb-2 text-uppercase" style="font-weight: bold !important; color: #ffd025">Términos &amp; Condiciones</h3>
                  
                </div>
               
                <div class="card card-sm shadow text-justify border-0" style="height: 80%;">
                  <div class="card-body terms-box" style="color: white;background: #01548a;">
                    <p class="text-justify">
                        <p><strong><u>T&Eacute;RMINOS Y CONDICIONES</u></strong></p>
                        <p>Desde el quince (15) de Febrero - hasta el quince (15) de marzo del 2021 PRODUCTOS RAMO S.A.S. (en adelante &ldquo;Ramo&rdquo;), realizar&aacute; la actividad promocional que se describe a continuaci&oacute;n denominada:<br /> <strong>&ldquo;La diversi&oacute;n no llega sola. Gana con Ramo&rdquo; (en adelante &ldquo;La Actividad&rdquo;)</strong></p>
                        <ol>
                        <li><strong><u>Participantes: </u></strong></li>
                        </ol>
                        <p>Podr&aacute;n participar en la Actividad personas mayores de 18 a&ntilde;os portadoras de c&eacute;dula de ciudadan&iacute;a o extranjer&iacute;a, que cumplan con los requisitos descritos en los presentes t&eacute;rminos y condiciones, los cuales los participantes manifiesten haber le&iacute;do, comprendido y aceptado. Los empleados de Productos Ramo S.A.S. sus c&oacute;nyuges y familiares hasta el segundo grado de consanguinidad, segundo de afinidad y &uacute;nico civil no podr&aacute;n participar de La Actividad.</p>
                        <ol>
                        <li><strong><u>Mec&aacute;nica de la Actividad: </u></strong></li>
                        </ol>
                        <p>Para participar deber&aacute;s:</p>
                        <ol>
                        <li>Con la apertura de la cuenta, y/o recibo del premio todos los participantes declaran aceptar y conocer los t&eacute;rminos y condiciones.</li>
                        <li>Comprar cualquiera de los Productos Ramo, entre el 15 de febrero - hasta el 15 de marzo de 2021.</li>
                        <li>Tomar una foto entre el 15 de febrero &ndash; hasta el 15 de marzo de 2021 de la factura de compra completa y enviarla entre las 10:00 AM, hasta las 08:00 PM de lunes a s&aacute;bado al n&uacute;mero (+57) 3223542797 v&iacute;a WhatsApp. Las facturas que se reciban despu&eacute;s del horario indicado anteriormente se registrar&aacute;n al d&iacute;a siguiente.</li>
                        <li>La informaci&oacute;n del comprador se&ntilde;alada en la factura deber&aacute; coincidir con los datos de la persona quien est&aacute; haciendo el registro de la misma.</li>
                        <li>No podr&aacute;n ser registradas facturas cuyo comprador sea una persona jur&iacute;dica, o persona natural con NIT</li>
                        <li>No&nbsp;se podr&aacute;n acumular puntos con facturas emitidas por Productos Ramo S.A.S. a clientes que siendo personas naturales realizan compras directas para la reventa de productos Ramo en: tiendas, minimercados, y/o supermercados peque&ntilde;os, o cualquier otro establecimiento de comercio.</li>
                        <li>En la foto de la factura enviada se deber&aacute; evidenciar claramente: el NIT y nombre del punto de venta, fecha de la compra, descripci&oacute;n del producto, precio de los productos , valor total de la compra,&nbsp; y la informaci&oacute;n del comprador</li>
                        <li>Adicionalmente y bajo el mismo proceso, el participante deber&aacute; enviar las fotos de los productos comprados v&iacute;a WhatsApp al (+57) 3223542797. Deber&aacute; existir coincidencia entre los productos relacionado en la factura y las fotograf&iacute;as enviadas.</li>
                        <li>Una vez sea validada la factura por nuestro contact center, y la misma sea aceptada, el participante recibir&aacute; del mismo n&uacute;mero de WhatsApp (+57) 3223542797, un link para que proceda con su registro hasta el 15 de marzo de 2021 en la p&aacute;gina web <a href="http://www.xxxxxxxxxx.com">ganaconramo.com</a>, en la cual comenzar&aacute; a acumular puntos de acuerdo al valor de la compra. Una vez inscrito, el participante podr&aacute; continuar inscribiendo facturas hasta el 15 de marzo de 2021, para acumular puntos.</li>
                        <li>En la p&aacute;gina web <a href="http://www.ganaconramo.com">ganaconramo.com</a>, el participante deber&aacute; asignar un usuario y contrase&ntilde;a, la cual es personal e intransferible. El usuario queda relacionado con el n&uacute;mero de c&eacute;dula proporcionado y no podr&aacute; ser modificado.</li>
                        <li>Los participantes en su cuenta podr&aacute;n verificar sus puntos acumulados.</li>
                        <li>Por cada MIL PESOS COP $1,000.oo en compras entre el 15 de febrero - hasta el 15 de marzo de 2021en Productos Ramo, el participante recibir&aacute; UN (1) punto, el cual se ver&aacute; reflejado en la cuenta de cada participante.</li>
                        <li>Desde el momento en que se validen y se acepten las facturas los puntos se podr&aacute;n ver reflejados en la cuenta de cada participante en un tiempo m&aacute;ximo de hasta 48horas, contados desde el momento en el que se confirm&oacute; la validez de las mismas.</li>
                        <li>Cada factura, es &uacute;nica e irrepetible y s&oacute;lo se podr&aacute; registrar una sola vez.</li>
                        <li>Los participantes podr&aacute;n registrar cuantas facturas deseen entre el 15 de febrero - hasta el 15 de marzo de 2021, siempre y cuando se trate de facturas de venta diferentes y cumplan con los requisitos antes se&ntilde;alados.</li>
                        </ol>
                        <p><strong>IMPORTANTE:</strong> Los participantes deber&aacute;n conservar las facturas registradas, dado que su presentaci&oacute;n es requisito para reclamar los premios. Los participantes deber&aacute;n enviar foto de todas las facturas de compra que hayan registrado para acumular puntos dentro de los 8 d&iacute;as calendario al correo electr&oacute;nico <a href="mailto:ganaconramo@gmail.com">ganaconramo@gmail.com</a>, las cuales deben enviarse completas y ser n&iacute;tidas, ya que las mismas son verificadas para garantizar su validez, aquellas facturas cuyos datos no resulten v&aacute;lidos, no ser&aacute;n aceptadas y los puntos acumulados con las mismas ser&aacute;n descontados de la cuenta del participante.</p>
                        <p>&nbsp;</p>
                        <p><strong>Para aquellas compras realizadas en </strong><a href="http://www.tiendaramo.com"><strong>www.</strong><strong>tiendaramo.com</strong></a><strong>, debes seguir el siguiente proceso para registrar las facturas:</strong></p>
                        <p>&nbsp;</p>
                        <ol>
                        <li>Comprar cualquiera de los Productos Ramo, en www.TiendaRamo.com entre el 15 de febrero - hasta el 15 de marzo de 2021.</li>
                        <li>Reg&iacute;strate en la plataforma web <a href="http://www.ganaconramo.com">ganaconramo.com</a>, encontrar&aacute;s un link en la p&aacute;gina de www.TiendaRamo.com que dirigir&aacute; a la plataforma de la actividad. Con la apertura de la cuenta, y/o recibo del premio todos los participantes declaran aceptar y conocer los t&eacute;rminos y condiciones.</li>
                        <li>En la p&aacute;gina web <a href="http://www.ganaconramo.com">ganaconramo.com</a>, el participante deber&aacute; asignar un usuario y contrase&ntilde;a, la cual es personal e intransferible. El usuario queda relacionado con el n&uacute;mero de c&eacute;dula proporcionado y no podr&aacute; ser modificado.</li>
                        <li>Los participantes en su cuenta podr&aacute;n verificar sus puntos acumulados.</li>
                        <li>Las compras realizadas en www.TiendaRamo.com ser&aacute;n computados de forma autom&aacute;tica seg&uacute;n el n&uacute;mero de c&eacute;dula proporcionado al momento de realizar la compra, y los puntos ser&aacute;n acumulados al mismo n&uacute;mero de c&eacute;dula que se encuentre registrado en <a href="http://www.ganaconramo.com">ganaconramo.com</a>. Los puntos se ver&aacute;n reflejados en la cuenta de cada participante en un tiempo m&aacute;ximo de hasta 48 horas, contados desde el momento en el que se confirm&oacute; la validez de la compra.&nbsp;</li>
                        <li>Por cada MIL PESOS COP $1,000.oo en compras entre el 15 de febrero - hasta el 15 de marzo de 2021 en Productos Ramo, el participante recibir&aacute; UN (1) punto, los cuales se podr&aacute;n ver reflejados en la cuenta de cada participante en un tiempo m&aacute;ximo de hasta 48horas, contados desde el momento en el que se confirm&oacute; la validez de la compra.</li>
                        <li>Cada compra en www.TiendaRamo.com, es &uacute;nica e irrepetible y s&oacute;lo se podr&aacute; registrar una sola vez, y se identifica el n&uacute;mero de registro de compra, el cual es &uacute;nico e irrepetible.</li>
                        <li>Los participantes que realicen sus compras en www.TiendaRamo.com podr&aacute;n acumular puntos cuantas veces deseen para participar en la actividad entre el 15 de febrero - hasta el 15 de marzo de 2021, siempre y cuando se cumplan con los requisitos antes se&ntilde;alados.</li>
                        </ol>
                        <p><strong>IMPORTANTE:</strong> Los participantes deber&aacute;n conservar los soportes de compra de www.TiendaRamo.com, dado que su presentaci&oacute;n es requisito para reclamar los premios. Los participantes deber&aacute;n enviar dentro de los 8 d&iacute;as calendario siguientes en el que se les inform&oacute; que son ganadores, foto de todos los soportes de compra que recibieron directamente de www.TiendaRamo.com al correo electr&oacute;nico <a href="mailto:ganaconramo@gmail.com">ganaconramo@gmail.com</a> para que&nbsp; las mismas puedan ser verificadas.</p>
                        <p>&nbsp;</p>
                        <ul>
                        <li><strong><u>Plan de Premios:</u></strong></li>
                        </ul>
                       
                        <p>Indistintamente del lugar de compra de los productos Ramo, los ganadores recibir&aacute;n como premio:</p>
                        <p>&nbsp;</p>
                        <ul>
                        <li>7 consolas Play Station 5, las cuales podr&aacute;n recibir aquellos participantes que ocupen los primeros 7 puestos en acumulaci&oacute;n de puntos, en el ranking de ganadores que ser&aacute; publicado <a href="http://www.ganaconramo.com">ganaconramo.com</a> dentro de los 8 d&iacute;as h&aacute;biles siguientes a la finalizaci&oacute;n de la actividad, es decir m&aacute;s tardar el 25 de marzo de 2021.</li>
                        <li>1095 suscripciones por un mes a: Netflix o Spotify, o bonos cada uno de COP$35.000 de Panamericana. Son en total 1095 bonos dentro de los cuales se encuentran las tres opciones antes se&ntilde;alados. Los participantes que ocupen el puesto 8 hasta el 1095 en acumulaci&oacute;n de puntos, del ranking de ganadores, podr&aacute;n elegir una de las tres opciones antes se&ntilde;aladas. El ranking de ganadores ser&aacute; publicado en <a href="http://www.ganaconramo.com">www.ganaconramo.com</a> dentro de los 8 d&iacute;as h&aacute;biles siguientes a la finalizaci&oacute;n de la actividad, es decir a m&aacute;s tardar el 25 de marzo de 2021.</li>
                        </ul>
                        
                        <p><strong><u>Entrega de los premios. </u></strong></p>
                        <ol start="5">
                        <li><strong>Para la entrega del PlayStation5.</strong></li>
                        </ol>
                        <ul>
                        <li>Se publicar&aacute; el ranking de ganadores en <a href="http://www.ganaconramo.com">ganaconramo.com</a> , dentro de los 8 d&iacute;as h&aacute;biles siguientes a la finalizaci&oacute;n de la actividad, es decir a m&aacute;s tardar el 25 de marzo de 2021. El ranking se publicar&aacute; por un periodo de 30 d&iacute;as h&aacute;biles a partir del 25 de marzo de 2021.</li>
                        <li>Aquellos participantes que ocupen los siete (7) primeros puestos al ser quienes acumularon el mayor n&uacute;mero de puntos, ser&aacute;n contactados telef&oacute;nicamente, v&iacute;a WhatsApp y correo electr&oacute;nico. Se le solicitar&aacute; foto del documento de identidad que concuerde con los datos que fueron registrados en la plataforma <a href="http://www.ganaconramo.com">ganaconramo.com</a> en caso de que no haya conciencia con los datos el premio no ser&aacute; entregado. As&iacute; mismo se le solicitar&aacute; foto de las facturas, tal y como fue se&ntilde;alado previamente, y direcci&oacute;n para el env&iacute;o del premio, la cual no podr&aacute; ser modificada, en caso de que la direcci&oacute;n proporcionada tenga alg&uacute;n error, y el mismo ya haya sido remitido el premio se entender&aacute; entregado, y no podr&aacute; ser remitido nuevamente.</li>
                        <li>El ganador que haya recibido la consola tendr&aacute; un plazo m&aacute;ximo de 3 d&iacute;as calendario para reportar anomal&iacute;as en caso que la misma no haya sido recibida en perfecto estado, para lo cual deber&aacute; comunicarse al (+57) 3223542797, donde le solicitar&aacute;n informaci&oacute;n adicional.</li>
                        <li>La garant&iacute;a de las consolas por problemas t&eacute;cnicos y/o de software deber&aacute; ser gestionada directamente con el fabricante de las mismas. Los datos de contacto para la garant&iacute;a se encontrar&aacute;n al interior del empaque de las consolas.</li>
                        <li>En caso de existir un empate en el ranking, ser&aacute; elegido como ganador aquel participante quien haya realizado primero en el tiempo el registro de las facturas de compra.</li>
                        </ul>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <ol>
                        <li><strong>Para la entrega de los bonos y suscripciones:</strong></li>
                        </ol>
                        <p>Bonos de suscripci&oacute;n por (1) mes a: Netflix o Spotify.</p>
                        <ul>
                        <li>Se publicar&aacute; el ranking de ganadores en <a href="http://www.ganaconramo.com">ganaconramo.com</a> , dentro de los 8 d&iacute;as h&aacute;biles siguientes a la finalizaci&oacute;n de la actividad, es decir m&aacute;s tardar el 25 de marzo de 2021. El ranking se publicar&aacute; por un periodo de 30 d&iacute;as h&aacute;biles a partir del 25 de marzo de 2021.</li>
                        <li>Aquellos participantes que ocupen desde el puesto 8 hasta el puesto 1.095 en el n&uacute;mero de puntos acumulados ser&aacute;n contactados v&iacute;a telef&oacute;nica, WhatsApp o correo electr&oacute;nico.</li>
                        </ul>
                        <p>Se le solicitar&aacute; foto del documento de identidad que concuerde con los datos que fueron registrados en la plataforma <a href="http://www.ganaconramo.com">www.ganaconramo.com</a> en caso de que no haya conciencia con los datos el premio no ser&aacute; entregado. As&iacute; mismo, se le solicitar&aacute; foto de las facturas, tal y como fue se&ntilde;alado previamente, y direcci&oacute;n para el env&iacute;o del premio si as&iacute; lo eligieran, la cual no podr&aacute; ser modificada, en caso de que la direcci&oacute;n proporcionada tenga alg&uacute;n error, y el mismo ya haya sido remitido el premio se entender&aacute; entregado, y no podr&aacute; ser remitido nuevamente.</p>
                        <ul>
                        <li>Los Ganadores podr&aacute;n elegir un &uacute;nico premio entre: una suscripci&oacute;n por un mes a Netflix o Spotify, o un bono de Panamericana por $35.000.</li>
                        </ul>
                        <p>Si eligen el bono Netflix o Spotify, se les enviar&aacute; un pin v&iacute;a correo electr&oacute;nico para que habiliten su cuenta y la disfruten durante (1) mes. Para el caso de los pines Netflix y Spotify, la vigencia es de: (1) mes (30 d&iacute;as) a partir de hacerlo activo en la cuenta del ganador. En caso de que el ganador no cuente con una cuenta Netflix o Spotify, necesariamente deber&aacute; crearla para poder disfrutar el premio, por lo que ser&aacute; su responsabilidad la creaci&oacute;n y uso de la misma.</p>
                        <p>Si eligen el premio bono Panamericana por valor de $35.000, este podr&aacute; ser entregado de forma f&iacute;sica en el domicilio del ganador o de forma digital enviado al correo electr&oacute;nico. Para el caso de los Bonos Panamericana la vigencia es de (1) a&ntilde;o (365 d&iacute;as) a partir del primer momento que el cliente lo reciba.</p>
                        <p>&nbsp;</p>
                        <p>El tiempo de entrega de todos premios es de 30 d&iacute;as contados desde que se realice la notificaci&oacute;n al ganador y se reciban los todos documentos y datos solicitados, los cuales ser&aacute;n se&ntilde;alados m&aacute;s adelante.</p>
                        <p>&nbsp;</p>
                        <p>En caso de que el ganador no pueda ser contactado despu&eacute;s de m&aacute;ximo 3 intentos, es decir en la tercera oportunidad que no se logre contacto telef&oacute;nico con quien sea el ganador, se considerar&aacute; como ganador al participante que ocupo el siguiente puesto en el ranking, y se proceder&aacute; a contactar telef&oacute;nicamente, para realizar la entrega del premio y as&iacute; sucesivamente hasta garantizar que el premio quede en manos del p&uacute;blico.</p>
                        
                        <p>&nbsp;</p>
                        <ol>
                        <li><strong><u>Autorizaci&oacute;n tratamiento de datos personales</u></strong></li>
                        </ol>
                        
                        <p>Los datos personales de los participantes ser&aacute;n recolectados por Productos Ramo S.A.S, y ESTRATEGIA CREATIVA M.S.C S.A y ser&aacute;n Tratados conforme con las normas contenidas en la Ley 1581 de 2012, el Decreto 1377 de 2013 y las normas que la modifiquen, adicionen&nbsp;o complementen.&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>Los datos personales que ser&aacute;n tratados son: aquellos contenidos en las facturas registradas, los suministrados al crear la cuenta para acumular puntos, y los proporcionados para recibir los premios, los cuales son: Nombre completo, c&eacute;dula o documentos de identificaci&oacute;n, tel&eacute;fono, correo electr&oacute;nico, direcci&oacute;n f&iacute;sica para entrega del premio, la cual a su vez deber&aacute; ser compartida con la empresa de mensajer&iacute;a que realice la entrega del mismo.</p>
                        <p>&nbsp;</p>
                        <p>Los Datos Personales son recolectados, almacenados, organizados, usados, circulados, transmitidos, transferidos, actualizados, rectificados, suprimidos, eliminados y gestionados&nbsp;de&nbsp;acuerdo a la finalidad o finalidades que tenga cada tipo de Tratamiento.&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>Las finalidades del&nbsp;tratamiento de datos personales&nbsp;realizado son:&nbsp;&nbsp;</p>
                        <ol>
                        <li>Notificar a&nbsp;los ganadores.&nbsp;</li>
                        <li>Env&iacute;o de los premios en aquellos casos que aplique.</li>
                        <li>Para informarlos sobre futuras actividades y/o promociones que est&eacute; realizando PRODUCTOS RAMO S.A.S. en relaci&oacute;n con su portafolio de productos.</li>
                        <li>Las im&aacute;genes recolectadas que&nbsp;El Participante&nbsp;personalmente entregue a Productos Ramo S.A.S. o sean tomadas en el desarrollo de&nbsp;su participaci&oacute;n en La Actividad, ser&aacute;n utilizadas, publicadas, compartidas y se les&nbsp;dar&aacute;&nbsp;cualquier otro uso legal, para los fines que requiera Productos Ramo S.A.S. de tiempo en tiempo.&nbsp;</li>
                        </ol>
                        <p>&nbsp;</p>
                        <p>Como consecuencia de&nbsp;La Actividad,&nbsp;Productos Ramo S.A.S. y ESTRATEGIA CREATIVA M.S.C S.A realizar&aacute;n el Tratamiento de los Datos Personales suministrados por el tiempo que sea razonable y necesario conforme con el prop&oacute;sito de la recolecci&oacute;n. No obstante, Productos Ramo S.A.S. conservar&aacute; por un t&eacute;rmino indefinido, aquellos datos, im&aacute;genes o fotograf&iacute;as que se requieran con el fin de dar cumplimiento al prop&oacute;sito del&nbsp;La Actividad.&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>Como titular de los datos personales aportados&nbsp;Los Participantes&nbsp;y/o persona(s) autorizada(s)&nbsp;tienen&nbsp;los siguientes derechos:&nbsp;</p>
                        <p>&nbsp;</p>
                        <ol>
                        <li>Conocer, actualizar y rectificar&nbsp;sus&nbsp;datos personales&nbsp;cuando identifiquen&nbsp;que hay datos parciales, inexactos, incompletos, fraccionados, que induzcan a error, entre otros.&nbsp;</li>
                        <li>Solicitar prueba de la autorizaci&oacute;n otorgada a Productos Ramo S.A.S.&nbsp;</li>
                        <li>Ser informado del uso que le es dado a&nbsp;sus&nbsp;datos personales, mediando solicitud previa al respecto.&nbsp;</li>
                        <li>Presentar ante la Superintendencia de Industria y Comercio quejas por la infracci&oacute;n a las normas de protecci&oacute;n de datos establecidas en la Ley 1581 de 2012, y las normas que la modifiquen, adicionen o complementen.&nbsp;</li>
                        <li>Revocar la autorizaci&oacute;n otorgada y solicitar la supresi&oacute;n de&nbsp;sus&nbsp;datos personales&nbsp;de la base de datos a la cual haya dado autorizaci&oacute;n, cuando no se respeten los principios, derechos y garant&iacute;as constitucionales y legales respecto al tratamiento de&nbsp;datos personales. Dicha revocatoria y/o supresi&oacute;n proceder&aacute; cuando la Superintendencia de Industria y Comercio haya determinado que existi&oacute; una infracci&oacute;n al respecto.&nbsp;</li>
                        <li>Acceder en forma gratuita a&nbsp;sus&nbsp;datos personales.&nbsp;&nbsp;</li>
                        </ol>
                        <p>&nbsp;&nbsp;</p>
                        <p>Autorizan&nbsp;a Productos Ramo S.A.S. para realizar el Tratamiento de&nbsp;sus&nbsp;Datos Personales de acuerdo con las finalidades que les&nbsp;fueron informadas con anterioridad y para las que se encuentran en la&nbsp;pol&iacute;tica de tratamiento de datos personales, que&nbsp;se&nbsp;pueden&nbsp;consultar en la p&aacute;gina web <a href="http://www.ramo.com.co/pdf/Habeas_Data.pdf">http://www.ramo.com.co/pdf/Habeas_Data.pdf</a>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>La informaci&oacute;n personal podr&aacute; ser suministrada a las agencias de publicidad y mercadeo, agencias de promoci&oacute;n y marketing, en general asesores de&nbsp;Productos Ramo S.A.S.&nbsp;con el &aacute;nimo de ser procesada, administrada y dirigida para el procesamiento de datos y fines administrativos&nbsp;de los mismos.&nbsp;El titular de la informaci&oacute;n podr&aacute; en cualquier tiempo, solicitar la modificaci&oacute;n, correcci&oacute;n, adici&oacute;n o supresi&oacute;n de cualquier dato suministrado.&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>Toda imagen o datos personales de los ganadores podr&aacute; ser utilizada para futuros referentes o actividades que se hagan sobre esta actividad ya sea en redes sociales o piezas impresas</p>
                        
                        <p>&nbsp;</p>
                        <p><strong>IX &ndash; </strong><strong><u>Dudas y Reclamaciones:</u></strong></p>
                        
                        <p>Para cualquier duda o , petici&oacute;n queja o reclamo, comunicarse con nuestro contact call center en Colombia al n&uacute;mero: <strong>(+57) </strong>018000180535</p>
                        <p>Servicio al cliente Bogot&aacute;: (1)7482000</p>
                        <p>Servicio al cliente Barranquilla: (5)3852873</p>
                        <p>Servicio al cliente Medell&iacute;n: (4)6049842</p>
                        <p>Servicio al cliente Bucaramanga: (7)6972743</p>
                        <p>Servicio al cliente Tunja: (8)7473920</p>
                        <p>Celular / Whatsapp torre de control: (+57) 3223542797.</p>
                        <p>Tambi&eacute;n podr&aacute; enviarla por escrito a la cuenta de correo electr&oacute;nico dispuesta para tal efecto <a href="mailto:serviciocliente@ramo.com.co">serviciocliente@ramo.com.co</a> o al correo: <a href="mailto:ganaconramo@gmail.com">ganaconramo@gmail.com</a></p>
                        <p>&nbsp;</p>
                        <p><strong>CONDICIONES Y RESTRICCIONES.</strong></p>
                        <p><strong>&nbsp;</strong></p>
                        <p>Cualquier tipo de fraude, o de intento del mismo, al igual que cualquier incumplimiento de los t&eacute;rminos y condiciones aqu&iacute; descritos, dar&aacute; lugar a que el participante sea descalificado de la actividad, sin posibilidad de poder reingresar a &eacute;sta. La compa&ntilde;&iacute;a podr&aacute; verificar el fraude, el intento de fraude, o el incumplimiento, por cualquier medio que considere pertinente.</p>
                        <p><strong>&nbsp;</strong></p>
                        <p>La responsabilidad de Productos Ramo S.A.S. culmina con la entrega del premio. Los ganadores eximen de toda responsabilidad a los organizadores del uso o destinaci&oacute;n que diere al premio, m&aacute;s a&uacute;n si se tratare de actividades il&iacute;citas o que atenten contra la ley y/o las buenas costumbres.</p>
                        <p>&nbsp;</p>
                        <p>Una vez El Ganador haya recibido su premio no se admiten cambios por dinero, valores o cualquier otro producto material. Si no acepta el premio o sus condiciones, se considerar&aacute; que ha renunciado al mismo y no tendr&aacute; derecho a reclamo o indemnizaci&oacute;n alguna, ni siquiera parcialmente. El ganador deber&aacute; firmar conforme el recibo de su premio. El derecho al premio no es transferible, negociable, ni puede ser comercializado o canjeado por dinero en efectivo, ni por ning&uacute;n otro premio. Los premios ser&aacute;n entregados &uacute;nicamente a las personas ganadoras que exhiban su c&eacute;dula de ciudadan&iacute;a o de extranjer&iacute;a. PRODUCTOS RAMO S.A.S. Es el &uacute;nico administrador y organizador de la presente actividad.&nbsp;En caso de p&eacute;rdida del premio una vez haya sido recibido por el Ganador el mismo no podr&aacute; ser cambiado por dinero en efectivo, ni remplazado.</p>
                        <p>&nbsp;</p>
                        <p><strong>REQUISITOS DE LAS FOTOGRAF&Iacute;AS DE LOS PARTICIPANTES</strong></p>
                        <p><strong>&nbsp;</strong></p>
                        <p>Las fotograf&iacute;as, de los Participantes para participar en La Actividad (en adelante &ldquo;Las Creaciones&rdquo;) no debe vulnerar&nbsp;cualquier derecho adquirido por alg&uacute;n tercero,&nbsp;incluyendo&nbsp;pero&nbsp;sin limitarse a: i)&nbsp;derecho de propiedad o contractual; (ii) derechos de privacidad o publicidad; (iii) de imagen, (iv) cualquier obligaci&oacute;n de confidencialidad, (v) cualquier derecho de propiedad intelectual.</p>
                        <p>&nbsp;</p>
                        <p>Las Creaciones presentadas no deben incluir contenidos&nbsp;incluyendo pero sin&nbsp;limitarse, que&nbsp;sean:&nbsp;sean (i)&nbsp;difamatorios, abusivos, acosadores, amenazantes, o que constituya una invasi&oacute;n al derecho de privacidad de otra persona; (ii)&nbsp;sea prejuicioso, racista, que genere odio o que sea ofensivo de cualquier forma; (iii) sea discriminatorio (basado en raza, sexo, religi&oacute;n, pa&iacute;s de origen, discapacidad f&iacute;sica, orientaci&oacute;n sexual o edad); (iv) sea violento, vulgar, obsceno, pornogr&aacute;fico o sexualmente&nbsp;expl&iacute;cito de cualquier forma; (v) averg&uuml;ence de cualquier forma, da&ntilde;e o que pueda razonablemente avergonzar o da&ntilde;ar a cualquier persona o entidad&nbsp;o la reputaci&oacute;n de Productos Ramo S.A.S&nbsp;o de sus marcas; (vi) sea ilegal o que fomente o promueva una actividad il&iacute;cita o la discusi&oacute;n de&nbsp;actividades il&iacute;citas con la intenci&oacute;n de realizarlas, como por ejemplo, incluyendo pero sin limitarse a&nbsp;material que sea, o represente un intento de realizar pornograf&iacute;a infantil, acoso, agresi&oacute;n sexual, fraude, tr&aacute;fico de material obsceno o robado, venta y/o abuso de drogas, acoso, robo, o conspiraci&oacute;n para cometer cualquier actividad delictiva; (vii) comercial, relacionado con un negocio o que publicite u ofrezca vender cualquier producto, servicio u otro (con o sin fines de lucro), o que solicite otros (como la solicitud de contribuciones o donaciones); o (ix) que promueva, describa o sugiera el alcohol, drogas ilegales, tabaco, armas de fuego u otras armas (o la utilizaci&oacute;n de cualquiera de ellos), o cualquier otra actividad que se pueda interpretar como insegura o peligrosa, o promueva cualquier programa o mensaje pol&iacute;tico en particular.</p>
                        <p>&nbsp;</p>
                        <p><strong>AUTORIZACION DE USO DE IMAGEN Y CESI&Oacute;N DE DERECHOS </strong></p>
                        <p><strong>&nbsp;</strong></p>
                        <p>Al participar en la actividad, los ganadores aceptan y autorizan que sus nombres e im&aacute;genes aparezcan en las publicaciones, sitio web y dem&aacute;s medios publicitarios y en general en todo material de divulgaci&oacute;n con fines promocionales del que Productos Ramo S.A.S deseen hacer durante La Actividad, y/o una vez la misma haya finalizado, sin que ello implique la obligaci&oacute;n de remunerarlos o compensarlos adicionalmente. As&iacute; mismo, renuncia a cualquier reclamo por derechos patrimoniales de autor o de imagen. Para lo cual en el mismo documento en el que se deje constancia de la entrega del premio, los ganadores se obligar&aacute;n a ceder los derechos patrimoniales de autor, sobre su creaci&oacute;n, la cual si es del caso puede ser susceptible de registro ante la Direcci&oacute;n Nacional de Derechos de Autor del Ministerio del Interior.&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>Los&nbsp;Participantes&nbsp;autorizan a&nbsp;Productos Ramo S.A.S. para el uso de im&aacute;genes y fotograf&iacute;as ejecutados durante su participaci&oacute;n en la Actividad, para los eventos promocionales realizados por Productos Ramo S.A.S. en cualquier parte del territorio nacional&nbsp;e internacional.</p>
                        <p>&nbsp;</p>
                        <p><strong>SUSPENSI&Oacute;N Y/O CANCELACI&Oacute;N DE LA ACTIVIDAD.</strong></p>
                        <p><strong>&nbsp;</strong></p>
                        <p>PRODUCTOS RAMO S.A.S, podr&aacute; modificar los presentes t&eacute;rminos y condiciones, siempre y cuando no implique disminuci&oacute;n alguna de la cantidad de premios de la misma, debiendo notificar, en forma previa, dicha/s modificaci&oacute;n/es a los participantes, sin que ello genere derecho alguno o reclamo por parte de los participantes.</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>En caso de circunstancia de fuerza mayor, caso fortuito, o hechos de terceros, incluidos pero no limitados a: desastres naturales, guerras, pandemias, huelgas o disturbios, as&iacute; como tambi&eacute;n situaciones que afecten la actividad; o en caso de detectarse o haber sospecha de un fraude o intento de fraude en perjuicio de los organizadores o los participantes de la misma, o en caso de considerarlo necesario por razones log&iacute;sticas Productos Ramo S.A.S., podr&aacute; modificar en todo o en parte esta actividad, as&iacute; como suspenderla temporal o permanentemente sin asumir ninguna responsabilidad al respecto. En caso de modificaci&oacute;n, cancelaci&oacute;n o suspensi&oacute;n se notificar&aacute; a los participantes.</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p><strong>DISPOSICIONES FINALES</strong></p>
                        <p>&nbsp;</p>
                        <p>El s&oacute;lo hecho de participar en La Actividad implica la total aceptaci&oacute;n de los presentes t&eacute;rminos y condiciones. &nbsp;</p>
                        <p>Los Participantes&nbsp;garantizan la veracidad de la informaci&oacute;n que se proporcione a Productos Ramo S.A.S. dentro de la participaci&oacute;n en La Actividad.&nbsp;As&iacute;&nbsp;mismo, se comprometen a indemnizar a Productos Ramo S.A.S., sus accionistas, empleados o colaboradores y eximirla de responsabilidad frente a cualquier acci&oacute;n, da&ntilde;os, costes y otras responsabilidades en las que pudiera incurrir Productos Ramo S.A.S. como resultado de cualquier tipo de incumplimiento por parte&nbsp;de los participantes y/o personas autorizadas de alguno de los&nbsp;t&eacute;rminos&nbsp;y condiciones y&nbsp;de las declaraciones se&ntilde;aladas en&nbsp;los formularios de inscripci&oacute;n.&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>La participaci&oacute;n en &eacute;sta Actividad es gratuita por lo que no se deber&aacute; hacer pago alguno para participar en ella.</p>
                        <p>Al aceptar estos T&eacute;rminos y Condiciones Los Participantes y Ganadores reconocen que de manera libre, voluntaria y espont&aacute;nea han decidido participar en La Actividad, por lo que dentro de los l&iacute;mites permitidos por la ley Colombiana, RENUNCIAN A PRESENTAR O EJERCER CUALQUIER RECLAMACI&Oacute;N O ACCI&Oacute;N de cualquier naturaleza&nbsp;en contra de Productos Ramo S.A.S. sus accionistas, empleados o colaboradores, que tenga por objeto reclamar indemnizaciones por da&ntilde;os o perjuicios que se les hayan causado por su participaci&oacute;n en&nbsp;La Actividad, o de cualquier manera relacionados con &eacute;sta, o por las actividades que realizare como consecuencia de dicha participaci&oacute;n.</p>
                        <p><strong>&nbsp;</strong></p>
                        <p>Productos RAMO S.A.S. no ser&aacute; responsable por ning&uacute;n da&ntilde;o o perjuicio que sufran, directa o indirectamente los participantes, y en conexi&oacute;n con la realizaci&oacute;n de esta actividad promocional, o con los premios ofrecidos dentro de &eacute;sta, los participantes, los ganadores y/o terceras personas.</p>
                        <p>PRODUCTOS RAMO S.A.S ni sus filiales, ni subsidiarias, ni sociedades o empresas integrantes de PRODUCTOS RAMO S.A.S., ni sus licenciantes, ser&aacute;n responsables por da&ntilde;os o perjuicios que pudieren sufrir los participantes ganadores o terceros, con motivo y/u ocasi&oacute;n de la participaci&oacute;n en la presente actividad y/o del uso de los premios, y/o el traslado a cumplir con los requisitos de estos t&eacute;rminos y condiciones, declinando todo tipo de responsabilidad contractual y/o extracontractual frente a los participantes ganadores y/o acompa&ntilde;antes y/o sus sucesores, lo que es aceptado incondicionalmente por cada participante.</p>
                        <p>&nbsp;</p>
                        <p>Asimismo, PRODUCTOS RAMO S.A.S., sus controladoras, sus filiales, subsidiarias, sociedades o empresas integrantes de PRODUCTOS RAMO S.A.S. y sus licenciantes no se responsabilizan por los da&ntilde;os, hurtos y/o robos de los que pudieran ser objeto el participante ganador y/o terceros. El participante ganador ser&aacute; responsable exclusivo por la utilizaci&oacute;n del premio y sus consecuencias.</p>
                        <p>&nbsp;</p>
                        <p>La responsabilidad de PRODUCTOS RAMO S.A.S, sus controladoras, sus filiales, subsidiarias, sociedades o empresas integrantes de PRODUCTOS RAMO S.A.S y sus licenciantes, finaliza por todo concepto con la puesta a disposici&oacute;n de los participantes ganadores, los premios correspondientes.</p>
                        <p>&nbsp;</p>
                        <p>La Actividad y sus t&eacute;rminos y condiciones se regir&aacute;n por la ley de la Rep&uacute;blica de Colombia.</p>
                        <p>Las marcas, nombres comerciales, ense&ntilde;as, gr&aacute;ficos, dibujos, dise&ntilde;os y cualquier otra figura que constituya propiedad intelectual o industrial y que aparezca en el sitio web, est&aacute;n protegidos a favor de PRODUCTOS RAMO S.A.S., de conformidad con las disposiciones legales sobre la materia. En consecuencia, los elementos aqu&iacute; referidos no podr&aacute;n ser utilizados, modificados, copiados, reproducidos, transmitidos o distribuidos de ninguna manera y por ning&uacute;n medio, salvo autorizaci&oacute;n previa, escrita y expresa de la compa&ntilde;&iacute;a.&nbsp;</p>
                        <p>&nbsp;</p>
                    </p>
                  </div>
                  
                </div>
                <a class="btn btn-block text-uppercase" href="assets/docs/Terminos&condiciones.pdf" target="_blank" style="background-color: #ffd025; font-weight: bold">Descargar</a> 
              </div>
            </div>
            <!--end of col-->
          </div>
          <!--end of row-->
          
        </div>
        <!--end of container-->
      </section>
      <!--end of section-->
      <!-- Whatsapp button  -->
      <?php require_once 'modals/whatsapp.php'?>

    </div>

    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

    <script>
        $(function () {
          $('[data-toggle="popover"]').popover()
          $("#whatspopover").popover("show");
          $("#tiendaramopopover").popover("show");
        })
     
    </script>

    <!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->

    <!-- AOS (Animate On Scroll - animates elements into view while scrolling down) -->
    <script type="text/javascript" src="assets/js/aos.js"></script>
    <!-- Flatpickr (calendar/date/time picker UI) -->
    <script type="text/javascript" src="assets/js/flatpickr.min.js"></script>
    <!-- Flickity (handles touch enabled carousels and sliders) -->
    <script type="text/javascript" src="assets/js/flickity.pkgd.min.js"></script>
    <!-- jarallax (parallax effect and video backgrounds) -->
    <script type="text/javascript" src="assets/js/jarallax.min.js"></script>
    <script type="text/javascript" src="assets/js/jarallax-video.min.js"></script>
    <script type="text/javascript" src="assets/js/jarallax-element.min.js"></script>
    <!-- ScrollMonitor (manages events for elements scrolling in and out of view) -->
    <script type="text/javascript" src="assets/js/scrollMonitor.js"></script>
    <!-- jQuery smartWizard facilitates steppable wizard content -->
    <script type="text/javascript" src="assets/js/jquery.smartWizard.min.js"></script>
    <!-- Smooth scroll (animation to links in-page)-->
    <script type="text/javascript" src="assets/js/smooth-scroll.polyfills.min.js"></script>
    <!-- Prism (displays formatted code boxes) -->
    <script type="text/javascript" src="assets/js/prism.js"></script>
    <script type="text/javascript" src="assets/js/zoom.min.js"></script>
    <script type="text/javascript" src="assets/js/moment.js"></script>

    <script type="text/javascript" src="assets/js/sweetalert.min.js"></script>

    <script type="text/javascript" src="assets/js/jquery-modal-video.min.js"></script>
    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/theme.js"></script>

    <!-- VUE y Scripts de la pagina-->
    <script src="assets\js\vue.js"></script>
    <script src="assets\js\clases\cliente.js?<?php echo date('Ymdhiiss')?>"></script>
    <script src="assets\js\pages\registro.js?<?php echo date('Ymdhiiss')?>"></script>