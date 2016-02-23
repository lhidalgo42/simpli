<?php
$workOrders = Ordenes::orderBy('folio', 'desc')->first();
$folio = $workOrders->folio + 1;
?>

<div class="modal fade" tabindex="-1" role="dialog" id="userAssignations"
     aria-labelledby="userAssignationsLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Cerrar Asignaciones Usuario : Administrador al {{date('d/m/Y')}}</h4>
            </div>
            <div class="modal-body">
                <div class="row" style="padding-bottom: 30px;">
                    buttons
                </div>
                <div class="row">
                    <table class="table table-bordered">
                        <tr>
                            <th>Folio</th>
                            <th>Aplica Fee</th>
                            <th>Requiere Presupuesto</th>
                            <th>Realizado</th>
                            <th>Cerrado</th>
                            <th>Fecha</th>
                            <th>Solicitante</th>
                            <th>Usuario</th>
                            <th>Area</th>
                            <th>Cliente</th>
                        </tr>
                        <tbody>
                        <?php
        // TODO data pendiente
        ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Acceptar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
            </div>
        </div>
    </div>
</div>
<script>
   // $("#userAssignations").modal('show');
</script>