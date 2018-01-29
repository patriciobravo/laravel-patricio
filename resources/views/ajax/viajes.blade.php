@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            
<input type="hidden" id="origen" value="Chile">

	<div class="clearfix"></div>

	<div id="seguroViajes" class="container" style="margin-top: 50px;">
		<div class="col-xs-12 col-sm-offset-1 col-sm-10">
			<div class="titulo">
				<div class="col-xs-12 col-sm-10"><h1>SEGURO DE VIAJES</h1></div> 				
				<div class="col-sm-12 linea"></div>			
				<!--<div class="col-sm-12 col-sm-offset-8 col-sm-12">-->
            <div id="cabeza">
				<div class="col-xs-10 col-sm-12">
				

					<p style="text-align: justify;color:#004370;">Cotiza y compara tu seguro de viaje en <a href="#" ></a>junto a las <a href="#"></a> mejores compañías aseguradoras</a> del país. Encuentra el mejor precio y compra online, con gran seguridad y facilidad en el proceso.</p>
					<p style="text-align: justify;color:#004370;">¡Encuentra el mejor seguro de viaje en asistencia para el viajero, ahorra y viaja tranquilo. Compara los precios de los seguros para viajes y compra en línea en un solo lugar. Encuentra los mejores precios y beneficios para que te relajes y aproveches aún más de tus descansos.</p>
					<p style="text-align: justify;color:#004370;">Si quieres saber todo sobre un seguro de viaje internacional o los beneficios de asistencia al viajero en Europa, o incluso si necesitas un seguro médico de viaje para cuidar de tu salud, revisa los requerimientos del tipo de póliza que necesites. Si vas a cualquier país de América del Sur Europa, o a todo el resto del mundo, necesitarás un seguro de asistencia en viaje para protegerte de cualquier imprevisto.</p>
					<p style="text-align: justify;color:#004370;">Compara los resultados, escoge la oferta que mejor se ajuste a tus necesidades y paga rápido, fácil y seguro. Las mejores aseguradoras nacionales están en EstoySeguro.cl. Recuerda que si necesitas más información al momento de cotizar cualquier seguro de viajes,<a class="tellamamos" href="#" data-toggle="modal" data-target="#modalTeLlamamos" title="Te asesoramos"> te llamamos y asesoramos</a>. Nuestros ejecutivos expertos siempre están dispuestos a orientarte sobre lo que necesites.</p>
				</div>
				<div class="col-sm-12 col-sm-offset-8 col-sm-12">
				<a href="#" id="IrAcertificados" class="btn_comprar btn btn-danger">DESCARGA TU CERTIFICADO AQUI</a>				
                </div>
            </div>
		</div>
			
		
			<div class="clearfix"></div>
			<div class="formulario">
				<div id="paso2">
					<div class="titulo-form">
						<div class="col-sm-9">
							<h2>COTIZA TU SEGURO DE VIAJES</h2>
						</div>
						<div class="col-sm-1 text-right">
							<h4>PASO 1</h4>
						</div>
						<div class="clearfix"></div>
					</div>
                    <div class="clearfix"></div>
                    <form action="{{ URL::to('travel/europ') }}" method="POST" id=frm-insert>       
        <div class="modal-body">
            {{ csrf_field() }} 

            

           
           <div>
        <input type="hidden" id="origen" value="Chile">
      
				
					<div class="clearfix"></div>
                    <div class="body-form">
                        <div id="div_viajes_origen" class="form-group col-sm-6">
							<label for="viajes_origen">Origen</label>
						  <input type="text" class="form-control" name="viajes_origen" id="viajes_origen" value="Chile" readonly>
						</div>
						<div id="div_viajes_destino" class="form-group col-sm-6">
							<label for="viajes_destino">Destino</label>
							<select class="form-control" id="viajes_destino" name="viajes_destino">
								<option value="Seleccione">Seleccione</option>
								<option value="AMERICA DEL SUR">AMERICA DEL SUR</option>
								<option value="EUROPA">EUROPA</option>
								<option value="RESTO DEL MUNDO">RESTO DEL MUNDO</option>
								<option value="INTERNACIONAL">INTERNACIONAL</option>
							</select>
						</div>
						<div id="div_viajes_salida" class="form-group col-sm-6">
							<label for="viajes_salida">Fecha Salida</label>
							<input type="text" class="form-control" id="viajes_salida" name="viajes_salida" placeholder="Fecha Salida" minlength="2" maxlength="30" readonly>
						</div>
						<div id="div_viajes_regreso" class="form-group col-sm-6">
							<label for="viajes_regreso">Fecha Regreso</label>
							<input type="text" class="form-control" id="viajes_regreso" name="viajes_regreso" placeholder="Fecha Regreso" minlength="2" maxlength="20" readonly>
						</div>
						<div id="div_viajes_rut" class="form-group col-sm-6">
							<label for="rut_client">Rut Asegurado</label>
							<input type="text" class="form-control" id="rut_client" name="viajes_rut" placeholder="Ingrese su Rut" minlength="10" maxlength="12">
						</div>						
						
						<div id="div_viajes_fono_tipo1" class="form-group col-sm-6">
							<label for="viajes_fono_tipo1">Teléfono</label><br>
							<select class="form-control" id="viajes_fono_tipo1" name="viajes_fono_tipo1">
								<option value="Seleccione">Tipo Fono</option>
								<option value="Movil">Móvil (+569)</option>
								<option value="Fijo">Fijo (+56)</option>
							</select>
						</div>
						<div id="div_viajes_telefono" class="form-group col-sm-6">
							<label for="viajes_telefono">Número</label>
							<input type="text" class="form-control" id="viajes_telefono" name="viajes_telefono" placeholder="Ingrese Telefono" minlength="7" maxlength="9">
						</div>
						<div id="div_viajes_mail" class="form-group col-sm-6">
							<label for="viajes_mail">Mail</label>
							<input type="text" class="form-control" id="viajes_mail" placeholder="Ingrese Mail" minlength="4" maxlength="39">
						</div>
						<div id="div_viajes_pasajeros" class="form-group col-sm-6">
							<label for="viajes_pasajeros">Cantidad de Pasajeros</label>
							<select class="form-control" id="viajes_pasajeros" name="viajes_pasajeros">
								<option value="Seleccione">Seleccione</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
                        </div>	
                    
                        <br>
						<br>
						<br>
						<br>

						<div class="clearfix" style="padding-bottom: 2%;"></div>
							<div class="text-center">
								<a href="#paso3" id="IrApaso2" class="btn_comprar btn btn-primary">COTIZAR ONLINE</a>
								<a href="#" id="refresh" class="btn btn-primary">NUEVA COTIZACION</a>
						</div>

                    </div>
                    <br>
					<br>
					<br>
                </div>
            </div>
         </div>
        <div class="modal-footer">
            <input type="submit" class="btn btn-success pull-left" value="Guardar">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </form>
					
					<br>
					<br>
					<br>
				</div>

		<!--MODAL   BUSCA TUS CERTIFICADOS-->
		<div class="modal fade col-sm-offset-3 col-sm-6" id="modalViajeCertificado" tabindex="-1" role="dialog" aria-hidden="true" style="height: 500px;">
			<div class="modal-dialog">
				<div class="modal-content" style="height: 500px;">
						<div class="modal-header text-center">
							<button type="button" class="close" data-dismiss="modal" id="cerrarmodal" aria-hidden="true">&times;</button>
						</div>
					<div class="modal-body"> <!--MODAL-BODY-->					
							<div id="div_modal_poliza" class="form-group col-xs-offset-4 col-sm-4">
							<label for="modal_rut">RUT ASEGURADO</label>
							<input type="text" class="form-control" id="modal_rut" name="modal_rut" placeholder="" value ="">					
							</div>
						<div class="clearfix" style="padding-bottom: 2%;"></div>
							<div class="text-center">
							   <a href="#" id="IrAdatos" class="btn_comprar btn btn-primary">BUSCAR CERTIFICADO</a>
							</div>             
				
					</div> <!--MODAL-BODY-->
					
					<img src="img/modal-viaje6.png" alt="Seguro Viajes" title="Seguro Viajes" class="img-responsive estatua" >
					
				</div>
			</div>
        </div>
        <!-- MODAL SEGURO VIAJES COTIZACIÓN -->
		<div class="modal fade col-sm-offset-3 col-sm-6" id="modalViajeFinal" tabindex="-1" role="dialog" aria-hidden="true" style="height: 500px;">
				<div class="modal-dialog">
					<div class="modal-content" style="height: 500px;">
						<div class="modal-header text-center">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body">
						    <div id="" align="center">
								<img src="images/img/cargando_pajarito.gif" alt="EstoySeguro.cl" style="height: 200; width: 200px; margin-top: 50px;">
								<h4>Cotizando...</h4>
							</div>
						</div>
					</div>
				</div>
        </div>
        
        <!-- FIN MODAL VIAJES COTIZACIÓN -->
			<div id="tituloPaso2" class="titulo-form">		
				<div class="col-sm-12">
					<hr>
					<h4>ESCOGE TU PLAN CON DESTINO <span id="destino"></span> PARA <span id="cantidad_pasajeros"></span>
					</h4>
					<hr>
				</div>
				<div class="clearfix"></div>
				<div class="body-form">
				<div class="datos-cotizacion">
					<div class="col-sm-6 text-left"><h4><p>Estimado Cliente su cotización es<cotizacionES></cotizacionES></p></h4></div>
					
					
				</div>			
			
            </div>
            @include('ajax.americaViajes')
			</div>

          
