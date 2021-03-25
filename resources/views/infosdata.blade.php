@extends('skeleton');
@section('content')


<div id="tabs">
    <ul>
        <li><a href="#tabs-1">Evolution de la population ivoirienne</a></li>
        <li><a href="#tabs-2">Les données de la population ivoirienne </a></li>
    </ul>
    <div id="tabs-1">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <canvas id="popId" height="400" width="600"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="tabs-2">
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!--  page header -->
                <div class="col-lg-12">
                    <h2 class="page-header">Population de la Côte d'Ivoire (2020 et historique)</h2>
                </div>
                <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">

                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Années</th>
                                            <th>Population</th>
                                            <th>Taux de croissance</th>
                                            <th>Croissance annuelle</th>
                                            <th>Mvt migratoire</th>
                                            <th>Moyenne d'age</th>
                                            <th>Taux de fertilité</th>
                                            <th>Densité (P/Km²)</th>
                                            <th>% Population urbaine</th>
                                            <th>Population urbaine</th>
                                            <th>Echange mondial</th>
                                            <th>Population mondiale</th>
                                            <th>Rang mondial</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {!!$data[0]!!}
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>

        </div>
        <!-- end page-wrapper -->
    </div>
</div>

<script>
    $(function() {
        $("#tabs").tabs();

        $('#dataTables-example').dataTable({
            "order": [
                [0, "desc"]
            ]
        });

        var popValue = [],
            year = [];

        //Iterate all td's in second column
        $('#dataTables-example tbody tr td:nth-child(1)').each(function() {
            //add item to year array
            year.push($(this).text());
        });

        $('#dataTables-example tbody tr td:nth-child(2)').each(function() {
            //add item to popValue array
            var res = $(this).text().replace(",", ".").replace(",", ".");
            popValue.push(parseFloat(res));
        });

        console.log('popValue : ');
        console.log(popValue);

        console.log('year : ');
        console.log(year);

        var barChartData = {
            labels: year.sort(),
            datasets: [{
                label: 'Population',
                backgroundColor: "pink",
                data: popValue.sort()
            }]
        };

        //window.onload = function() {
        var ctx = document.getElementById("popId").getContext("2d");
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                elements: {
                    rectangle: {
                        borderWidth: 2,
                        borderColor: '#c1c1c1',
                        borderSkipped: 'bottom'
                    }
                },
                responsive: true,
                title: {
                    display: true,
                    text: 'Evolution de la population ivoirienne'
                }
            }
        });
        //};

    });
</script>

@endsection