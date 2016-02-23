<div class="modal fade" tabindex="-1" role="dialog" id="clientsModal" aria-labelledby="clientsModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Clientes</h4>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-condensed">
                    <tr>
                        <th>RUT</th>
                        <th>Descripción</th>
                        <th>Contacto</th>
                        <th>Telefono</th>
                    </tr>
                    <tbody id="clients-table">
                    </tbody>
                    <tfoot>
                    <tr>
                        <td>Nombre :</td>
                        <td colspan="3"><input type="text" id="autoCompleteClients" class="form-control"></td>
                    </tr>
                    </tfoot>

                </table>
            </div>
            <div class="modal-footer">
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
    $("#autoCompleteClients").keyup(function(){
        $.ajax({
            url:'/autocomplete/clients',
            type:'POST',
            data:{client:$(this).val()},
            success:function(data){
                $("#clients-table").html('');
                for(var i = 0; i< data.length;i++){
                    $("#clients-table").append('<tr>' +
                            '<td><a href="#" client-id="'+data[i]['id']+'" name="'+data[i]['nombre']+'">'+data[i]['rut']+'</a></td>' +
                            '<td><a href="#" client-id="'+data[i]['id']+'" name="'+data[i]['nombre']+'">'+data[i]['giro']+'</a></td>' +
                            '<td><a href="#" client-id="'+data[i]['id']+'" name="'+data[i]['nombre']+'">'+data[i]['contacto']+'</a></td>' +
                            '<td><a href="#" client-id="'+data[i]['id']+'" name="'+data[i]['nombre']+'">'+data[i]['telefono']+'</a></td>' +
                            '</tr>');
                }
                $("#clients-table").children('tr').children('td').children('a').click(function () {
                    $("#workOrderClient").val($(this).attr('client-id'));
                    $("#clientsModal").modal('hide');
                    var today = new Date(); var dd = today.getDate();var mm = today.getMonth()+1;var yyyy = today.getFullYear();
                    if(dd<10){dd='0'+dd;} if(mm<10){ mm='0'+mm;}
                    today = yyyy+'-'+mm+'-'+dd;
                    $("#workOrderInicio").val(today);
                    $("#workOrderTermino").val(today);
                    $("#workOrderClientName").val($(this).attr('name'));
                    $.post('/get/numeroatencion',{client:$(this).attr('client-id')}).done(function(data){
                        $("#workOrderAtentionNumber").val(data['numero']);
                        console.log(data);
                    });

                })

            }
        })
    });
</script>