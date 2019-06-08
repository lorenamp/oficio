@extends('layouts.master_roles')

@section('contenido')

    <div class="row">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Pagination types</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
                Descripcion
            </div>

            <table class="table datatable-pagination">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Area</th>
                    <th>Descripción</th>
                    <th>Fecha de creación</th>
                    <th>Fecha de repuesta</th>
                    <th>Status</th>
                    <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Marth</td>
                    <td><a href="#">Enright</a></td>
                    <td>Traffic Court Referee</td>
                    <td>22 Jun 1972</td>
                    <td>22 Jun 1972</td>
                    <td><span class="label label-success">Active</span></td>
                    <td class="text-center">
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#"><i class="glyphicon glyphicon-folder-open"></i>Responder</a></li>
                                    <li><a href="#"><i class="glyphicon glyphicon-trash"></i>Eliminar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>Marth</td>
                    <td><a href="#">Enright</a></td>
                    <td>Traffic Court Referee</td>
                    <td>22 Jun 1972</td>
                    <td>22 Jun 1972</td>
                    <td><span class="label label-success">Active</span></td>
                    <td class="text-center">
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#"><i class="glyphicon glyphicon-folder-open"></i>Responder</a></li>
                                    <li><a href="#"><i class="glyphicon glyphicon-trash"></i>Eliminar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>Marth</td>
                    <td><a href="#">Enright</a></td>
                    <td>Traffic Court Referee</td>
                    <td>22 Jun 1972</td>
                    <td>22 Jun 1972</td>
                    <td><span class="label label-success">Active</span></td>
                    <td class="text-center">
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#"><i class="glyphicon glyphicon-folder-open"></i>Responder</a></li>

                                    <li><a href="#"><i class="glyphicon glyphicon-trash"></i>Eliminar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection