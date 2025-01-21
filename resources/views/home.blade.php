@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <br>

    {{-- T1 BEGIN --}}
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <strong>Tarea 1. Listado de Clientes </strong>
                    <br>
                    Descripción: Listar en una tabla los clientes registrados en el sistema<br>
                    Campos a mostrar: id_cliente, codigo_cliente, razon_social, nit_ci, fecha_cre <br>
                    Ordenar por: razon_social ASC
                    <br>
                    Tabla: clientes
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID Cliente</th>
                                <th>Código Cliente</th>
                                <th>Razón Social</th>
                                <th>NIT/CI</th>
                                <th>Fecha Creación</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($clientes as $cliente)
                                <tr>
                                    <td>{{ $cliente->id_cliente }}</td>
                                    <td>{{ $cliente->codigo_cliente }}</td>
                                    <td>{{ $cliente->razon_social }}</td>
                                    <td>{{ $cliente->nit_ci }}</td>
                                    <td>{{ $cliente->fecha_cre }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">No hay clientes registrados.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- T1 END --}}
    {{-- T2 BEGIN --}}
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <strong>Tarea 2. Listado de Memos </strong>
                    <br>
                    Descripción: Listar en una tabla los memos registrados en el sistema<br>
                    Campos a mostrar: id_memo, nro_memo, poliza, id_cliente, prima_total, vigencia_desde <br>
                    Ordenar por: vigencia_desde DESC
                    <br>
                    Tabla: memos
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID Memo</th>
                                <th>Número de Memo</th>
                                <th>Póliza</th>
                                <th>ID Cliente</th>
                                <th>Prima Total</th>
                                <th>Vigencia Desde</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($memos as $memo)
                                <tr>
                                    <td>{{ $memo->id_memo }}</td>
                                    <td>{{ $memo->nro_memo }}</td>
                                    <td>{{ $memo->poliza }}</td>
                                    <td>{{ $memo->id_cliente }}</td>
                                    <td>{{ $memo->prima_total }}</td>
                                    <td>{{ $memo->vigencia_desde }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">No hay memos registrados.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- T2 END --}}
    {{-- T3 BEGIN --}}
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <strong>Tarea 3. Listado de Siniestros </strong>
                    <br>
                    Descripción: Listar en una tabla los siniestros registrados en el sistema<br>
                    Campos a mostrar: id_siniestro, nro_siniestro, id_memo, fecha_sin, descripcion<br>
                    Ordenar por: fecha_sin DESC
                    <br>
                    Tabla: siniestros
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID Siniestro</th>
                                <th>Número de Siniestro</th>
                                <th>ID Memo</th>
                                <th>Fecha del Siniestro</th>
                                <th>Descripción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($siniestros as $siniestro)
                                <tr>
                                    <td>{{ $siniestro->id_siniestro }}</td>
                                    <td>{{ $siniestro->nro_siniestro }}</td>
                                    <td>{{ $siniestro->id_memo }}</td>
                                    <td>{{ $siniestro->fecha_sin }}</td>
                                    <td>{{ $siniestro->descripcion }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">No hay siniestros registrados.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- T3 END --}}
    {{-- T4 BEGIN --}}
     <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <strong>Tarea 4. Listar todos los clientes + memos + siniestros </strong>
                    <br>
                    Descripción: Listar en una tabla los clientes con sus memos y siniestros registrados<br>
                    Campos a mostrar: clientes.id_cliente, clientes.razon_social, clientes.codigo_cliente, memo.nro_memo, memo.poliza, memo.vigencia_hasta, siniestro.nro_siniestro, siniestro.descripcion
                    <br>
                    Ordenar por: clientes.razon_social ASC
                    <br>
                    Tabla: clientes, memos, siniestros
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID Cliente</th>
                                <th>Razón Social</th>
                                <th>Código Cliente</th>
                                <th>Número de Memo</th>
                                <th>Póliza</th>
                                <th>Vigencia Hasta</th>
                                <th>Número de Siniestro</th>
                                <th>Descripción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($clientes as $cliente)
                                @forelse ($cliente->memos as $memo)
                                    @forelse ($memo->siniestros as $siniestro)
                                        <tr>
                                            <td>{{ $cliente->id_cliente }}</td>
                                            <td>{{ $cliente->razon_social }}</td>
                                            <td>{{ $cliente->codigo_cliente }}</td>
                                            <td>{{ $memo->nro_memo }}</td>
                                            <td>{{ $memo->poliza }}</td>
                                            <td>{{ $memo->vigencia_hasta }}</td>
                                            <td>{{ $siniestro->nro_siniestro }}</td>
                                            <td>{{ $siniestro->descripcion }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td>{{ $cliente->id_cliente }}</td>
                                            <td>{{ $cliente->razon_social }}</td>
                                            <td>{{ $cliente->codigo_cliente }}</td>
                                            <td>{{ $memo->nro_memo }}</td>
                                            <td>{{ $memo->poliza }}</td>
                                            <td>{{ $memo->vigencia_hasta }}</td>
                                            <td colspan="2" class="text-center">No hay siniestros</td>
                                        </tr>
                                    @endforelse
                                @empty
                                    <tr>
                                        <td>{{ $cliente->id_cliente }}</td>
                                        <td>{{ $cliente->razon_social }}</td>
                                        <td>{{ $cliente->codigo_cliente }}</td>
                                        <td colspan="5" class="text-center">No hay memos</td>
                                    </tr>
                                @endforelse
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center">No hay clientes registrados.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-header">
                    <strong>Tarea 5. Visualización de Pagos </strong>
                    <br>
                    Descripción: En la misma tabla de la tarea 4 añadir en el campo "memo.nro_memo" un boton para visualizar los pagos registrado en cada memo, la visualizacion debe ser atravez de una ventana emergente y debe utilizar una consulta ajax con Jquery (obligatorio).<br>
                    Campos a mostrar: pagos.id_pago, pagos.cod_pago, pagos.monto_us
                    <br>
                    Tabla: pagos
                </div>

                <div class="card-body">
                     <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID Cliente</th>
                    <th>Razón Social</th>
                    <th>Código Cliente</th>
                    <th>Número de Memo</th>
                    <th>Póliza</th>
                    <th>Vigencia Hasta</th>
                    <th>Número de Siniestro</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientesp4 as $cliente)
                    @foreach ($cliente->memos as $memo)
                        @foreach ($memo->siniestros as $siniestro)
                            <tr>
                                <td>{{ $cliente->id_cliente }}</td>
                                <td>{{ $cliente->razon_social }}</td>
                                <td>{{ $cliente->codigo_cliente }}</td>
                                <td>
                                    {{ $memo->nro_memo }}
                                    <button class="btn btn-primary btn-sm view-pagos" data-memo-id="{{ $memo->id_memo }}">
                                        Ver Pagos
                                    </button>
                                </td>
                                <td>{{ $memo->poliza }}</td>
                                <td>{{ $memo->vigencia_hasta }}</td>
                                <td>{{ $siniestro->nro_siniestro }}</td>
                                <td>{{ $siniestro->descripcion }}</td>
                            </tr>
                        @endforeach
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>

 
    <div class="modal fade" id="pagosModal" tabindex="-1" aria-labelledby="pagosModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pagosModalLabel">Pagos del Memo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID Pago</th>
                                <th>Código de Pago</th>
                                <th>Monto (US$)</th>
                            </tr>
                        </thead>
                        <tbody id="pagosTableBody">
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.view-pagos').click(function() {
                const memoId = $(this).data('memo-id');
                const modal = new bootstrap.Modal(document.getElementById('pagosModal'));
                $('#pagosTableBody').html('');
                $.ajax({
                    url: `/pagos/${memoId}`,
                    method: 'GET',
                    success: function(response) {
                        if (response.length > 0) {
                            response.forEach(function(pago) {
                                $('#pagosTableBody').append(`
                                    <tr>
                                        <td>${pago.id_pago}</td>
                                        <td>${pago.cod_pago}</td>
                                        <td>${pago.monto_us}</td>
                                    </tr>
                                `);
                            });
                        } else {
                            $('#pagosTableBody').append(`
                                <tr>
                                    <td colspan="3" class="text-center">No hay pagos registrados.</td>
                                </tr>
                            `);
                        }
                        modal.show();
                    },
                    error: function() {
                        alert('Error al obtener los pagos.');
                    }
                });
            });
        });
    </script>
   
                </div>
            </div>
        </div>
    </div>
    <br><br>
    {{-- T4 END --}}
     {{-- T5 BEGIN --}}
     <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <strong>Tarea 6. Desplegar en texto cuantos pagos realizo el cliente 'TEODORO CALERO' y a que monto aciende la sumatoria de todos sus pagos</strong>
                </div>
                <div class="card-body">
                    <div class="mt-4">
                        <h3>Resumen de Pagos para TEODORO CALERO</h3>
                        <p><strong>Total de Pagos Realizados:</strong> {{ $totalPagos }}</p>
                        <p><strong>Monto Total de Pagos (US$):</strong> ${{ number_format($sumaPagos, 2) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    {{-- T5 END --}}
    {{-- T6 BEGIN --}}
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <strong>Tarea 7. Desplegar en texto cuantos memos tiene el cliente 'ALVERT REVUELTA' y cuales son sus fechas de vigencia</strong>
                </div>
                <div class="card-body">
                    <br><br>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    {{-- T6 END --}}
    <div class="card border-success mb-12" >
        <div class="card-header">NOTAS.</div>
        <div class="card-body text-success">
            <h5 class="card-title">1. El presente entorno ya cuenta con Bootstrap 5 y Jquery</h5>
            <h5 class="card-title">2. Se valorara el uso de estilos y maquetado con Bootstrap</h5>
            <h5 class="card-title">3. Se valorara el uso de buenas prácticas de programación, la buena identación y organización del código</h5>
        </div>
        <div class="card-body text-danger">
            <h5 class="card-title"></h5>
            <h5 class="card-title">No es necesario instalar nuevos plugins o librerias adicionales</h5>
        </div>
      </div>
</div>
@endsection
