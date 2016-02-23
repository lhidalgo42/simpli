<?php
$workOrders = Ordenes::orderBy('folio', 'desc')->first();
$folio = $workOrders->folio + 1;
?>

<div class="modal fade" tabindex="-1" role="dialog" id="estimation"
     aria-labelledby="estimationLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Presupuesto...</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="estimateFolio">Folio Presupuesto</label>
                            {{ Form::text('estimateFolio', Input::old('estimateFolio'), array('placeholder' => 'Folio Presupuesto','class' => 'form-control','id' => 'estimateFolio',)) }}
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="estimateDate">Fecha</label>
                            {{ Form::text('estimateDate', Input::old('estimateDate'), array('placeholder' => 'Fecha','class' => 'form-control','id' => 'estimateDate')) }}
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="estimateComition">Comision %</label>
                            {{ Form::text('estimateComition', Input::old('estimateComition'), array('placeholder' => 'Comision %','class' => 'form-control','id' => 'estimateComition')) }}
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-1">
                        <div class="form-group">
                            <label for="estimateArea">Area</label>
                            <select id="estimateArea" class="form-control">
                                <option value="Advertising">Administracion</option>
                                <option value="Advertising">Advertising</option>
                                <option value="Advertising">Corporativo</option>
                                <option value="Advertising">TRANSVERSAL</option>
                                <option value="Advertising">Varios</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="estimateFolioOT">Folio O.T.</label>
                            {{ Form::text('estimateFolioOT', Input::old('estimateFolioOT'), array('placeholder' => 'Folio O.T.','class' => 'form-control','id' => 'estimateFolioOT')) }}
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="estimatePrintFormat">Formato de Impresión</label>
                            <select id="estimatePrintFormat" class="form-control">
                                <option value="printHorizontal">Formato de Impresion Proveedores Horizontal</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="checkbox">
                            <div class="form-group" style="padding-top: 20px;">
                                <label>
                                    <input type="checkbox" id="estimateSubTotalPrint"> Imprimir Sub Totales
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="estimateCoin">Moneda</label>
                            <select id="estimateCoin" class="form-control">
                                <option value="Peso">PESO</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="estimationClient">Cliente</label>
                            <div class="input-group" style="margin-left: 19px;">
                                <div class="input-group-addon"><a href="#" data-toggle="modal" data-target="#estimationClientsModal"><i class="fa fa-search"></i> </a></div>
                                <input type="number" class="form-control" id="estimationClient">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group" style="padding-top: 25px;">
                            <input type="text" class="form-control" id="estimationClientName"   disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="estimateFacturarTO">Facturar a</label>
                                {{ Form::text('estimateFacturarTO', Input::old('estimateFacturarTO'), array('placeholder' => 'Facturar a','class' => 'form-control','id' => 'estimateFacturarTO')) }}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="estimateAsociateUser">Ejecutivo Asociado</label>
                                {{ Form::text('estimateAsociateUser', Input::old('estimateAsociateUser'), array('placeholder' => 'Facturar a','class' => 'form-control','id' => 'estimateAsociateUser')) }}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            buttons
                        </div>

                    </div>
                    <div class="col-md-9">
                        <table class="table">
                            <tr>
                                <th colspan="2"><strong>BOLETA HONORARIO</strong></th>
                                <th colspan="2"><strong>EXENTO I.V.A</strong></th>
                                <th colspan="2"><strong>AFECTO I.V.A</strong></th>
                                <th colspan="2"><strong>TOTAL GENERAL</strong></th>
                            </tr>
                            <tbody>
                            <tr>
                                <td><small class="small">Comisión</small></td>
                                <td><input type="text" class="form-control"></td>
                                <td><small class="small">Comisión</small></td>
                                <td><input type="text" class="form-control"></td>
                                <td><small class="small">Comisión</small></td>
                                <td><input type="text" class="form-control"></td>
                                <td><small class="small">Comisión</small></td>
                                <td><input type="text" class="form-control"></td>

                            </tr>
                            <tr>
                                <td><smail class="small">Exento</smail></td>
                                <td><input type="text" class="form-control"></td>
                                <td><smail class="small">Exento</smail></td>
                                <td><input type="text" class="form-control"></td>
                                <td><smail class="small">Exento</smail></td>
                                <td><input type="text" class="form-control"></td>
                                <td><smail class="small">Exento</smail></td>
                                <td><input type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <td><small class="small">Neto</small></td>
                                <td><input type="text" class="form-control"></td>
                                <td><small class="small">Neto</small></td>
                                <td><input type="text" class="form-control"></td>
                                <td><small class="small">Neto</small></td>
                                <td><input type="text" class="form-control"></td>
                                <td><small class="small">Neto</small></td>
                                <td><input type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <td><small class="small">Retención</small></td>
                                <td><input type="text" class="form-control"></td>
                                <td><small class="small">Retención</small></td>
                                <td><input type="text" class="form-control"></td>
                                <td><small class="small">Retención</small></td>
                                <td><input type="text" class="form-control"></td>
                                <td><small class="small">Retención</small></td>
                                <td><input type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <td><small class="small">Total</small></td>
                                <td><input type="text" class="form-control"></td>
                                <td><small class="small">Total</small></td>
                                <td><input type="text" class="form-control"></td>
                                <td><small class="small">Total</small></td>
                                <td><input type="text" class="form-control"></td>
                                <td><small class="small">Total</small></td>
                                <td><input type="text" class="form-control"></td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nro</th>
                            <th>Descripción</th>
                            <th>Exento</th>
                            <th>Valor Comisión</th>
                            <th>Neto</th>
                            <th>Iva</th>
                            <th>Total</th>
                        </tr>

                    </table>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Acceptar</button>
                <button type="button" class="btn btn-info">Modificar y Enviar</button>
                <button type="button" class="btn btn-warning">Rechazar Presupuesto</button>
                <button type="button" class="btn btn-primary">Grabar</button>
                <button type="button" class="btn btn-danger">Eliminar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
            </div>
        </div>
    </div>
</div>
<script>
    $("#estimation").modal('show');
</script>