@extends('admin.index')
@section('content')

<div class="card card-custom">
    @if(Session::has('message'))
        <div class="alert alert-success">
            {{Session::get('message')}}
        </div>
        @endif
    <div class="card-header">
        <h3 class="card-title">
            Edit Data for Sunday
        </h3>
        <div class="card-toolbar">
            <div class="example-tools justify-content-center">
                <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form action="{{route('sunday.update',[$sunday->id])}}" method="POST">
        @csrf
        <div class="card-body">

            <div class="form-group">
                <label>Session</label>
                <input type="text" name="session" class="form-control{{ $errors->has('session') ? ' is-invalid' : '' }}"
                    value="{{$sunday->session}}" placeholder="session" />
                @if ($errors->has('session'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('session') }}</strong>
                </span>
                @endif
            </div>
            <div class="row">
                <div class="col-xl-2">
                    <div class="form-group">
                        <label>day</label>
                        <input type="text" name="day" class="form-control{{ $errors->has('day') ? ' is-invalid' : '' }}"
                            value="{{$sunday->day}}" placeholder="day" />
                        @if ($errors->has('day'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('day') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="form-group">
                        <label>section</label>
                        <input type="text" name="section" class="form-control{{ $errors->has('section') ? ' is-invalid' : '' }}"
                            value="{{$sunday->section}}" placeholder="section" />
                        @if ($errors->has('section'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('section') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="form-group">
                        <label>batch</label>
                        <input type="text" name="batch" class="form-control{{ $errors->has('batch') ? ' is-invalid' : '' }}"
                            value="{{$sunday->batch}}" placeholder="batchch" />
                        @if ($errors->has('batch'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('batch') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="form-group">
                        <label>9:00 AM - 09:50 AM</label>
                        <input type="text" name="nineAM_ninefiftyAM" class="form-control{{ $errors->has('nineAM_ninefiftyAM') ? ' is-invalid' : '' }}"
                            value="{{$sunday->nineAM_ninefiftyAM}}" placeholder="nineAM_ninefiftyAMil" />
                        @if ($errors->has('nineAM_ninefiftyAM'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nineAM_ninefiftyAM') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="form-group">
                        <label>10:00 AM - 10:50 AM</label>
                        <input type="text" name="tenAM_tenfiftyAM" class="form-control{{ $errors->has('tenAM_tenfiftyAM') ? ' is-invalid' : '' }}"
                            value="{{$sunday->tenAM_tenfiftyAM}}" placeholder="tenAM_tenfiftyAM" />
                        @if ($errors->has('tenAM_tenfiftyAM'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('tenAM_tenfiftyAM') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="form-group">
                        <label>11:00 AM - 11:50 AM</label>
                        <input type="text" name="elevenAM_elevenfiftyAM" class="form-control{{ $errors->has('elevenAM_elevenfiftyAM') ? ' is-invalid' : '' }}"
                            value="{{$sunday->elevenAM_elevenfiftyAM}}" placeholder="elevenAM_elevenfiftyAMe" />
                        @if ($errors->has('elevenAM_elevenfiftyAM'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('elevenAM_elevenfiftyAM') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="form-group">
                        <label>12:00 PM - 12:50 PM</label>
                        <input type="text" name="twelvePM_twelvefiftyPM" class="form-control{{ $errors->has('twelvePM_twelvefiftyPM') ? ' is-invalid' : '' }}"
                            value="{{$sunday->twelvePM_twelvefiftyPM}}" placeholder="twelvePM_twelvefiftyPMy" />
                        @if ($errors->has('twelvePM_twelvefiftyPM'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('twelvePM_twelvefiftyPM') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="form-group">
                        <label>02:00 PM - 02:50 PM</label>
                        <input type="text" name="twoPM_twofiftyPM" class="form-control{{ $errors->has('twoPM_twofiftyPM') ? ' is-invalid' : '' }}"
                            value="{{$sunday->twoPM_twofiftyPM}}" placeholder="twoPM_twofiftyPMust" />
                        @if ($errors->has('twoPM_twofiftyPM'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('twoPM_twofiftyPM') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="form-group">
                        <label>03:00 PM - 03:50 PM</label>
                        <input type="text" name="threePM_threefiftyPM" class="form-control{{ $errors->has('threePM_threefiftyPM') ? ' is-invalid' : '' }}"
                            value="{{$sunday->threePM_threefiftyPM}}" placeholder="threePM_threefiftyPMtember" />
                        @if ($errors->has('threePM_threefiftyPM'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('threePM_threefiftyPM') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="form-group">
                        <label>04:00 PM - 04:50 PM</label>
                        <input type="text" name="fourPM_fourfiftyPM" class="form-control{{ $errors->has('fourPM_fourfiftyPM') ? ' is-invalid' : '' }}"
                            value="{{$sunday->fourPM_fourfiftyPM}}" placeholder="fourPM_fourfiftyPMober" />
                        @if ($errors->has('fourPM_fourfiftyPM'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('fourPM_fourfiftyPM') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="form-group">
                        <label>break</label>
                        <input type="text" name="break" class="form-control{{ $errors->has('break') ? ' is-invalid' : '' }}"
                            value="{{$sunday->break}}" placeholder="breakember" />
                        @if ($errors->has('break'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('break') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                
            </div>


        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
        </div>
    </form>
    <!--end::Form-->
</div>
@endsection