</div>
@endsection

@section('script')

<script type="text/javascript">

        ///////////////////////////////////TOKEN LARAVEL///////////////////////////////////////////////////////////////////////////
       $(document).ready(function() {
            $('#refresh').hide();
            $('#America').hide();
            $('#tituloPaso2').hide();
            $('#titulo').hide();
            
       });
        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

 $("#BtnEnviar").click(function (e) {
      e.preventDefault();
      var nombre = $('#txtNombre').val();
      $.ajax({
        type: "post",
        url: "mi_ruta_post",
        data: {
            nombre: nombre
        }, success: function (msg) {
                alert("Se ha realizado el POST con exito "+msg);
        }
      });
  });
  /*------------------- DATEPICKER PARA CALENDARIO----------------*/
    $('#birth_date').datepicker();
        $.datepicker.setDefaults($.datepicker.regional["es"] = { monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'] });
    $("#viajes_salida").datepicker({
        dateFormat: 'dd-mm-yy',
        //dateFormat: 'yy-mm-dd', 
        changeMonth: true,
        changeYear: true,
        yearRange: "0:+1",
        minDate: 0,
        firstDay: 1,
        onSelect: function(date) {
            //Validar('fecha', 'viajes_salida', 'fecha sal.', 10, 10);
        },
        onClose: function(date) {
            //Validar('fecha', 'viajes_salida', 'fecha sal.', 10, 10);
            //console.log('date: '+date);
            var day = date.substr(0, 2);
            var month = date.substr(3, 2);
            var year = date.substr(6, 4);

            fechabd_salida = year + "/" + month + "/" + day;

            //console.log(fechabd_salida);

            //console.log('day: '+day);
            //console.log('month: '+month);
            //console.log('year: '+year);
            day2 = parseInt(day) - 1;
            //console.log('day2: '+day2);
            var d = new Date(year, month - 1, day2, 00, 00, 00, 0);
            //console.log('d: ' + d);

            var start = new Date(d);
            start.setFullYear(start.getFullYear() + 1);
            var startf = start;
            //console.log('d' + startf);


            $("#viajes_regreso").datepicker("option", "maxDate", startf);
            //$( "#viajes_regreso" ).datepicker({ minDate: d, maxDate: d});
        }
    });

    //$('#viajes_salida').datepicker(); $('#viajes_regreso').datepicker({ onSelect: function(dateText, inst) { $('#viajes_regreso').val(""); $('#viajes_regreso').datepicker("option", "minDate", new Date(dateText)); } });

    //$.datepicker.setDefaults($.datepicker.regional["es"]);
    $("#viajes_regreso").datepicker({
        dateFormat: 'dd-mm-yy',
        //dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true,
        yearRange: "-0:+1",
        firstDay: 1,
        minDate: +2,
        onSelect: function(date) {
            //Validar('fecha', 'viajes_regreso', 'fecha reg.', 10, 10);
            var day = date.substr(0, 2);
            var month = date.substr(3, 2);
            var year = date.substr(6, 4);

            fechabd_regreso = year + "/" + month + "/" + day;
            console.log(fechabd_regreso);
        },
        onClose: function(date) {
            //Validar('fecha', 'viajes_regreso', 'fecha reg.', 10, 10);
        }
    });

     $('#rut_client').autocomplete({
            source: "{{ URL::to('autocomplete-search') }}",
           // minLength:2,
            select: function(key, value)
            {
                console.log(value)
                $('#first_name').val(value.item.first_name)
                $('#last_name').val(value.item.last_name)
                $('#sex_id').val(value.item.sex_id)
                $('#viajes_mail').val(value.item.email)
                $('#viajes_telefono').val(value.item.cell_phone_client)                
                $(value.item.client_id)
               // var dateh= $('#dob')
                console.log(value.item.client_id)
            }
        })

    $('#IrApaso2').click(function(store) {

    origen_id = $.trim($('#origen').val());
    viajes_origen = $.trim($('#viajes_origen').val());
    viajes_destino = $.trim($('#viajes_destino').val());
    viajes_salida = $.trim($('#viajes_salida').val());
    viajebd_salida = fechabd_salida;
    viajes_regreso = $.trim($('#viajes_regreso').val());
    viajebd_regreso = fechabd_regreso;
    viajes_mail = $.trim($('#viajes_mail').val());
    viajes_codigo_area = $.trim($('#viajes_codigo_area').val());
    viajes_telefono = $.trim($('#viajes_telefono').val());
    viajes_plan = $.trim($('#viajes_plan').val());
    viajes_rut = $.trim($('#viajes_rut').val());
    viajes_sexo = $.trim($('#viajes_sexo').val());
    viajes_estadocivil = $.trim($('#viajes_estadocivil').val());
    viajes_pasajeros = $.trim($('#viajes_pasajeros').val());

    console.log(origen_id)
        $('#modalViajeFinal').modal('show');
        //$('#tituloPaso2').show();
         //$('#America').show();
        $('#paso2').hide();
        $('#cabeza').hide();
        
          setTimeout(function() {
                    $('#America').show(); 
                    $('#tituloPaso2').show();
                     $('#modalViajeFinal').modal('hide');                            
                            }, 5000);

        

       
    viajes_salida = $.trim($('#viajes_salida').val());
    viajes_regreso = $.trim($('#viajes_regreso').val());
    destino = $.trim($('#viajes_destino').val());
    $("#destino").html(destino);
    viajes_pasajeros = $.trim($('#viajes_pasajeros').val());

    if (viajes_pasajeros > 1) {
            cantidad_pasajeros = viajes_pasajeros + ' PERSONAS'
            $("#cantidad_pasajeros").html(cantidad_pasajeros);
        } else {
            cantidad_pasajeros = viajes_pasajeros + ' PERSONA'
            $("#cantidad_pasajeros").html(cantidad_pasajeros);
        }
    //alert(viajes_salida+viajes_regreso)
      aFecha1 = viajes_salida.split('-'); 
    aFecha2 = viajes_regreso.split('-'); 
    console.log(aFecha1)
	fFecha1 = Date.UTC(aFecha1[2],aFecha1[1]-1,aFecha1[0]); 
	fFecha2 = Date.UTC(aFecha2[2],aFecha2[1]-1,aFecha2[0]); 
	dif = fFecha2 - fFecha1;
	dias1 = Math.floor(dif / (1000 * 60 * 60 * 24)); 
    dias = dias1+1;
    
    if (dias == 5)
    {
            economy = 15990
            premium = 21990
            vip =     32990
            $("#economy").html(economy);
            $("#premium").html(premium);
            $("#vip").html(vip);
       // alert(economy5+premium5+vip5)
    } else if(dias == 15){
            economy = 35990
            premium = 41990
            vip =     72990
            $("#economy").html(economy);
            $("#premium").html(premium);
            $("#vip").html(vip);

    }else if(dias == 10){
            economy = 25990
            premium = 31990
            vip =     52990
            $("#economy").html(economy);
            $("#premium").html(premium);
            $("#vip").html(vip);

    }

                            if (viajes_destino == "AMERICA DEL SUR" && dias == 5) {
                                //var viajes_costo1_pesos1 = numeral(total_viajes_pesos1).format('0,0');
                                //var viajes_costo2_pesos2 = numeral(viajes_costo2_pesos).format('0,0');
                                //var viajes_costo3_pesos3 = numeral(viajes_costo3_pesos).format('0,0');
                                //console.log('miles: '+Miles(viajes_costo1_pesos));
                                var pesos1 = Miles(economy);
                                var pesos2 = Miles(premium);
                                var pesos3 = Miles(vip);
                                //var pesos1 = parseFloat(viajes_costo1_pesos1.replace(/\s/g, "").replace(",", "."));
                                //var pesos2 = parseFloat(viajes_costo2_pesos2.replace(/\s/g, "").replace(",", "."));
                                //var pesos3 = parseFloat(viajes_costo3_pesos3.replace(/\s/g, "").replace(",", "."));

                                //America del Sur
                                $("#America").show();
                                $('html, body').animate({ scrollTop: $("#destino").offset().top - 170 }, 600);
                                $("#plan1").html('$' + pesos2 + ' ');
                                $("#plan2").html('$' + pesos1 + ' ');
                                $("#plan3").html('$' + pesos3 + ' ');
                                $("#refresh").show();
                                /*						
                                $("#plan1").html('$'+viajes_costo1_pesos);
                                $("#plan2").html('$'+viajes_costo2_pesos);
                                $("#plan3").html('$'+viajes_costo3_pesos);
                                */
                            }
    

	if (dias <5) {
		alert("El minimo de dias a cotizar no puede ser inferior a 5 dias ")
	}else{
    console.log("Dias a cotizar",dias);
    }

    viajes_destino = $.trim($('#viajes_destino').val());
    console.log(viajes_destino)

        
    $("#viajes_pasajeros").change(function() {
    viajes_pasajeros = $.trim($('#viajes_pasajeros').val());
    console.log("pasajeros",viajes_pasajeros)
  
   
    });

    var formId = '#myForm';

		$.ajax({
			url: $(formId).attr('action'),
			type: $(formId).attr('method'),
			data: $(formId).serialize(),
			dataType: 'html',
			success: function(result){
				if ($(formId).find("input:first-child").attr('value') == 'PUT') {
					var $jsonObject = jQuery.parseJSON(result);
	                                $(location).attr('href',$jsonObject.url);
				}
				else{
					$(formId)[0].reset();
					console.log('Ok');
				}
			},
			error: function(){
				console.log('Error');
			}
		});

});



</script>


    @endsection


    