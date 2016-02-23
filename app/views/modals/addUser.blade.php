<div class="modal fade" id="addUserModalToOT" tabindex="-1" role="dialog" aria-labelledby="addUserModalToOTLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Asignar Usuarios <small>con <strong>CTRL</strong> puede seleccionar mas de 1 a la vez</small></h4>
            </div>
            <div class="modal-body">
                <div class="row" style="padding-left: 15px;padding-right: 15px;">
                    <?php $users = User::select('codigo','nombre','id','email')->get(); ?>

                    <select multiple="multiple" class="form-control" id="usersList" style="height: 120px;">
                        @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row">
                    <div class="pull-right" style="padding-top: 30px;padding-right: 30px;">
                        <button type="button" id="sendUsersToNewActivity" class="btn btn-default">Seleccionar</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#sendUsersToNewActivity").click(function(){
        var users = {{$users}};
        var selected = $("#usersList").val();
        $("#usersList").val([]);
        $("#addActivityToUsers").html('');
        for(var i =0;i<selected.length;i++) {
            var a=i+1;
            for(var j =0;j<users.length;j++) {
                if (users[j].id == parseFloat(selected[i])) {

                    $("#addActivityToUsers").append('' +
                            '<tr user-id="'+users[j]['id']+'">' +
                            '<td>'+a+'</td>' +
                            '<td>'+users[j]['nombre']+'</td>' +
                            '<td>'+users[j]['codigo']+'</td>' +
                            '<td>'+users[j]['email']+'</td>' +
                            '<td><a href="#"><i class="fa fa-trash-o"></a></td>' +
                            '</tr>')
                }
            }
        }
        $("#addActivityToUsers").find('.fa-trash-o').parent().click(function(){
           $(this).parent('td').parent('tr').remove();
        });

        $("#addUserModalToOT").modal('hide');
    })
</script>