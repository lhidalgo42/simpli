<?php
$workOrders = Ordenes::orderBy('folio', 'desc')->first();
$folio = $workOrders->folio + 1;
?>

<div class="modal fade" id="workOrdersModal" tabindex="-1" role="dialog" aria-labelledby="workOrders">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Orden de Trabajos</h4>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-4 form-inline">
                            <div class="form-group">
                                <label for="workOrderFolioOT">Folio O.T. </label>
                                <input type="number" class="form-control" id="workOrderFolioOT" value="{{$folio}}">
                            </div>
                        </div>
                        <div class="col-xs-8 form-inline">
                            <div class="form-group">
                                <label for="workOrderArea">Area </label>
                                <select id="workOrderArea" class="form-control">
                                    <option value="Advertising">Administracion</option>
                                    <option value="Advertising">Advertising</option>
                                    <option value="Advertising">Corporativo</option>
                                    <option value="Advertising">TRANSVERSAL</option>
                                    <option value="Advertising">Varios</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="row" style="padding-top: 5px;">
                        <div class="col-xs-4 form-inline">
                            <div class="form-group">
                                <label for="workOrderClient">Cliente </label>
                                <div class="input-group" style="margin-left: 19px;">
                                    <div class="input-group-addon"><a href="#" data-toggle="modal" data-target="#clientsModal"><i class="fa fa-search"></i> </a></div>
                                    <input type="number" class="form-control" id="workOrderClient">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <div class="form-group">
                                <input type="text" class="form-control" id="workOrderClientName" style="width: 440px;" disabled>
                            </div>
                        </div>
                    </div>



                    <div class="row" style="padding-top: 5px;">
                        <div class="col-xs-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="workOrderAplicaFEE"> Aplica FEE
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-3    form-inline">
                            <div class="form-group">
                                <label for="workOrderAtentionNumber">Nro. Atención :</label>
                                <input type="number" class="form-control" id="workOrderAtentionNumber" disabled style="width: 150px;">
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="workOrderRequierePresupuesto"> Requiere Presupuesto
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="padding-top: 5px;">
                        <div class="form-inline">
                            <div class="form-group">
                                <label for="workOrderInicio">Inicio </label>
                                <input type="text" function="datepicker" class="form-control" id="workOrderInicio">
                            </div>
                            <div class="form-group" style="padding-left: 40px;">
                                <label for="workOrderTermino">Termino </label>
                                <input type="text" function="datepicker" class="form-control" id="workOrderTermino">
                            </div>
                            <div class="form-group" style="padding-left: 40px;">
                                <label for="workOrderCoin">Moneda </label>
                                <select class="form-control" id="workOrderCoin">
                                    <option value="peso">PESO</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="row" style="padding-top: 5px;">
                        <textarea id="workOrderTextarea" class="form-control" style="width: 865px;"></textarea>
                    </div>

                    <div class="row" style="padding-top: 5px;">
                        <a href="#"><i class="fa fa-2x fa-history"></i></a>
                        <a href="#" data-toggle="modal" data-target="#addActivityModal"><i class="fa fa-2x fa-calendar-plus-o"></i></a>
                        <a href="#"><i class="fa fa-2x fa-pencil-square-o"></i></a>
                        <a href="#"><i class="fa fa-2x fa-trash-o"></i></a>
                    </div>
                    <div class="row" style="padding-top: 5px;">
                        <table class="table table-bordered" style="width: 865px;">
                            <thead>
                            <tr>
                                <th>Nro</th>
                                <th>Area</th>
                                <th>Resumen</th>
                                <th>Inicio</th>
                                <th>Termino</th>
                                <th>Descripcion</th>
                            </tr>
                            </thead>
                        </table>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info">Presupuesto</button>
                <button type="button" class="btn btn-primary">Historial</button>
                <button type="button" class="btn btn-success">Acceptar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
            </div>
        </div>
    </div>
</div>
