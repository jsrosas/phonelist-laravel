@extends('layouts.app')

@section('header')
     <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
    <!--[if lte IE 8]><link type="text/css" rel="stylesheet" href="assets/leaflet/leaflet.ie.css" /><![endif]-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />
@stop

@section('content')
<!-- <div class="container">
    <div class="row"> -->
        <div class="col-md-10 col-md-offset-1">
          <div id="mapid"></div>
            <div class="panel panel-default">
                <div class="panel-heading">Phone List - total found: {{ $count }}
                {{Form::open(['method'=>'GET'])}}
                    {{Form::input('search', 'st', null, ['placeholder'=>'State....'])}}
                    {{Form::input('search', 'ct', null, ['placeholder'=>'City....'])}}
                    {{Form::input('search', 'gender', null, ['placeholder'=>'Gender....'])}}
                    {{ Form::submit() }}
                {{Form::close()}}
                </div>
                <div class="panel-body">
                    <table class="table table-sm">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Gender</th>
                          <th>City</th>
                          <th>State</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($phones as $phone)
                        <tr>
                          <th scope="row">{{ $phone->id }}</th>
                          <td>{{ $phone->fn }}</td>
                          <td>{{ $phone->ln }}</td>
                          <td>{{ $phone->gender }}</td>
                          <td>{{ $phone->city }}</td>
                          <td>{{ $phone->st }}</td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!-- </div>
</div> -->
@endsection

@section('footer')
    <script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
    <script type="text/javascript" src="js/geojson.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>





     <script type="text/javascript">


      var map, mapquest, phones;
      phones = {!!$json!!};
      geoJsonPhones = GeoJSON.parse(phones,{Point:['latitude', 'longitude']});
      
      

      mapquest = new L.TileLayer("http://{s}.mqcdn.com/tiles/1.0.0/osm/{z}/{x}/{y}.png", {
        maxZoom: 10,
        subdomains: ["otile1", "otile2", "otile3", "otile4"],
      });

      map = new L.Map('mapid', {
        center: new L.LatLng(39.90973623453719, -93.69140625),
        zoom: 3,
        layers: [mapquest]
      });
      L.geoJson(geoJsonPhones).addTo(map);
      

      



    </script>

@stop