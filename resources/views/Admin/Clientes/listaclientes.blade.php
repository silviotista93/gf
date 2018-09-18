@extends('Admin.layout')

@section('contenido')

    @section('headerClientes')
        <div class="page-title-box">
            <h4 class="page-title">Lista de Clientes </h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Bienvenido este es el panel para ver los clientes !</li>
            </ol>
        </div>
        @endsection

    <div class="row">
        <div class="col-12">
            <div class="card-box table-responsive">
                <table id="table_clientes" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Mensanje</th>
                        <th>Fecha Registro</th>
                    </tr>
                    </thead>

                </table>
            </div>
        </div>
    </div> <!-- end row -->

    <!-- TABLA DINAMICA Clientes-->
@section('dataTablesClientes')
    <script>
        $('#table_clientes').DataTable({
            "processing": true,
            "serverSide": true,
            "data": null,
            "ajax": "{{route('todosClientes')}}",
            "columns":[
                {data: 'nombre'},
                {data: 'apellidos'},
                {data: 'email'},
                {data: 'telefono'},
                {data: 'mensaje'},
                {data: 'created_at'},
            ],
            "language":{
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });

    </script>

@endsection
@stop