<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>LU ROUTINE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        .page-break {
            page-break-after: always;
        }
        h3{
            text-align: center;
            margin: 30px;
        }
        p{
            text-align: center;
            font-size: 20px;
            text-decoration: underline;
        }
        
    </style>
</head>

<body>
    <!--main area start-->
    <main>

        <h3>Department of Computer Science & Engineering</h3>
        <p>Summer-2021, Class Schedule</p>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Section</th>
                    <th scope="col">Batch</th>
                    <th scope="col">9:00 AM - 09:50 AM</th>
                    <th scope="col">10:00 AM - 10:50 AM</th>
                    <th scope="col">11:00 AM - 11:50 AM</th>
                    <th scope="col">12:00 PM - 12:50 PM</th>
                    <th scope="col">Break</th>
                    <th scope="col">02:00 PM - 02:50 PM </th>
                    <th scope="col">03:00 PM - 03:50 PM</th>
                    <th scope="col">04:00 PM - 04:50 PM</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sunday as $row => $data)
                <tr>
                    @if ($row == 0 || $row % 12 == 0)
                    <th rowspan="12" style="writing-mode: vertical-rl; text-orientation: upright; text-align:center">
                        Sunday</th>
                    @endif
                    <th>{{$data->section}}</th>
                    <td>{{$data->batch}}</td>
                    <td>{{$data->nineAM_ninefiftyAM}}</td>
                    <td>{{$data->tenAM_tenfiftyAM}}</td>
                    <td>{{$data->elevenAM_elevenfiftyAM}}</td>
                    <td>{{$data->twelvePM_twelvefiftyPM}}</td>
                    @if ($row == 0 || $row % 12 == 0)
                    <td rowspan="12" style="writing-mode: vertical-rl; text-orientation: mixed; text-align:center">
                        Prayer &
                        Lunch Break ( 01:00 PM - 01:50 PM)</td>
                    @endif
                    <td>{{$data->twoPM_twofiftyPM}}</td>
                    <td>{{$data->threePM_threefiftyPM}}</td>
                    <td>{{$data->fourPM_fourfiftyPM}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="page-break"></div>

        <table class="table table-bordered border-primary">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Section</th>
                    <th scope="col">Batch</th>
                    <th scope="col">9:00 AM - 09:50 AM</th>
                    <th scope="col">10:00 AM - 10:50 AM</th>
                    <th scope="col">11:00 AM - 11:50 AM</th>
                    <th scope="col">12:00 PM - 12:50 PM</th>
                    <th scope="col">Break</th>
                    <th scope="col">02:00 PM - 02:50 PM </th>
                    <th scope="col">03:00 PM - 03:50 PM</th>
                    <th scope="col">04:00 PM - 04:50 PM</th>
                </tr>
            </thead>
            <tbody>
                @foreach($monday as $row => $data)
                <tr>
                    @if ($row == 0 || $row % 12 == 0)
                    <th rowspan="12" style="writing-mode: vertical-rl; text-orientation: upright; text-align:center">
                        monday</th>
                    @endif
                    <th>{{$data->section}}</th>
                    <td>{{$data->batch}}</td>
                    <td>{{$data->nineAM_ninefiftyAM}}</td>
                    <td>{{$data->tenAM_tenfiftyAM}}</td>
                    <td>{{$data->elevenAM_elevenfiftyAM}}</td>
                    <td>{{$data->twelvePM_twelvefiftyPM}}</td>
                    @if ($row == 0 || $row % 12 == 0)
                    <td rowspan="12" style="writing-mode: vertical-rl; text-orientation: mixed; text-align:center">
                        Prayer &
                        Lunch Break ( 01:00 PM - 01:50 PM)</td>
                    @endif
                    <td>{{$data->twoPM_twofiftyPM}}</td>
                    <td>{{$data->threePM_threefiftyPM}}</td>
                    <td>{{$data->fourPM_fourfiftyPM}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </main>
    <!--main area end-->
</body>

</html>
