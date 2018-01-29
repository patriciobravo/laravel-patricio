 <!-- Modal -->
  <div class="modal fade" id="client-update" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Nuevo Cliente</h4>
        </div>

        <form action="{{ URL::to('clients/update') }}" method="POST" id=frm-update>       
        <div class="modal-body">

            <div class="form-group col-sm-6">
                <label>Rut</label>
                <input type="hidden" name="id" class="form-control" id="id">
                <input type="text" name="rut_client" class="form-control" id="rut_client">
            </div>        
        
            <div class="form-group col-sm-6">
                <label>Nombre</label>
                <input type="text" name="first_name" class="form-control" id="first_name">
            </div>
        
            <div class="form-group col-sm-6">
                <label>Apellido Paterno</label>
                <input type="text" name="last_name_one" class="form-control" id="last_name_one">
            </div>
        
             <div class="form-group col-sm-6">
                <label>Apellido Materno</label>
                <input type="text" name="last_name_two" class="form-control" id="last_name_two">
            </div>
            <div class="form-group col-sm-6">
                <label>Email</label>
                <input type="text" name="email" class="form-control" id="email"> 
            </div>
            <div class="form-group col-sm-6">
                <label>Dirección</label>
                <input type="text" name="address" class="form-control" id="address"> 
            </div>
            <div class="form-group col-sm-6">
                <label>Numero</label>
                <input type="text" name="address_num" class="form-control" id="address_num">
            </div>
            <div class="form-group col-sm-6">
                <label>N° Dpto</label>
                <input type="text" name="address_department" class="form-control" id="address_department">
            </div>
            <div class="form-group col-sm-6">
                <label>Fono</label>
                <input type="text" name="phone_client" class="form-control" id="phone_client">
            </div>
            <div class="form-group col-sm-6">
                <label>Celular</label>
                <input type="text" name="cell_phone_client" class="form-control" id="cell_phone_client">
            </div>        
            
            <div class="form-group col-sm-6">
                <label>Sexo</label>
                <select class="form-control" id="sex_id" name="sex_id" id="sex_id">
                    <option value="">--------</option>
                    @foreach($sexes as $key => $sex)
                        <option value="{{ $key }}">{{ $sex }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-sm-6">
                <label>Fecha Nacimiento</label>
                <input type="text" name="birth_date" id="birth_date" class="form-control">
            </div> 


        </div>
        <div class="modal-footer">
            <input type="submit" class="btn btn-success pull-left" value="Actualizar">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </form>
        </div>
      </div>
      
    </div>
  </div>