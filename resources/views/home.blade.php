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
                    <br><br>
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
                    <br><br>
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
                    <br><br>
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
                <div class="card-header">
                    <strong>Tarea 5. Visualización de Pagos </strong>
                    <br>
                    Descripción: En la misma tabla de la tarea 4 añadir en el campo "memo.nro_memo" un boton para visualizar los pagos registrado en cada memo, la visualizacion debe ser atravez de una ventana emergente y debe utilizar una consulta ajax con Jquery (obligatorio).<br>
                    Campos a mostrar: pagos.id_pago, pagos.cod_pago, pagos.monto_us
                    <br>
                    Tabla: pagos
                </div>

                <div class="card-body">
                    <br><br>
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
                    <br><br>
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
