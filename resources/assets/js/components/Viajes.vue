<template>
    <div>
        <input type="hidden" id="origen" value="Chile">

        <div id="seguroViajes" class="container" style="margin-top: 50px;">
		    <div class="col-xs-12 col-sm-offset-1 col-sm-10">
                <div class="col-xs-12 col-sm-10"><h1>SEGURO DE VIAJES</h1></div> 				
                    <div class="col-sm-12 linea"></div>		
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
</template>

<script>
import axios from 'axios'
import customer from './Customer.vue';
    export default {
        
        data(){
            return{
                customers: [], 
                sexes:[],
                errors:[],
                
                   // {name:'patricio toro', email:'patricio.toro@conosurseguros.cl'},
                    //{name:'claudio toro', email:'claudio.toro@conosurseguros.cl'} 
                                                                   
                customer:{
                    rut:'',
                    email:''
                    

                    
                }          
            }
        },
        components:{ customer },
    
    
    }

</script>