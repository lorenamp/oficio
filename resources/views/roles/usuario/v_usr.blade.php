@extends('layouts.master_roles')

@section('contenido')

    <div class="row">
        <div class="col-sm-10">
    <!-- Form horizontal -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Registro de Oficio</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">
            <form class="form-horizontal" action="#">
                <fieldset class="content-group">
                    <legend class="text-bold">Registro</legend>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Nombre</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Area</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2">Descripción</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    </legend>
                </fieldset>

            </form>
        </div>
    </div>
    <!-- /form horizontal -->
        </div>
    </div>
@endsection