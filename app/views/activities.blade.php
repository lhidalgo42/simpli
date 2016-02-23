@extends('layouts.master')
@section('content')

    <?php $c = 0;
    $now = time();
    $day = 60 * 60 * 24;
    $yesterday = $now - $day;
    $yesterday = date("Y-m-d", $yesterday);
    ?>
    <div class="row" style="padding: 25px; ">
        <div class="col-md-4">
            <input type="date" class="form-control" value="{{$yesterday}}" disabled>
        </div>
        <div class="col-md-4 col-md-offset-4 pull-right">
            <button class="btn btn-primary disabled" id="save" disabled="disabled">Guardar</button>
        </div>
    </div>
    <div class="row" style="background-color: white;">
        <table class="table table-bordered img-rounded" style="margin: 15px 10px 22px 0px;">
            <tr>
                <th>Nro</th>
                <th>Cliente</th>
                <th>Cantidad Asignanciones</th>
                <th>Horas Trabajadas</th>
            </tr>
            @foreach($activities as $activity)
                <?php $c++; ?>
                <tr>
                    <td>{{$c}}</td>
                    <td>{{$activity->nombrecli}}</td>
                    <td>{{$activity->cantidadasig}}.00</td>
                    <td><input class="form-control ht" type="number" min="0" max="10" step="0.1" client-id="{{$activity->cliente}}" value="0.00"></td>
                </tr>
            @endforeach
        </table>
        <script>
            $(".ht").keydown(function () {
                var save = $("#save").removeAttr('disabled').removeClass('disabled');
            });
            $("#save").click(function () {
                var ht = $(".ht");
                var cantidad = ht.size();
                var datos = new Array();
                var arreglo;
                for (var i = 0; i < cantidad; i++) {
                    if($(ht[i]).val() > 0){
                        arreglo = { cliente : $(ht[i]).attr('client-id') , horas: $(ht[i]).val()};
                        datos.push(arreglo)
                        console.log(arreglo);
                    }
                }
                $.ajax({
                    url: "/activities/update",
                    type: 'POST',
                    data: {data:datos},
                    success: function (data) {
                        if(data == 200){
                            window.location.href = '/';
                        }
                    }
                })
            });
        </script>
    </div>
@stop
