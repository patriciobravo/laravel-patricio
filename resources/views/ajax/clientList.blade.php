@foreach ($clients as $value)
        <tr id="{{ $value->id }}">
            <td>{{ $value->id}}</td>
            <td>{{ $value->rut_client}}</td>
            <td>{{ $value->first_name}}</td>
            <td>{{ $value->full_last_name}}</td>
            <td>{{ $value->email}}</td>
            <td>{{ $value->sex }}</td>
            <td>
                <a href="#" class="btn btn-info btn-xs" id="ver"data-id="{{ $value->id }}">Ver</a>
                <a href="#" class="btn btn-success btn-xs" id="edit"data-id="{{ $value->id }}">Editar</a>
                <a href="#" class="btn btn-danger btn-xs" id="del" data-id="{{ $value->id }}">Eliminar</a>
            </td>
        </tr>
    
@endforeach