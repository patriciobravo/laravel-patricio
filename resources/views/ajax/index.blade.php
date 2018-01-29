@extends('layouts.app')

@section('content')
@include('ajax.addClient')
@include('ajax.updateClient')

<div class="container">
    <div class="row">
        <div class="col-md-11 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                    
                    <button class="btn btn-info"  data-toggle="modal" data-target="#myModal">+ Cliente</button>

                    <button class="btn btn-info pull-right btn-xs" id="read-data">Cargar clientes</button>
                </div>
                

                <div class="panel-body" id="panel-datos">
                    <table class="table table-bordered table-striped table-condensed">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Rut</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Email</th>
                                <th>Sexo</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody id="client-info">

                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>
@endsection

@section('script')

<script type="text/javascript">

        ///////////////////////////////////TOKEN LARAVEL///////////////////////////////////////////////////////////////////////////
       $(document).ready(function() {
        $('#panel-datos').hide();
       });
        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    ///////////////////////////////////////TRAER DATOS DE CLIENTES/////////////////////////////////////////////////////////////////

    $('#read-data').on('click', function(){

        $.get("{{ URL::to('/clients/read-data') }}", function(data){
             $('#client-info').empty().html(data);
               $('#panel-datos').show();
        })
    })
    ///////////////////////////////////////FIN TRAER DATOS DE CLIENTES/////////////////////////////////////////////////////////////
   
    ///////////////////////////////////////CREAR NUEVO CLIENTE/////////////////////////////////////////////////////////////////////
    $('#frm-insert').on('submit', function(e) {
        e.preventDefault();
        var data = $(this).serialize();
        var url =  $(this).attr('action');
        var post = $(this).attr('method');
        $.ajax({
            type : post,
            url: url,
            data : data,
            dataTy : 'json',
            success:function(data)
            {
                 var tr =$('<tr/>',{
                     id :data.id
                 });
                    tr.append($("<td/>", {
                        text : data.id
                    })).append($("<td/>", {
                        text : data.rut_client
                    })).append($("<td/>", {
                        text : data.first_name
                    })).append($("<td/>", {
                        text : data.full_last_name
                    })).append($("<td/>", {
                        text : data.email
                    })).append($("<td/>", {
                        text : data.sex
                    })).append($("<td/>", {
                        html: '<a href="#" class="btn btn-info btn-xs" id="view" data-id="'+ 
                        data.id +'">Ver</a> '+'<a href="#" class="btn btn-success btn-xs" id="edit" data-id="'+ data.id +'">Editar</a> '+'\
                        <a href="#" class="btn btn-danger btn-xs" id="del" data-id="'+ data.id +'">Eliminar</a>'
                    }))
                $('#client-info').append(tr);
                $('#myModal').modal('hide');
                $('#panel-datos').show();
                
            }
             
        })
       // console.log(data);
    })
    ///////////////////////////////////////ELIMINAR CLIENTE////////////////////////////////////////////////////////////////////////
    
    $(document).on('click', '#del',function(e) {
        var id = $(this).data('id');
        $.post('{{URL::to("clients/destroy") }}', {id:id},function(data){

            $('#client-info #'+id).remove();
        })

    })
       ////////////////////////////////////FIN ELIMINAR CLIENTE////////////////////////////////////////////////////////////////////


    ///////////////////////////////////////EDITAR CLIENTE/////////////////////////////////////////////////////////////////////////

    $(document).on('click', '#edit',function(e) {
         var id = $(this).data('id');
        $.get('{{URL::to("clients/edit") }}', {id:id},function(data){
            $('#frm-update').find('#rut_client').val(data.rut_client)
            $('#frm-update').find('#first_name').val(data.first_name)
            $('#frm-update').find('#last_name_one').val(data.last_name_one)
            $('#frm-update').find('#last_name_two').val(data.last_name_two)
            $('#frm-update').find('#email').val(data.email)
            $('#frm-update').find('#address').val(data.address)
            $('#frm-update').find('#address_num').val(data.address_num)
            $('#frm-update').find('#address_department').val(data.address_department)
            $('#frm-update').find('#phone_client').val(data.phone_client)
            $('#frm-update').find('#cell_phone_client').val(data.cell_phone_client)
            $('#frm-update').find('#sex_id').val(data.sex_id)
            $('#frm-update').find('#birth_date').val(data.birth_date)
            $('#frm-update').find('#id').val(data.id)
            $('#client-update').modal('show');

        })
    })

    ///////////////////////////////////////FIN EDITAR CLIENTE///////////////////////////////////////////////////////////////////

    ///////////////////////////////////////EDITAR CLIENTE///////////////////////////////////////////////////////////////////////

    $('#frm-update').on('submit', function(e) {
        e.preventDefault();
        var data = $(this).serialize();
        var url = $(this).attr('action');
        $.post(url,data, function(data) {
           
            $('#frm-update').trigger('reset')

                    var tr =$('<tr/>',{
                     id :data.id
                    });
                    tr.append($("<td/>", {
                        text : data.id
                    })).append($("<td/>", {
                        text : data.rut_client
                    })).append($("<td/>", {
                        text : data.first_name
                    })).append($("<td/>", {
                        text : data.full_last_name
                    })).append($("<td/>", {
                        text : data.email
                    })).append($("<td/>", {
                        text : data.sex               
                    })).append($("<td/>", {
                        html: '<a href="#" class="btn btn-info btn-xs" id="view" data-id="'+ 
                        data.id +'">Ver</a> '+'<a href="#" class="btn btn-success btn-xs" id="edit" data-id="'+ data.id +'">Editar</a> '+'\
                        <a href="#" class="btn btn-danger btn-xs" id="del" data-id="'+ data.id +'">Eliminar</a>'
                    }))
                $('#client-info tr#' +data.id).replaceWith(tr);
                  $('#client-update').modal('hide');
        })
    })


    $('#birth_date').datepicker();

        ///////////////////////////////////FIN EDITAR CLIENTE////////////////////////////////////////////////////////////////////////

</script>


@endsection