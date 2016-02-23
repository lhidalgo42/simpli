<div class="modal fade" id="addActivityModal" tabindex="-1" role="dialog" aria-labelledby="addActivityModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Asignar Actividad</h4>
            </div>
            <div class="modal-body">
                <div class="row" style="margin-bottom: 15px;">
                    <span style="width: 15%;float: left;margin-left: 10px;">Area :</span>
                    <span style="width: 75%;float: left"><select id="addActivityArea" class="form-control">
                            <option value="Advertising">Administracion</option>
                            <option value="Advertising">Advertising</option>
                            <option value="Advertising">Corporativo</option>
                            <option value="Advertising">TRANSVERSAL</option>
                            <option value="Advertising">Varios</option>
                        </select></span>
                </div>
                <div class="row" style="margin-bottom: 15px;">
                    <span style="width: 15%;float: left;margin-left: 10px;">Fecha :</span>
                    <span style="width: 75%;float: left"><input type="date" id="addActivityDate" class="form-control"></span>
                </div>
                <div class="row" style="margin-bottom: 15px;">
                    <span style="width: 15%;float: left;margin-left: 10px;">Resumen :</span>
                    <span style="width: 75%;float: left"><input type="text" id="addActivityResumen" class="form-control"></span>
                </div>
                <div class="row" style="margin-bottom: 15px;">
                    <span style="width: 15%;float: left;margin-left: 10px;">Inicio :</span>
                    <span style="width: 30%;float: left"><input type="date" id="addActivityInicio" class="form-control"></span>
                    <span style="width: 13%;float: left;margin-left: 10px;">Termino :</span>
                    <span style="width: 30%;float: left"><input type="date" id="addActivityTermino" class="form-control"></span>
                </div>
                <div class="row" style="margin-bottom: 15px;">
                    <span style="padding-left: 35px;"><a href="#" data-toggle="modal" data-target="#addUserModalToOT"><i class="fa fa-2x fa-user-plus"></i></a></span>
                    <span style="padding-left: 15px;"><a href="#"><i class="fa fa-2x fa-trash"></i></a></span>
                </div>
                <div class="row">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nro</th>
                            <th>Usuario</th>
                            <th>Nombre de Usuario</th>
                            <th>Email</th>
                            <th>/</th>
                        </tr>
                        <tbody id="addActivityToUsers">
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <input type="file" name="file" id="addActivityFile">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
            <div class="row">
                <textarea id="addActivityDescripcion" class="col-xs-12" style="margin-left: 15px;margin-right: 15px;"></textarea>
            </div>
        </div>
    </div>
</div>