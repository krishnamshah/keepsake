@extends('Backend._Layouts.master_layout')
@section('css')
    <!-- plugins -->
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('BackendTheme/asset/css/plugins/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('BackendTheme/asset/css/plugins/animate.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('BackendTheme/asset/css/plugins/nouihotel.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('BackendTheme/asset/css/plugins/select2.min.css')}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('BackendTheme/asset/css/plugins/ionrangehotel/ion.rangeSlider.css')}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('BackendTheme/asset/css/plugins/ionrangehotel/ion.rangeSlider.skinFlat.css')}}"/>
    <link rel="stylesheet" type="text/css"
          href="{{URL::asset('BackendTheme/asset/css/plugins/bootstrap-material-datetimepicker.css')}}"/>
@endsection
@section('content')
    <div id="content">
        <div class="tabs-wrapper text-center">
            <div class="panel box-shadow-none text-left content-header">
                <div class="panel-body" style="padding-bottom:10px;">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Edit Hotel Details</h3>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <!-- start: Content -->
            <div class="form-element">
                <div class="col-md-12 padding-0">
                    <form method="patch" enctype="multipart/form-data"
                          action="{{route('hotels.update',$hotel->id)}}">
                        <input type="hidden" name="hotel_id" value="{{$hotel->id}}">

                        @csrf
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input id="hotel_name" type="input" class="form-text{{ $errors->has('hotel_name') ? ' is-invalid' : '' }}"
                                   name="hotel_name" value="{{$hotel->hotel_name}}" required autofocus>


                            <span class="bar"></span>
                            <label>Hotel Name</label>
                        </div>
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <select id="hotel_province" class="form-text{{ $errors->has('hotel_province') ? ' is-invalid' : '' }}"
                                    name="hotel_province" required autofocus value="{{ $hotel->name }}">
                                <option value="0">Please Select Location Province</option>
                                <option value="1">Province 1</option>
                                <option value="2">Province 2</option>
                                <option value="3">Province 3</option>
                                <option value="4">Province 4</option>
                                <option value="5">Province 5</option>
                                <option value="6">Province 6</option>
                                <option value="7">Province 7</option>

                            </select>
                            @if ($errors->has('hotel_province'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('hotel_province') }}</strong>
                                    </span>
                            @endif
                            <span class="bar"></span>
                            <label>Province</label>
                        </div>
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <select id="hotel_district" class="form-text{{ $errors->has('hotel_district') ? ' is-invalid' : '' }}"
                                    name="hotel_district" value="{{$hotel->district}}" required autofocus>
                                <option value="0">Please Select Location District</option>
                                <option value="Bhojpur District">Bhojpur District</option>
                                <option value="Dhankuta District">Dhankuta District</option>
                                <option value="Ilam District">Ilam District</option>
                                <option value="Jhapa District">Jhapa District</option>
                                <option value="Khotang District">Khotang Distric</option>
                                <option value="Morang District">Morang District</option>
                                <option value="Okhaldhunga District">Okhaldhunga District</option>
                                <option value="Panchthar District">Panchthar District</option>
                                <option value="Sankhuwasabha District">Sankhuwasabha District</option>
                                <option value="Solukhumbu District">Solukhumbu District</option>
                                <option value="Sunsari District">Sunsari District</option>
                                <option value="Taplejung District">Taplejung District</option>
                                <option value="Terhathum District">Terhathum District</option>
                                <option value="Udayapur District">Udayapur District</option>
                                <option value="Bara District">Bara District</option>
                                <option value="Dhanusha District">Dhanusha District</option>
                                <option value="Mahottari District">Mahottari District</option>
                                <option value="Parsa District">Parsa District</option>
                                <option value="Rautahat District">Rautahat District</option>
                                <option value="Saptari District">Saptari District</option>
                                <option value="Sarlahi District">Sarlahi District</option>
                                <option value="Siraha District">Siraha District</option>
                                <option value="Bhaktapur District">Bhaktapur District</option>
                                <option value="Chitwan District">Chitwan District</option>
                                <option value="Dhading District">Dhading District</option>
                                <option value="Dolakha District">Dolakha District</option>
                                <option value="Kathmandu District">Kathmandu District</option>
                                <option value="Kavrepalanchok District">Kavrepalanchok District</option>
                                <option value="Lalitpur District">Lalitpur District</option>
                                <option value="Makwanpur District">Makwanpur District</option>
                                <option value="Nuwakot District">Nuwakot District</option>
                                <option value="Ramechhap District">Ramechhap District</option>
                                <option value="Rasuwa District">Rasuwa District</option>
                                <option value="Sindhuli District">Sindhuli District</option>
                                <option value="Sindhupalchok District">Sindhupalchok District</option>
                                <option value="Baglung District">Baglung District</option>
                                <option value="Gorkha District">Gorkha District</option>
                                <option value="Kaski District">Kaski District</option>
                                <option value="Lamjung District">Lamjung District</option>
                                <option value="Manang District">Manang District</option>
                                <option value="Mustang District">Mustang District</option>
                                <option value="Myagdi District">Myagdi District</option>
                                <option value="Nawalpur District">Nawalpur District</option>
                                <option value="Parbat District">Parbat District</option>
                                <option value="Syangja District">Syangja District</option>
                                <option value="Tanahun District">Tanahun District</option>
                                <option value="Arghakhanchi District">Arghakhanchi District</option>
                                <option value="Banke District">Banke District</option>
                                <option value="Bardiya District">Bardiya District</option>
                                <option value="Dang District">Dang District</option>
                                <option value="Eastern Rukum District">Eastern Rukum District</option>
                                <option value="Gulmi District">Gulmi District</option>
                                <option value="Kapilvastu District">Kapilvastu District</option>
                                <option value="Parasi District">Parasi District</option>
                                <option value="Palpa District">Palpa District</option>
                                <option value="Pyuthan District">Pyuthan District</option>
                                <option value="Rolpa District">Rolpa District</option>
                                <option value="Rupandehi District">Rupandehi District</option>
                                <option value="Dailekh District">Dailekh District</option>
                                <option value="Dolpa District">Dolpa District</option>
                                <option value="Humla District">Humla District</option>
                                <option value="Jajarkot District">Jajarkot District</option>
                                <option value="Jumla District">Jumla District</option>
                                <option value="Kalikot District">Kalikot District</option>
                                <option value="Mugu District">Mugu District</option>
                                <option value="Salyan District">Salyan District</option>
                                <option value="Surkhet District">Surkhet District</option>
                                <option value="Western Rukum District">Western Rukum District</option>
                                <option value="Achham District">Achham District</option>
                                <option value="Baitadi District">Baitadi District</option>
                                <option value="Bajhang District">Bajhang District</option>
                                <option value="Bajura District">Bajura District</option>
                                <option value="Dadeldhura District">Dadeldhura District</option>
                                <option value="Darchula District">Darchula District</option>
                                <option value="Doti District">Doti District</option>
                                <option value="Kailali District">Kailali District</option>
                                <option value="Kanchanpur District">Kanchanpur District</option>
                            </select>

                            @if ($errors->has('hotel_district'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('hotel_district') }}</strong>
                                    </span>
                            @endif
                            <span class="bar"></span>
                            <label>District</label>
                        </div>

                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input id="hotel_city" type="input" class="form-text{{ $errors->has('hotel_city') ? ' is-invalid' : '' }}"
                                   name="hotel_city"  value="{{$hotel->city}}" required autofocus>

                            @if ($errors->has('hotel_city'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('hotel_city') }}</strong>
                                    </span>
                            @endif
                            <span class="bar"></span>
                            <label>City</label>
                        </div>
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input id="hotel_street" type="input" class="form-text{{ $errors->has('hotel_street') ? ' is-invalid' : '' }}"
                                   name="hotel_street" value="{{$hotel->street}}" required autofocus>

                            @if ($errors->has('hotel_street'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('hotel_street') }}</strong>
                                    </span>
                            @endif
                            <span class="bar"></span>
                            <label>Street</label>
                        </div>

                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input id="hotel_house_no" type="input" class="form-text{{ $errors->has('hotel_house_no') ? ' is-invalid' : '' }}"
                                   name="hotel_house_no" value="{{$hotel->house_no}}" required autofocus>

                            @if ($errors->has('hotel_house_no'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('hotel_house_no') }}</strong>
                                    </span>
                            @endif
                            <label>House No.</label>
                        </div>

                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input id="hotel_logo" type="file" class="form-text{{ $errors->has('hotel_hotel_logo') ? ' is-invalid' : '' }}"
                                   name="hotel_logo" value="{{ $hotel->hotel_logo }}" required autofocus>
                            @if (Storage::disk('public')->has($hotel->image))
                                <img src="{{Storage::url($hotel->image) }}" class="" width="300px"
                                     height="100px"/>
                            @endif

                            @if ($errors->has('hotel_logo'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('hotel_logo') }}</strong>
                                    </span>
                            @endif
                            <span class="bar"></span>
                            <label>Hotel logo</label>
                        </div>
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input id="hotel_google_coordinate_latitude" type="input" class="form-text{{ $errors->has('hotel_google_coordinate_latitude') ? ' is-invalid' : '' }}"
                                   name="hotel_google_coordinate_latitude" value="{{$hotel->google_coordinate_latitude}}" required autofocus>

                            @if ($errors->has('hotel_google_coordinate_latitude'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('hotel_google_coordinate_latitude') }}</strong>
                                    </span>
                            @endif
                            <span class="bar"></span>
                            <label>Google Coordinate Latitude</label>

                        </div><div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input id="hotel_google_coordinate_longitude" type="input" class="form-text{{ $errors->has('hotel_google_coordinate_longitude') ? ' is-invalid' : '' }}"
                                   name="hotel_google_coordinate_longitude" value="{{$hotel->google_coordinate_longitude}}" required autofocus>

                            @if ($errors->has('hotel_google_coordinate_latitude'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('hotel_google_coordinate_latitude') }}</strong>
                                    </span>
                            @endif
                            <span class="bar"></span>
                            <label>Google Coordinate Longitude</label>

                        </div><div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input id="hotel_email" type="email" class="form-text{{ $errors->has('hotel_email') ? ' is-invalid' : '' }}"
                                   name="hotel_email" value="{{$hotel->email}}" required autofocus>

                            @if ($errors->has('hotel_email'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('hotel_email') }}</strong>
                                    </span>
                            @endif
                            <span class="bar"></span>
                            <label>Hotel Email</label>
                        </div>
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input id="hotel_contact" type="text" class="form-text{{ $errors->has('hotel_contact') ? ' is-invalid' : '' }}"
                                   name="hotel_contact" value=" {{$hotel->contact}}" required autofocus>

                            @if ($errors->has('hotel_contact'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('hotel_contact') }}</strong>
                                    </span>
                            @endif
                            <span class="bar"></span>
                            <label>Hotel Contact</label>
                        </div>
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input id="hotel_website" type="text" class="form-text{{ $errors->has('hotel_website') ? ' is-invalid' : '' }}"
                                   name="hotel_website" value="{{$hotel->website}}" required autofocus>

                            @if ($errors->has('hotel_website'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('hotel_website') }}</strong>
                                    </span>
                            @endif
                            <span class="bar"></span>
                            <label>Hotel Website</label>
                        </div>
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input id="hotel_contact_person" type="text" class="form-text{{ $errors->has('hotel_contact_person') ? ' is-invalid' : '' }}"
                                   name="hotel_contact_person" value="{{$hotel->contact_person}}" required autofocus>

                            @if ($errors->has('hotel_contact_person'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('hotel_contact_person') }}</strong>
                                    </span>
                            @endif
                            <span class="bar"></span>
                            <label>Hotel Contact Person</label>
                        </div>
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input id="hotel_contact_person_contact" type="text" class="form-text{{ $errors->has('hotel_contact_person_contact') ? ' is-invalid' : '' }}"
                                   name="hotel_contact_person_contact" value="{{$hotel->contact_person_contact}}" required autofocus>

                            @if ($errors->has('hotel_contact_person_contact'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('hotel_contact_person_contact') }}</strong>
                                    </span>
                            @endif
                            <span class="bar"></span>
                            <label>Hotel Contact Person's Contact</label>
                        </div><div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input id="hotel_checkInTime" type="text" class="form-text{{ $errors->has('hotel_checkInTime') ? ' is-invalid' : '' }}"
                                   name="hotel_checkInTime" value="{{$hotel->hotel_checkIN_time}}" required autofocus>

                            @if ($errors->has('hotel_checkInTime'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('hotel_checkInTime') }}</strong>
                                    </span>
                            @endif
                            <span class="bar"></span>
                            <label>Check-In Time</label>
                        </div>

                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input id="hotel_checkOutTime" type="text" class="form-text{{ $errors->has('hotel_checkOutTime') ? ' is-invalid' : '' }}"
                                   name="hotel_checkOutTime" value="{{$hotel->hotel_checkOUT_time}}" required autofocus>

                            @if ($errors->has('hotel_checkOutTime'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('hotel_checkOutTime') }}</strong>
                                    </span>
                            @endif
                            <span class="bar"></span>
                            <label>Check-Out Time</label>
                        </div>

                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input id="hotel_hotel_star_rating" type="text" class="form-text{{ $errors->has('hotel_hotel_star_rating') ? ' is-invalid' : '' }}"
                                   name="hotel_hotel_star_rating" value="{{$hotel->hotel_star_rating}}" required autofocus>

                            @if ($errors->has('hotel_hotel_star_rating'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('hotel_hotel_star_rating') }}</strong>
                                    </span>
                            @endif
                            <span class="bar"></span>
                            <label>Hotel Star Rating</label>
                        </div>

                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input id="hotel_rating_agency" type="text" class="form-text{{ $errors->has('hotel_rating_agency') ? ' is-invalid' : '' }}"
                                   name="hotel_rating_agency" value="{{ $hotel->rating_agency}}" required autofocus>

                            @if ($errors->has('hotel_rating_agency'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('hotel_rating_agency') }}</strong>
                                    </span>
                            @endif
                            <span class="bar"></span>
                            <label>Rating Agency</label>
                        </div>

                        <h3> Hotel Facilities</h3>
                        <div class="col-md-12">

                            @forelse($facilities as $facility)

                                <input type="checkbox" value="{{$facility->id}}" name="facilities_id[]"

                                @foreach($hotel->HotelFacility as $hot)
                                    @if ($hot->id==$facility->id)
                                       {{"checked"}}
                                    @endif
                                @endforeach>
                                {{$facility->title}} - {{$facility->description}}

                            @empty
                                Sorry No faciliites Are avilable
                            @endforelse

                        </div>
                        <hr/>
                        <h3> Hotel Services</h3>
                        <div class="col-md-12">
                            @forelse($services as $service)

                                <input type="checkbox" value="{{$service->id}}" name="service_id[]"
                                       @foreach($hotel->HotelService as $hot)
                                       @if ($hot->id== $service->id)
                                       checked
                                        @endif
                                        @endforeach
                                >
                                {{$service->title}} - {{$facility->description}}


                            @empty
                                Sorry No faciliites Are avilable
                            @endforelse

                        </div>
                        <hr/>
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input class="submit btn btn-success" value="Submit" type="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')
    <!-- plugins -->
    <script src="{{URL::asset('BackendTheme/asset/js/plugins/moment.min.js')}}"></script>
    <script src="{{URL::asset('BackendTheme/asset/js/plugins/jquery.knob.js')}}"></script>
    <script src="{{URL::asset('BackendTheme/asset/js/plugins/ion.rangeSlider.min.js')}}"></script>
    <script src="{{URL::asset('BackendTheme/asset/js/plugins/bootstrap-material-datetimepicker.js')}}"></script>
    <script src="{{URL::asset('BackendTheme/asset/js/plugins/jquery.nicescroll.js')}}"></script>
    <script src="{{URL::asset('BackendTheme/asset/js/plugins/jquery.mask.min.js')}}"></script>
    <script src="{{URL::asset('BackendTheme/asset/js/plugins/select2.full.min.js')}}"></script>
    <script src="{{URL::asset('BackendTheme/asset/js/plugins/nouihotel.min.js')}}"></script>
    <script src="{{URL::asset('BackendTheme/asset/js/plugins/jquery.validate.min.js')}}"></script>


    <!-- custom -->
    <script src="{{URL::asset('BackendTheme/asset/js/main.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            $("#signupForm").validate({
                errorElement: "em",
                errorPlacement: function (error, element) {
                    $(element.parent("div").addClass("form-animate-error"));
                    error.appendTo(element.parent("div"));
                },
                success: function (label) {
                    $(label.parent("div").removeClass("form-animate-error"));
                },
                rules: {
                    validate_firstname: "required",
                    validate_lastname: "required",
                    validate_username: {
                        required: true,
                        minlength: 2
                    },
                    validate_password: {
                        required: true,
                        minlength: 5
                    },
                    validate_confirm_password: {
                        required: true,
                        minlength: 5,
                        equalTo: "#validate_password"
                    },
                    validate_email: {
                        required: true,
                        email: true
                    },
                    validate_agree: "required"
                },
                messages: {
                    validate_firstname: "Please enter your firstname",
                    validate_lastname: "Please enter your lastname",
                    validate_username: {
                        required: "Please enter a username",
                        minlength: "Your username must consist of at least 2 characters"
                    },
                    validate_password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    validate_confirm_password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long",
                        equalTo: "Please enter the same password as above"
                    },
                    validate_email: "Please enter a valid email address",
                    validate_agree: "Please accept our policy"
                }
            });

            // propose username by combining first- and lastname
            $("#username").focus(function () {
                var firstname = $("#firstname").val();
                var lastname = $("#lastname").val();
                if (firstname && lastname && !this.value) {
                    this.value = firstname + "." + lastname;
                }
            });


            $('.mask-date').mask('00/00/0000');
            $('.mask-time').mask('00:00:00');
            $('.mask-date_time').mask('00/00/0000 00:00:00');
            $('.mask-cep').mask('00000-000');
            $('.mask-phone').mask('0000-0000');
            $('.mask-phone_with_ddd').mask('(00) 0000-0000');
            $('.mask-phone_us').mask('(000) 000-0000');
            $('.mask-mixed').mask('AAA 000-S0S');
            $('.mask-cpf').mask('000.000.000-00', {reverse: true});
            $('.mask-money').mask('000.000.000.000.000,00', {reverse: true});
            $('.mask-money2').mask("#.##0,00", {reverse: true});
            $('.mask-ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
                translation: {
                    'Z': {
                        pattern: /[0-9]/, optional: true
                    }
                }
            });
            $('.mask-ip_address').mask('099.099.099.099');
            $('.mask-percent').mask('##0,00%', {reverse: true});
            $('.mask-clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
            $('.mask-placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
            $('.mask-fallback').mask("00r00r0000", {
                translation: {
                    'r': {
                        pattern: /[\/]/,
                        fallback: '/'
                    },
                    placeholder: "__/__/____"
                }
            });
            $('.mask-selectonfocus').mask("00/00/0000", {selectOnFocus: true});

            var options = {
                onKeyPress: function (cep, e, field, options) {
                    var masks = ['00000-000', '0-00-00-00'];
                    mask = (cep.length > 7) ? masks[1] : masks[0];
                    $('.mask-crazy_cep').mask(mask, options);
                }
            };

            $('.mask-crazy_cep').mask('00000-000', options);


            var options2 = {
                onComplete: function (cep) {
                    alert('CEP Completed!:' + cep);
                },
                onKeyPress: function (cep, event, currentField, options) {
                    console.log('An key was pressed!:', cep, ' event: ', event,
                        'currentField: ', currentField, ' options: ', options);
                },
                onChange: function (cep) {
                    console.log('cep changed! ', cep);
                },
                onInvalid: function (val, e, f, invalid, options) {
                    var error = invalid[0];
                    console.log("Digit: ", error.v, " is invalid for the position: ", error.p, ". We expect something like: ", error.e);
                }
            };

            $('.mask-cep_with_callback').mask('00000-000', options2);

            var SPMaskBehavior = function (val) {
                    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
                },
                spOptions = {
                    onKeyPress: function (val, e, field, options) {
                        field.mask(SPMaskBehavior.apply({}, arguments), options);
                    }
                };

            $('.mask-sp_celphones').mask(SPMaskBehavior, spOptions);


            var hotel = document.getElementById('noui-hotel');
            noUiSlider.create(hotel, {
                start: [20, 80],
                connect: true,
                range: {
                    'min': 0,
                    'max': 100
                }
            });

            var hotel = document.getElementById('noui-range');
            noUiSlider.create(hotel, {
                start: [20, 80], // Handle start position
                step: 10, // Slider moves in increments of '10'
                margin: 20, // Handles must be more than '20' apart
                connect: true, // Display a colored bar between the handles
                direction: 'rtl', // Put '0' at the bottom of the hotel
                orientation: 'vertical', // Orient the hotel vertically
                behaviour: 'tap-drag', // Move handle on tap, bar is draggable
                range: { // Slider can select '0' to '100'
                    'min': 0,
                    'max': 100
                },
                pips: { // Show a scale with the hotel
                    mode: 'steps',
                    density: 2
                }
            });


            $(".select2-A").select2({
                placeholder: "Select a state",
                allowClear: true
            });

            $(".select2-B").select2({
                tags: true
            });

            $("#range1").ionRangeSlider({
                type: "double",
                grid: true,
                min: -1000,
                max: 1000,
                from: -500,
                to: 500
            });

            $('.dateAnimate').bootstrapMaterialDatePicker({weekStart: 0, time: false, animation: true});
            $('.date').bootstrapMaterialDatePicker({weekStart: 0, time: false});
            $('.time').bootstrapMaterialDatePicker({date: false, format: 'HH:mm', animation: true});
            $('.datetime').bootstrapMaterialDatePicker({
                format: 'dddd DD MMMM YYYY - HH:mm',
                animation: true
            });
            $('.date-fr').bootstrapMaterialDatePicker({
                format: 'DD/MM/YYYY HH:mm',
                lang: 'fr',
                weekStart: 1,
                cancelText: 'ANNULER'
            });
            $('.min-date').bootstrapMaterialDatePicker({
                format: 'DD/MM/YYYY HH:mm',
                minDate: new Date()
            });


            $(".dial").knob({
                height: 80
            });

            $('.dial1').trigger(
                'configure',
                {
                    "min": 10,
                    "width": 80,
                    "max": 80,
                    "fgColor": "#FF6656",
                    "skin": "tron"
                }
            );

            $('.dial2').trigger(
                'configure',
                {

                    "width": 80,
                    "fgColor": "#FF6656",
                    "skin": "tron",
                    "cursor": true
                }
            );

            $('.dial3').trigger(
                'configure',
                {

                    "width": 80,
                    "fgColor": "#27C24C",
                }
            );
        });
    </script>
    <!-- end: Javascript -->
@endsection