<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>Quantam | X-Alpha</title>
    @include('user.partials.head')
</head>

<body>
    <!----------------------------------------top area start---------------------------------------->
    @include('user.partials.nav')
    <!----------------------------------------top area end---------------------------------------->

    <!----------------------------------------main area start---------------------------------------->
    <main class="main-area bgcolor">
        <!--top-about area start-->
        <section class=" pt-200 pb-50">
            <div class="container">
                <div class="top-about-area">
                    <div class="row">
                        <div class="col-xl-3 col-md-12 col-sm-12">
                            <div class="Need-Help-box">
                                <div class="need-box-content" data-aos="fade-down" data-aos-duration="1000">
                                    <h4>
                                        Need Help ?
                                    </h4>
                                    <p>Please feel free to contact us. We will get back to you as soon as possible.
                                    </p>
                                    <div class="responsive-pdf">
                                        @foreach(App\Brochure::latest()->limit(1)->get() as $cat)
                                        <a href="{{asset('uploads/brochure/'.$cat->brochure_file)}}">
                                            <div class="download-pdf" style="margin: 20px 0;">
                                                <img src="{{asset('frontend-asstets/assets/image/pdf/1.svg')}}" alt="">
                                                <span>download now</span>
                                            </div>
                                        </a>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <div class="without-responsive-pdf" data-aos="fade-up" data-aos-duration="1000">
                                @foreach(App\Brochure::latest()->limit(1)->get() as $cat)
                                <a href="{{asset('uploads/brochure/'.$cat->brochure_file)}}">
                                    <div class="BROCHURE">
                                        <h5>GET THE BROCHURE </h5>
                                        <div class="icon">
                                            <img src="{{asset('frontend-asstets/assets/image/Quantam_X_Alpha/1.svg')}}"
                                                alt="">
                                            <img src="{{asset('frontend-asstets/assets/image/Quantam_X_Alpha/2.svg')}}"
                                                alt="">
                                        </div>
                                        <p>Download the pdf file of latest update for this service.
                                        </p>
                                    </div>
                                </a>
                                @endforeach



                            </div>

                        </div>
                        <div class="col-xl-9 col-md-12 col-sm-12">
                            <div class="right-strategy">
                                <div class="row d-flex align-items-center mb-40">
                                    <div class="col-xl-5 col-md-4">
                                        <div class="strategy-image-letf" data-aos="fade-right" data-aos-duration="1000">
                                            <img src="{{asset('frontend-asstets/assets/image/Quantam_X_Alpha/1.png')}}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-md-8" data-aos="fade-left" data-aos-duration="1000">
                                        <div class="col-xl-12">
                                            <h2> STRATEGY</h2>
                                        </div>
                                        <div class="strategy-detail">
                                            <p>The Quantum-X algorithm has been developed to take advantage of market
                                                swing points which are witnessed within the Forex markets during times
                                                of high volatility. The algorithm has been developed to trade when
                                                markets conditions are stable, and they perform various checks which are
                                                required to be true in order for a trade to be executed. It has been
                                                proven to perform during long periods of time and is used across various
                                                forex pairs in order to find the most suitable pair(s) for it to execute
                                                trades.
                                            </p>
                                            <p>The strategy used within the algorithm analyses potential swing points,
                                                comparing the highs and lows for current market sessions to historical
                                                swing points, and this provides us with an advantage in the market.
                                            </p>
                                            <p>The system is built on more than 8,000 lines of coding, with each line
                                                operating a different function to provide optimum results.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row d-flex align-items-center">
                                    <div class="col-xl-7 col-md-8" data-aos="fade-right" data-aos-duration="1000">
                                        <h2>ACTIVE SESSIONS</h2>
                                        <div class="strategy-detail">
                                            <p>After testing on many different time-frames, we have analysed data and
                                                come to a realization that the algorithm works best after the US session
                                                comes to an end and during the Australian and Tokyo sessions, as low
                                                volatility in the markets allows the algorithm to trade better, limiting
                                                drawdown levels and providing stable returns on investments.
                                            </p>
                                        </div>


                                    </div>
                                    <div class="col-xl-5 col-md-4 ">
                                        <div class="strategy-image-letf" data-aos="fade-left" data-aos-duration="1000">
                                            <img src="{{asset('frontend-asstets/assets/image/Quantam_X_Alpha/2.png')}}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--top-about area start-->
        <!--home-Statistics-area-start-->
        <section class="pt-100 pb-100 graybg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-12 col-sm-12">
                        <div class="bar-chart">
                            <h4><span>Pie </span> Chart</h4>
                            <span>Pie Chart</span>
                        </div>
                        <canvas id="myChart2" style="max-width: 600px; max-height: 400px;"></canvas>
                        <script>
                            var urll = "{{url('stock/piechartjson')}}";
                            var Pielabel = new Array();
                            var Pielabels = new Array();
                            var Piedata = new Array();
                            $(document).ready(function () {
                                $.get(urll, function (response) {
                                    response.forEach(function (data) {
                                        Pielabel.push(data.label_1);
                                        Pielabels.push(data.labels_1);
                                        Piedata.push(data.data_1);
                                    });
                                    var ctx = document.getElementById('myChart2').getContext('2d');
                                    var myChart = new Chart(ctx, {
                                        type: 'pie',
                                        data: {
                                            labels: Pielabels,
                                            datasets: [{
                                                label: "Our Overview",
                                                backgroundColor: ["#172A3A ", "#36cbba",
                                                    "#3581b8", "#13505b",
                                                    "#333333"
                                                ],
                                                data: Piedata
                                            }]
                                        },
                                        options: {
                                            title: {
                                                display: true,

                                            }
                                        }
                                    });
                                });
                            });

                        </script>
                    </div>
                    <div class="col-xl-6 col-md-12 col-sm-12">
                        <div class="bar-chart">
                            <h4><span>Bar </span> Chart</h4>
                            <span>Monthly </span>
                        </div>
                        <canvas id="myChart" style="max-width: 600px; max-height: 600px;"></canvas>
                        <script>
                            /*charts table*/
                            var url = "{{url('stock/barchartjson')}}";
                            var Barlabel = new Array();
                            var Barlabels = new Array();
                            var Bardata = new Array();
                            $(document).ready(function () {
                                $.get(url, function (response) {
                                    response.forEach(function (data) {
                                        console.log(response);
                                        Barlabel.push(data.label_1);
                                        Barlabels.push(data.labels_1);
                                        Bardata.push(data.data_1);
                                    });
                                    var ctx = document.getElementById('myChart').getContext('2d');
                                    var myChart = new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: Barlabels,
                                            datasets: [{
                                                label: '# of Votes',
                                                data: Bardata,
                                                backgroundColor: [
                                                    '#36cbba',
                                                    '#36cbba',
                                                    '#36cbba',
                                                    '#36cbba',
                                                    '#36cbba',
                                                    '#36cbba'
                                                ],

                                            }]
                                        },
                                        options: {
                                            scales: {
                                                yAxes: [{
                                                    ticks: {
                                                        beginAtZero: true
                                                    }
                                                }]
                                            }
                                        }
                                    });
                                });
                            });

                        </script>
                    </div>
                </div>

            </div>
        </section>
        <!--home-Statistics-area-end-->
        <!--Algorithm -Statistics-area-start-->
        <section class="pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="title-dark text-center">
                        <h2 style="
                        border-bottom: 2px solid white; display: inline-block; padding: 8px 15px;">
                            <span>ALGORITHM</span> CONDITIONING
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="algorithm-content-start">
                        <p>Prior to any trades being executed by the algorithm, it will perform a conditioning check to
                            ensure that all points for a correct entry are met. The check points are stated below with
                            an example of checks performed and a short
                            description of these checks prior to a buy signal being executed:</p>
                    </div>
                </div>
                <!---all-box-algorithm-start--->
                <div class="row all-algorithm">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="left-full-box-algorithm">
                            <div class="single-box-algorithm">
                                <div class="box-content-algorithm" data-aos="fade-left" data-aos-duration="1000">
                                    <h4>Correlation check</h4>
                                    <p>How many max orders to be opened in the same direction for the same pair.
                                        Currently, our settings are indicating 2 orders max per pair in same direction.
                                    </p>
                                </div>
                                <div class="box-number-algorithm">
                                    <span>Check 1 </span>
                                </div>
                            </div>
                            <div class="single-box-algorithm">
                                <div class="box-content-algorithm" data-aos="fade-left" data-aos-duration="1000">
                                    <h4>Bollinger Bands check</h4>
                                    <p>BB volatility is calculated by measuring the difference between the Upper
                                        Bollinger band - Lower Bollinger Band and this is compared with Volatility
                                        measure that is entered manually in the pair settings.</p>
                                </div>
                                <div class="box-number-algorithm">
                                    <span>Check 3 </span>
                                </div>
                            </div>
                            <div class="single-box-algorithm">
                                <div class="box-content-algorithm" data-aos="fade-left" data-aos-duration="1000">
                                    <h4>Spread Check</h4>
                                    <p>The final check is the spread, after all the above are true, if the spread is
                                        less than the max allowed spread, then the buy order is opened.</p>
                                </div>
                                <div class="box-number-algorithm">
                                    <span>Check 5 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6  col-md-12 col-sm-12">
                        <div class="right-full-box-algorithm">
                            <div class="single-box-algorithm">
                                <div class="box-number-algorithm line-one">
                                    <span>Check 2 </span>
                                </div>
                                <div class="box-content-algorithm" data-aos="fade-left" data-aos-duration="1000"
                                    style="	margin-left: 30px;">
                                    <h4> Volatility check</h4>
                                    <p>The volatility is calculated by (HighLow) in pips of the day. And this is
                                        compared with the max allowed volatility that were entered manually in the
                                        setting of the pair.
                                    </p>
                                </div>
                            </div>
                            <div class="single-box-algorithm">
                                <div class="box-number-algorithm line-one">
                                    <span>Check 4 </span>
                                </div>
                                <div class="box-content-algorithm" data-aos="fade-left" data-aos-duration="1000"
                                    style="	margin-left: 30px;">
                                    <h4> Bollinger Bands with CCI check</h4>
                                    <p>If the Ask price is less than a price that is generated by going below the lower
                                        band of the Bollinger band by a certain distance that's entered manually in the
                                        pairs settings, and this condition should be happening
                                        while the CCI is below a certain level also entered manually in the pairs
                                        settings.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---all-box-algorithm-start--->
                <div class="row">
                    <div class="algorithm-content-start">
                        <p>Should all the conditions meet then the algorithm will be given the go ahead to begin
                            executing trades. The trades are then split into frequencies to ensure maximum profits with
                            minimal risk.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--Algorithm -Statistics-area-start-->
        <!--Quantum-Statistics-area-start-->
        <section class=" pt-100 pb-100 graybg text-center">
            <div class="container">
                <div class="row">
                    <div class="title-light">
                        <h2 style="
                        display: inline-block; padding: 8px 15px; text-transform: uppercase;">
                            <span>QUANTUM</span> STATISTICS
                        </h2>
                    </div>
                </div>
                <div class="row d-flex align-items-center mt-100">
                    <div class="col-lg-6">
                        <div class="table-quantum" data-aos="fade-right" data-aos-duration="1000">
                            <div class="title-table">
                                <span>Stats</span>
                            </div>
                            <table style="width:100%">
                                @foreach(App\QuantumStat::all() as $cat)
                                <tr>
                                    <th>{{$cat->table_head}}</th>
                                    <td>{{$cat->table_data}}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="Cumulative-profit" data-aos="fade-left" data-aos-duration="1000">
                            {{-- <canvas id="myChart_profit" width="1600" height="900"></canvas> --}}
                            <canvas id="myChart3" style="max-width: 600px; max-height: 600px;"></canvas>
                            <script>
                                /*charts table*/
                                var url3 = "{{url('stock/barchartjson')}}";
                                var Linelabel = new Array();
                                var Linelabels = new Array();
                                var Linedata = new Array();
                                $(document).ready(function () {
                                    $.get(url3, function (response) {
                                        response.forEach(function (data) {
                                            console.log(response);
                                            Linelabel.push(data.label_1);
                                            Linelabels.push(data.labels_1);
                                            Linedata.push(data.data_1);
                                        });
                                        var ctx = document.getElementById('myChart3').getContext('2d');
                                        var myChart = new Chart(ctx, {
                                            type: 'line',
                                            data: {
                                                labels: Linelabels,
                                                datasets: [{
                                                    label: '# of Votes',
                                                    data: Linedata,
                                                    backgroundColor: [
                                                        '#36cbba'
                                                    ],

                                                }]
                                            },
                                            options: {
                                                scales: {
                                                    yAxes: [{
                                                        ticks: {
                                                            beginAtZero: true
                                                        }
                                                    }]
                                                }
                                            }
                                        });
                                    });
                                });

                            </script>
                        </div>
                    </div>
                </div>
                <div class="row mt-100 mb-100 responsive-table">
                    <div class="col-lg-12">
                        <div class="Monthly-Return-Table bgcolor pb-100 pt-100 pl-50 pr-50" data-aos="fade-up"
                            data-aos-duration="1000">

                            <div class="title-mrt">
                                <h3>
                                    Monthly Return Table
                                </h3>
                            </div>

                            <table class="table mian-mrt">
                                <thead>
                                    <tr>
                                        <th scope="col">Year</th>
                                        <th scope="col">Jan</th>
                                        <th scope="col">Feb</th>
                                        <th scope="col">Mar</th>
                                        <th scope="col">Apr</th>
                                        <th scope="col">May</th>
                                        <th scope="col">Jun</th>
                                        <th scope="col">Jul</th>
                                        <th scope="col">Aug</th>
                                        <th scope="col">Sep</th>
                                        <th scope="col">Oct</th>
                                        <th scope="col">Nov</th>
                                        <th scope="col">Dec</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(App\MonthlyReturn::all() as $cat)
                                    <tr>
                                        <th scope="row">{{$cat->year}}</th>
                                        <td>{{$cat->jan}}</td>
                                        <td>{{$cat->feb}}</td>
                                        <td>{{$cat->mar}}</td>
                                        <td>{{$cat->apr}}</td>
                                        <td>{{$cat->may}}</td>
                                        <td>{{$cat->jun}}</td>
                                        <td>{{$cat->jul}}</td>
                                        <td>{{$cat->aug}}</td>
                                        <td>{{$cat->sep}}</td>
                                        <td>{{$cat->oct}}</td>
                                        <td>{{$cat->nov}}</td>
                                        <td>{{$cat->dec}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Quantum-Statistics-area-end-->


    </main>
    <!----------------------------------------main area end---------------------------------------->
    @include('user.partials.footer')

</body>

</html>
