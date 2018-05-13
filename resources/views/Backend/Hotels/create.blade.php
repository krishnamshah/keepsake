<!-- start: Content -->

<div class="form-element">
    <div class="col-md-12 padding-0">
        <form method="post" enctype="multipart/form-data" action="{{route('hotels.add')}}">
            @csrf
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input id="hotel_name" type="input" class="form-text{{ $errors->has('hotel_name') ? ' is-invalid' : '' }}"
                       name="hotel_name" value="{{ old('hotel_name') }}" required autofocus>


                <span class="bar"></span>
                <label>Hotel Name</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <select id="hotel_province" class="form-text{{ $errors->has('hotel_province') ? ' is-invalid' : '' }}"
                        name="hotel_province" required autofocus>
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
                        name="hotel_district" required autofocus>
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
                       name="hotel_city" value="{{ old('hotel_city') }}" required autofocus>

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
                       name="hotel_street" value="{{ old('hotel_street') }}" required autofocus>

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
                       name="hotel_house_no" value="{{ old('hotel_house_no') }}" required autofocus>

                @if ($errors->has('hotel_house_no'))
                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('hotel_house_no') }}</strong>
                                    </span>
                @endif
                <label>House No.</label>
            </div>

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input id="hotel_logo" type="file" class="form-text{{ $errors->has('hotel_hotel_logo') ? ' is-invalid' : '' }}"
                       name="hotel_logo" value="{{ old('hotel_hotel_logo') }}" required autofocus>

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
                       name="hotel_google_coordinate_latitude" value="{{ old('hotel_google_coordinate_latitude') }}" required autofocus>

                @if ($errors->has('hotel_google_coordinate_latitude'))
                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('hotel_google_coordinate_latitude') }}</strong>
                                    </span>
                @endif
                <span class="bar"></span>
                <label>Google Coordinate Latitude</label>

            </div><div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input id="hotel_google_coordinate_longitude" type="input" class="form-text{{ $errors->has('hotel_google_coordinate_longitude') ? ' is-invalid' : '' }}"
                       name="hotel_google_coordinate_longitude" value="{{ old('hotel_google_coordinate_longitude') }}" required autofocus>

                @if ($errors->has('hotel_google_coordinate_latitude'))
                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('hotel_google_coordinate_latitude') }}</strong>
                                    </span>
                @endif
                <span class="bar"></span>
                <label>Google Coordinate Longitude</label>

            </div><div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input id="hotel_email" type="email" class="form-text{{ $errors->has('hotel_email') ? ' is-invalid' : '' }}"
                       name="hotel_email" value="{{ old('hotel_email') }}" required autofocus>

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
                       name="hotel_contact" value="{{ old('hotel_contact') }}" required autofocus>

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
                       name="hotel_website" value="{{ old('hotel_website') }}" required autofocus>

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
                       name="hotel_contact_person" value="{{ old('hotel_contact_person') }}" required autofocus>

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
                       name="hotel_contact_person_contact" value="{{ old('hotel_contact_person_contact') }}" required autofocus>

                @if ($errors->has('hotel_contact_person_contact'))
                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('hotel_contact_person_contact') }}</strong>
                                    </span>
                @endif
                <span class="bar"></span>
                <label>Hotel Contact Person's Contact</label>
            </div><div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input id="hotel_checkInTime" type="text" class="form-text{{ $errors->has('hotel_checkInTime') ? ' is-invalid' : '' }}"
                       name="hotel_checkInTime" value="{{ old('hotel_checkInTime') }}" required autofocus>

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
                       name="hotel_checkOutTime" value="{{ old('hotel_checkOutTime') }}" required autofocus>

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
                       name="hotel_hotel_star_rating" value="{{ old('hotel_hotel_star_rating') }}" required autofocus>

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
                       name="hotel_rating_agency" value="{{ old('hotel_rating_agency') }}" required autofocus>

                @if ($errors->has('hotel_rating_agency'))
                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('hotel_rating_agency') }}</strong>
                                    </span>
                @endif
                <span class="bar"></span>
                <label>Rating Agency</label>
            </div>

            <hr/>
            <h3> Hotel Services</h3>
            <div class="col-md-12">
                @forelse($services as $service)

                    <input type="checkbox" value="{{$service->id}}" name="service_id[]">
                    {{$service->service_name}} - {{$service->service_description}}

                @empty
                    Sorry No Service Are avilable
                @endforelse

            </div>
            <hr/>
            <h3> Hotel Facilitiess</h3>
            <div class="col-md-12">
                @forelse($facilities as $facility)

                    <input type="checkbox" value="{{$facility->id}}" name="service_id[]">
                    {{$facility->title}} - {{$facility->description}}

                @empty
                    Sorry No Service Are avilable
                @endforelse

            </div>
            <hr/>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input class="submit btn btn-success" value="Submit" type="submit">
            </div>
        </form>
    </div>
</div>

<!-- end: content -->
