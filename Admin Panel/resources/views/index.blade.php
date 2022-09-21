<x-master>
<div class="col-md-11" id="sidebar-right-section">
    <div class="row mt-5">
        <div class="dashboard-card col-3 ">
            <div class="card-left-section">
                <i class="fa-solid fa-users"></i>
            </div>
            <div class="card-right-section">
                <div class="count">
                    <h1>9999</h1>
                </div>
                <div class="title">Total Clients</div>

            </div>
        </div>
        <div class="dashboard-card col-3 mx-1">
            <div class="card-left-section">
                <i class="fa-solid fa-rectangle-list"></i>
            </div>
            <div class="card-right-section">
                <div class="count">
                    <h1>9999</h1>
                </div>
                <div class="title">Total Categories</div>

            </div>
        </div>
        <div class="dashboard-card col-3 mx-1">
            <div class="card-left-section">
                <i class="fa-solid fa-sack-dollar"></i>
            </div>
            <div class="card-right-section">
                <div class="count">
                    <h1>9999</h1>
                </div>
                <div class="title">Total Sold</div>

            </div>
        </div>
        <div class="dashboard-card col-3">
            <div class="card-left-section">
                <i class="fa-solid fa-cart-shopping"></i>
            </div>
            <div class="card-right-section">
                <div class="count">
                    <h1>9999</h1>
                </div>
                <div class="title">Total Products</div>

            </div>
        </div>

    </div>
    <div class="container">
        <div class="row mt-5" style="margin-top:100px !important;">
            <div class="col-md-3">
                <div>
                    <p>New Products Added :</p>
                </div>
                <div>
                    <p>New User increase This Year :</p>
                </div>
                <div>
                    <p>Seles increase This Year :</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
                </div>
                <div class="progress mt-4">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%">35%</div>
                </div>
                <div class="progress mt-4" style="margin-top:28px !important ;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">60%</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6">
            <canvas id="sellchart" style="width:100%;max-width:700px"></canvas>
        </div>
        <div class="col-md-6">
            <canvas id="userchart" style="width:100%;max-width:700px;"></canvas>
        </div>
    </div>

</div>
<x-slot:title>
    Admin | Ki CHai
</x-slot>
    <x-slot:scripts>
         <script>
            $(document).ready(function() {
                // search box 
                let node = $('#input-search-box');
                $(node).on('focus', function() {
                    $(node).next('.line').css('left', 0);
                }).on('focusout', function() {
                    $(node).next('.line').css('left', '-120%');

                });
                // sidebar toggle
                $("#sidebar-toggler-btn").on('click', function() {
                    if ($("#sidebar").css("left") == "0px") {
                        $("#sidebar").css("left", "-230px");
                        $('#sidebar-toggler-btn').css("left", "10px");
                        $('#sidebar-toggler-btn i').css("transform", "rotate(0deg)");
                        $('#sidebar-right-section').removeClass('col-md-10');
                        $('#sidebar-right-section').addClass('col-md-11');
                        $('#sidebar-left-section').removeClass('col-md-2');
                        $('#sidebar-left-section').addClass('col-md-1');
                    } else {
                        $("#sidebar").css("left", "0");
                        $('#sidebar-toggler-btn').css("left", "230px");
                        $('#sidebar-toggler-btn i').css("transform", "rotate(180deg)");

                        $('#sidebar-right-section').removeClass('col-md-11');
                        $('#sidebar-right-section').addClass('col-md-10');
                        $('#sidebar-left-section').removeClass('col-md-1');
                        $('#sidebar-left-section').addClass('col-md-2');


                    }
                });

            });




            (function userchart() {
                var xValues = ["Dhaka", "Gazipur", "Narsingdi", "Tangail", "Others"];
                var yValues = [55, 49, 44, 24, 15];
                var barColors = [
                    "#F44336",
                    "#AB47BC",
                    "#E91E63",
                    "#42A5F5",
                    "#FFEE58"
                ];

                new Chart("userchart", {
                    type: "pie",
                    data: {
                        labels: xValues,
                        datasets: [{
                            backgroundColor: barColors,
                            data: yValues
                        }]
                    },
                    options: {
                        title: {
                            display: true,
                            text: "Clients Location"
                        }
                    }
                });
            })();


            (function sellchart() {
                var xValues = ["jan", "feb", "mar", "apr", "may", "jun", "jul", "aug", "sep", "oct", "nov", "dec"];
                var yValues = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 90, 70];

                new Chart("sellchart", {
                    type: "line",
                    data: {
                        labels: xValues,
                        datasets: [{
                            fill: false,
                            lineTension: 0,
                            backgroundColor: "rgba(0,0,255,1.0)",
                            borderColor: "rgba(0,0,255,0.1)",
                            data: yValues
                        }]
                    },
                    options: {
                        legend: {
                            display: false
                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    min: 0,
                                    max: 100
                                }
                            }],
                        },
                        title: {
                            display: true,
                            text: "Sell Increase in percentage"
                        }
                    }
                });
            })();
        </script>
        </x-slot>
</x-master>

