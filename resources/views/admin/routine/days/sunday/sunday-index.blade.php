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
      <th scope="col">Handle</th>
      <th scope="col">02:00 PM - 02:50 PM </th>
      <th scope="col">03:00 PM - 03:50 PM</th>
      <th scope="col">04:00 PM - 04:50 PM</th>
    </tr>
  </thead>
  <tbody>
    @foreach($sunday as $row)
    <tr>
      <th style="writing-mode: vertical-rl; text-orientation: upright; text-align:center" rowspan="9">{{$row->day}}</th>
      <th>{{$row->section}}</th>
      <td>{{$row->batch}}</td>
      <td>{{$row->nineAM_ninefiftyAM}}</td>
      <td>{{$row->tenAM_tenfiftyAM}}</td>
      <td>{{$row->elevenAM_elevenfiftyAM}}</td>
      <td>{{$row->twelvePM_twelvefiftyPM}}</td>
      <td style="writing-mode: vertical-rl; text-orientation: mixed; text-align:center" rowspan="9">{{$row->break}}</td>
      <td>{{$row->twoPM_twofiftyPM}}</td>
      <td>{{$row->threePM_threefiftyPM}}</td>
      <td>{{$row->fourPM_fourfiftyPM}}</td>
    </tr>
    @endforeach
  </tbody>
</table>