<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//


Route::get('/', [
    'uses' => 'Frontend\homeController@index',
    'as' => 'home'
]);


Route::group(['prefix' => 'Hotel'], function () {
    Route::get('/Result', [
        'uses' => 'Frontend\Hotels\hotelController@searchhotels',
        'as' => 'hotel.result'
    ]);

    Route::get('/Details/{id}', [
        'uses' => 'Frontend\Hotels\hotelController@detailhotels',
        'as' => 'hotel.detail'
    ]);
    Route::get('/Lists', [
        'uses' => 'Frontend\Hotels\hotelController@listhotels',
        'as' => 'hotel.list'
    ]);
    Route::get('Room/Book/{id}', [
        'uses' => 'Frontend\Hotels\hotelController@bookingdetailshotelroom',
        'as' => 'room.booking'
    ]);
    Route::post('Room/Booked/{id}', [
        'uses' => 'Frontend\Hotels\hotelController@savebooking',
        'as' => 'room.savebooking'
    ]);
    Route::get('Rooom/Booked/Success', [
        'uses' => 'Frontend\Hotels\hotelController@bookedsuccess',
        'as' => 'room.bookedsuccess'
    ]);
    Route::get('Rooom/Booked/Success/{email}', [
        'uses' => 'Frontend\Hotels\hotelController@sendemail',
        'as' => 'hotel.sendemail'
    ]);
    Route::get('/hotel/rooms/{id}', [
        'uses' => 'Frontend\Hotels\hotelController@hotelroomlist',
        'as' => 'hotel.rooms'
    ]);

});
Route::group(['prefix' => 'Tour'], function () {
    Route::get('/Lists', [
        'uses' => 'Frontend\Tours\tourController@listtours',
        'as' => 'tour.list'
    ]);
    Route::get('/Result', [
        'uses' => 'Frontend\Tours\tourController@resulttours',
        'as' => 'tour.result'
    ]);
    Route::get('/Search', [
        'uses' => 'Frontend\Tours\tourController@searchtours',
        'as' => 'tour.search'
    ]);
    Route::get('/dBook', [
        'uses' => 'Frontend\Tours\tourController@searchtour',
        'as' => 'tours.search'
    ]);
    Route::get('/Details/{id}', [
        'uses' => 'Frontend\Tours\tourController@detailtours',
        'as' => 'tour.detail'
    ]);
    Route::get('/Book/{id}', [
        'uses' => 'Frontend\Tours\tourController@bookingdetailstour',
        'as' => 'tour.book'
    ]);
    Route::post('/Booking/{id}', [
        'uses' => 'Frontend\Tours\tourController@savebooking',
        'as' => 'tour.savebooking'
    ]);
    Route::get('Tour/Booked/Success', [
        'uses' => 'Frontend\Tours\tourController@bookedsuccess',
        'as' => 'tour.bookedsuccess'
    ]);
    Route::get('Rooom/Booked/Success/{email}', [
        'uses' => 'Frontend\Tours\tourController@sendemail',
        'as' => 'tour.sendemail'
    ]);
});
Route::group(['prefix' => 'Vehicle'], function () {
    Route::get('/Lists', [
        'uses' => 'Frontend\Vehicles\vehicleController@listvehicles',
        'as' => 'vehicle.list'
    ]);
    Route::get('/Result', [
        'uses' => 'Frontend\Vehicles\vehicleController@resultvehicles',
        'as' => 'vehicle.result'
    ]);
    Route::get('/Search', [
        'uses' => 'Frontend\Vehicles\vehicleController@searchvehicles',
        'as' => 'vehicle.search'
    ]);
    Route::get('/dBook', [
        'uses' => 'Frontend\Vehicles\vehicleController@searchvehicle',
        'as' => 'vehicles.search'
    ]);
    Route::get('/Details/{id}', [
        'uses' => 'Frontend\Vehicles\vehicleController@detailvehicles',
        'as' => 'vehicle.detail'
    ]);
    Route::get('/Book/{id}', [
        'uses' => 'Frontend\Vehicles\vehicleController@bookingdetailsvehicle',
        'as' => 'vehicle.book'
    ]);
    Route::post('/Booking/{id}', [
        'uses' => 'Frontend\Vehicles\vehicleController@savebooking',
        'as' => 'vehicle.savebooking'
    ]);
    Route::get('Vehicle/Booked/Success', [
        'uses' => 'Frontend\Vehicles\vehicleController@bookedsuccess',
        'as' => 'vehicle.bookedsuccess'
    ]);
    Route::get('Rooom/Booked/Success/{email}', [
        'uses' => 'Frontend\Vehicles\vehicleController@sendemail',
        'as' => 'vehicle.sendemail'
    ]);
});

Route::prefix('backend')->group(function () {
    Route::get('/', function () {
        return view('Backend.Users.login');
    })->name('login');


    Route::group(['prefix' => 'admin'], function () {


        Route::get('/dashboard', [
            'uses' => 'Backend\Admin\dashboardControlller@index',
            'as' => 'dashboard'
        ]);

        Route::get('/forgetpassword', function () {
            return view('Backend.Users.login');
        })->name('password.request');

        Route::get('/dashboard', [
            'uses' => 'Backend\Admin\dashboardController@index',
            'as' => 'dashboard'
        ]);
        Route::group(['prefix' => 'agent'], function () {
            Route::get('/', [
                'uses' => 'Backend\Agent\agentController@index',
                'as' => 'organization'
            ]);
            Route::post('/agentsAdd', [
                'uses' => 'Backend\Agent\agentController@create',
                'as' => 'agent.add'
            ]);
            Route::get('/agentUpdate/{id}', [
                'uses' => 'Backend\Agent\agentController@update',
                'as' => 'agent.update'
            ]);
            Route::post('/agentUpdate/{id}', [
                'uses' => 'Backend\Agent\agentController@saveUpdate',
                'as' => 'agent.update.post'
            ]);
            Route::get('/activateAgent/{id}', [
                'uses' => 'Backend\Agent\agentController@activateAgent',
                'as' => 'agent.activate'
            ]);
            Route::get('/deactivateAgent/{id}', [
                'uses' => 'Backend\Agent\agentController@deactivateAgent',
                'as' => 'agent.deactivate'
            ]);
            Route::get('/agentDetails/{id}', [
                'uses' => 'Backend\Agent\agentController@viewDetails',
                'as' => 'agent.details'
            ]);
            Route::get('agentDelete/{id}', [
                'uses' => 'Backend\Agent\agentController@delete',
                'as' => 'agent.delete'
            ]);

            Route::get('agentFiles/{filename}', [
                'uses' => 'Backend\Agent\agentController@getFile',
                'as' => 'getimages']);
        });
        Route::group(['prefix' => 'customer'], function () {
            Route::get('/', [
                'uses' => 'Backend\Customer\customerController@index',
                'as' => 'customer'
            ]);

            Route::post('/customerAdd', [
                'uses' => 'Backend\Customer\customerController@create',
                'as' => 'customer.add'
            ]);
            Route::get('/customerUpdate/{id}', [
                'uses' => 'Backend\Customer\customerController@update',
                'as' => 'customer.update'
            ]);
            Route::post('/customerUpdate/{id}', [
                'uses' => 'Backend\Customer\customerController@saveUpdate',
                'as' => 'customer.update.post'
            ]);
            Route::get('/activateCustomer/{id}', [
                'uses' => 'Backend\Customer\customerController@activateAgent',
                'as' => 'customer.activate'
            ]);
            Route::get('/deactivateCustomer/{id}', [
                'uses' => 'Backend\Customer\customerController@deactivateAgent',
                'as' => 'customer.deactivate'
            ]);
            Route::get('/customerDetails/{id}', [
                'uses' => 'Backend\Customer\customerController@viewDetails',
                'as' => 'customer.details'
            ]);
            Route::get('customerDelete/{id}', [
                'uses' => 'Backend\Customer\customerController@delete',
                'as' => 'customer.delete'
            ]);

            Route::get('customerFiles/{filename}', [
                'uses' => 'Backend\Customer\customerController@getFile',
                'as' => 'getimages'
            ]);
        });
        Route::group(['prefix' => 'Slider'], function () {
            Route::get('/', [
                'uses' => 'Backend\Slider\sliderController@index',
                'as' => 'slider'
            ]);
            Route::post('/create', [
                'uses' => 'Backend\Slider\sliderController@create',
                'as' => 'slider.add'
            ]);
            Route::get('/edit/{id}', [
                'uses' => 'Backend\Slider\sliderController@update',
                'as' => 'slider.edit'
            ]);
            Route::post('/update/{id}', [
                'uses' => 'Backend\Slider\sliderController@saveUpdate',
                'as' => 'slider.update'
            ]);
            Route::get('/sliderDetails/{id}', [
                'uses' => 'Backend\Slider\sliderController@viewDetails',
                'as' => 'slider.details'
            ]);

//           Route::resource('Slider','Backend\Slider\sliderController') ;
        });


        Route::group(['prefix' => 'hotel'], function () {
            Route::get('/', [
                'uses' => 'Backend\Hotels\hotelsController@list',
                'as' => 'hotels.list'
            ]);
            Route::post('/create', [
                'uses' => 'Backend\Hotels\hotelsController@createHotel',
                'as' => 'hotels.add'
            ]);
            Route::get('/edit/{id}', [
                'uses' => 'Backend\Hotels\hotelsController@editHotel',
                'as' => 'hotels.edit'
            ]);
            Route::post('/update', [
                'uses' => 'Backend\Hotels\hotelsController@storeHotel',
                'as' => 'hotels.update'
            ]);
            Route::post('/search', [
                'uses' => 'Backend\Hotels\hotelsController@search',
                'as' => 'hotels.search'
            ]);
            Route::get('/hotelDetails/{id}', [
                'uses' => 'Backend\Hotels\hotelsController@viewDetails',
                'as' => 'hotels.details'
            ]);

            Route::get('/activateHotel/{id}', [
                'uses' => 'Backend\Hotels\hotelsController@activateHotel',
                'as' => 'hotels.activate'
            ]);
            Route::get('/deactivateHotel/{id}', [
                'uses' => 'Backend\Hotels\hotelsController@deactivateHotel',
                'as' => 'hotels.deactivate'
            ]);
            Route::get('/ImageGallery/{id}', [
                'uses' => 'Backend\Hotels\hotelsController@hotelImageGallery',
                'as' => 'hotels.images'
            ]);
            Route::post('/AddImageGallery', [
                'uses' => 'Backend\Hotels\hotelsController@hotelAddImageGallery',
                'as' => 'hotels.images.addgallery'
            ]);
            Route::get('/DeleteImageGallery/{id}', [
                'uses' => 'Backend\Hotels\hotelsController@hoteldeleteImageGallery',
                'as' => 'delete.hotel.image'
            ]);

            Route::group(['prefix' => 'services'], function () {
                Route::get('/', [
                    'uses' => 'Backend\Hotels\hotelsServicesController@list',
                    'as' => 'hotels.services.list'
                ]);
                Route::post('/add', [
                    'uses' => 'Backend\Hotels\hotelsServicesController@add',
                    'as' => 'hotels.services.add'
                ]);
                Route::get('/edit/{id}', [
                    'uses' => 'Backend\Hotels\hotelsServicesController@edit',
                    'as' => 'hotels.services.edit'
                ]);
                Route::get('/update/{id}', [
                    'uses' => 'Backend\Hotels\hotelsServicesController@update',
                    'as' => 'hotels.services.update'
                ]);
                Route::get('/activateService/{id}', [
                    'uses' => 'Backend\Hotels\hotelsServicesController@activate',
                    'as' => 'hotels.services.activate'
                ]);
                Route::get('/deactivateService/{id}', [
                    'uses' => 'Backend\Hotels\hotelsServicesController@deactivate',
                    'as' => 'hotels.services.deactivate'
                ]);
            });
            Route::group(['prefix' => 'room'], function () {
                Route::group(['prefix' => 'room-types'], function () {
                    Route::get('/', [
                        'uses' => 'Backend\Hotels\hotelsRoomTypesController@list',
                        'as' => 'hotels.room.types.list'
                    ]);
                    Route::post('/add', [
                        'uses' => 'Backend\Hotels\hotelsRoomTypesController@add',
                        'as' => 'hotels.room.types.add'
                    ]);
                    Route::get('/edit/{id}', [
                        'uses' => 'Backend\Hotels\hotelsRoomTypesController@edit',
                        'as' => 'hotels.room.types.edit'
                    ]);
                    Route::get('/update/{id}', [
                        'uses' => 'Backend\Hotels\hotelsRoomTypesController@update',
                        'as' => 'hotels.room.types.update'
                    ]);

                });
                Route::group(['prefix' => 'room-amenities'], function () {
                    Route::get('/', [
                        'uses' => 'Backend\Hotels\hotelRoomAmenitiesController@list',
                        'as' => 'hotels.room.amenities.list'
                    ]);
                    Route::post('/add', [
                        'uses' => 'Backend\Hotels\hotelRoomAmenitiesController@add',
                        'as' => 'hotels.room.amenities.add'
                    ]);
                    Route::get('/edit/{id}', [
                        'uses' => 'Backend\Hotels\hotelRoomAmenitiesController@edit',
                        'as' => 'hotels.room.amenities.edit'
                    ]);
                    Route::get('/update/{id}', [
                        'uses' => 'Backend\Hotels\hotelRoomAmenitiesController@update',
                        'as' => 'hotels.room.amenities.update'
                    ]);
                    Route::get('/activateAmenity/{id}', [
                        'uses' => 'Backend\Hotels\hotelRoomAmenitiesController@activate',
                        'as' => 'hotels.room.amenities.activate'
                    ]);
                    Route::get('/deactivateAmenity/{id}', [
                        'uses' => 'Backend\Hotels\hotelRoomAmenitiesController@deactivate',
                        'as' => 'hotels.room.amenities.deactivate'
                    ]);
                });
                Route::group(['prefix' => 'room-services'], function () {
                    Route::get('/', [
                        'uses' => 'Backend\Hotels\hotelsRoomServicesController@list',
                        'as' => 'hotels.room.services.list'
                    ]);
                    Route::post('/add', [
                        'uses' => 'Backend\Hotels\hotelsRoomServicesController@add',
                        'as' => 'hotels.room.services.add'
                    ]);
                    Route::get('/edit/{id}', [
                        'uses' => 'Backend\Hotels\hotelsRoomServicesController@edit',
                        'as' => 'hotels.room.services.edit'
                    ]);
                    Route::get('/update/{id}', [
                        'uses' => 'Backend\Hotels\hotelsRoomServicesController@update',
                        'as' => 'hotels.room.services.update'
                    ]);
                    Route::get('/activateService/{id}', [
                        'uses' => 'Backend\Hotels\hotelsRoomServicesController@activate',
                        'as' => 'hotels.room.services.activate'
                    ]);
                    Route::get('/deactivateService/{id}', [
                        'uses' => 'Backend\Hotels\hotelsRoomServicesController@deactivate',
                        'as' => 'hotels.room.services.deactivate'
                    ]);
                });

                Route::get('/', [
                    'uses' => 'Backend\Hotels\roomsController@listRoom',
                    'as' => 'rooms.list'
                ]);
                Route::get('/{hotel_id}/{location_city}/{no_of_people}/{start_date}/{end_date}/', [
                    'uses' => 'Backend\Hotels\roomsController@searchlistRoom',
                    'as' => 'rooms.searchlist'
                ]);
                Route::post('/create', [
                    'uses' => 'Backend\Hotels\roomsController@createRoom',
                    'as' => 'rooms.add'
                ]);
                Route::get('/edit/{id}', [
                    'uses' => 'Backend\Hotels\roomsController@editRoom',
                    'as' => 'rooms.edit'
                ]);
                Route::get('/update', [
                    'uses' => 'Backend\Hotels\roomsController@storeRoom',
                    'as' => 'rooms.update'
                ]);
                Route::post('/search', [
                    'uses' => 'Backend\Hotels\roomsController@searchRoom',
                    'as' => 'rooms.search'
                ]);
                Route::get('/roomDetails/{id}', [
                    'uses' => 'Backend\Hotels\roomsController@viewRoomDetails',
                    'as' => 'rooms.details'
                ]);

                Route::get('/activateRoom/{id}', [
                    'uses' => 'Backend\Hotels\roomsController@activateRoom',
                    'as' => 'rooms.activate'
                ]);
                Route::get('/deactivateRoom/{id}', [
                    'uses' => 'Backend\Hotels\roomsController@deactivateroom',
                    'as' => 'rooms.deactivate'
                ]);
                Route::get('/ImageGallery/{id}', [
                    'uses' => 'Backend\Hotels\roomsController@roomImageGallery',
                    'as' => 'rooms.images'
                ]);
                Route::post('/AddImageGallery', [
                    'uses' => 'Backend\Hotels\roomsController@roomAddImageGallery',
                    'as' => 'rooms.images.addgallery'
                ]);
                Route::get('/DeleteImageGallery/{id}', [
                    'uses' => 'Backend\Hotels\roomsController@roomdeleteImageGallery',
                    'as' => 'rooms.room.image'
                ]);
                Route::group(['prefix' => 'bookingRooms'], function () {
                    Route::get('/', [
                        'uses' => 'Backend\Hotels\bookingroomsController@list',
                        'as' => 'bookingsRoom.list'
                    ]);
                    Route::get('/create/{id}/{city}/{start_date}/{end_date}/{no_of_people}', [
                        'uses' => 'Backend\Hotels\bookingroomsController@createBooking',
                        'as' => 'bookingsRoom.add'
                    ]);
                    Route::post('/create', [
                        'uses' => 'Backend\Hotels\bookingroomsController@saveBooking',
                        'as' => 'bookingsRoom.save'
                    ]);
                    Route::post('/search', [
                        'uses' => 'Backend\Hotels\bookingroomsController@search',
                        'as' => 'bookingsRoom.search'
                    ]);
                    Route::get('/edit/{id}', [
                        'uses' => 'Backend\Hotels\bookingroomsController@edit',
                        'as' => 'bookingsRoom.edit'
                    ]);
                    Route::post('/update', [
                        'uses' => 'Backend\Hotels\bookingroomsController@updateBookings',
                        'as' => 'bookingsRoom.update'
                    ]);
                    Route::get('/bookingRoomDetails/{id}', [
                        'uses' => 'Backend\Hotels\bookingroomsController@viewDetails',
                        'as' => 'bookingsRoom.details'
                    ]);

                    Route::get('/activatebookingRoom/{id}', [
                        'uses' => 'Backend\Hotels\bookingroomsController@activateRoom',
                        'as' => 'bookingsRoom.activate'
                    ]);
                    Route::get('/deactivateRoom/{id}', [
                        'uses' => 'Backend\Hotels\bookingroomsController@deactivateRoom',
                        'as' => 'bookingsRoom.deactivate'
                    ]);

                });
            });
            Route::group(['prefix' => 'HotelOffers'], function () {
                Route::get('/', [
                    'uses' => 'Backend\Hotel_Offers\hotelOffersController@index',
                    'as' => 'HotelOffers.list'
                ]);
                Route::post('/create', [
                    'uses' => 'Backend\Hotel_Offers\hotelOffersController@createHotelOffer',
                    'as' => 'HotelOffers.add'
                ]);
                Route::get('/AddHotels/{id}', [
                    'uses' => 'Backend\Hotel_Offers\hotelOffersController@addHotelsInOffers',
                    'as' => 'HotelsOffer.addHotels'
                ]);
                Route::post('/SaveHotels', [
                    'uses' => 'Backend\Hotel_Offers\hotelOffersController@saveaddHotelsInOffers',
                    'as' => 'HotelOffer.SaveHotels'
                ]);
                Route::get('/HotelOffersDetails/{id}', [
                    'uses' => 'Backend\Hotel_Offers\hotelOffersController@viewDetails',
                    'as' => 'HotelsOffer.details'
                ]);
                Route::get('/HotelOfferEdit/{id}', [
                    'uses' => 'Backend\Hotel_Offers\hotelOffersController@editOffer',
                    'as' => 'HotelsOffer.edit'
                ]);
                Route::get('/HotelsOffersHotelsEdit/{id}', [
                    'uses' => 'Backend\Hotel_Offers\hotelOffersController@editHotelsInOffer',
                    'as' => 'HotelsOfferHotels.edit'
                ]);

                Route::post('/update', [
                    'uses' => 'Backend\Hotel_Offers\hotelOffersController@updateHotelOffers',
                    'as' => 'HotelsOffer.update'
                ]);
            });
            Route::group(['prefix' => 'pages'], function () {
                Route::get('/', [
                    'uses' => 'Backend\Pages\pagesController@list',
                    'as' => 'pages.list'
                ]);
                Route::post('/create', [
                    'uses' => 'Backend\Pages\pagesController@createPages',
                    'as' => 'pages.add'
                ]);
                Route::post('/search', [
                    'uses' => 'Backend\Pages\pagesController@search',
                    'as' => 'pages.search'
                ]);
                Route::get('/edit/{id}', [
                    'uses' => 'Backend\Pages\pagesController@edit',
                    'as' => 'pages.edit'
                ]);
                Route::post('/update', [
                    'uses' => 'Backend\Pages\pagesController@updatePages',
                    'as' => 'pages.update'
                ]);
                Route::get('/pageDetails/{id}', [
                    'uses' => 'Backend\Pages\pagesController@viewDetails',
                    'as' => 'pages.details'
                ]);

                Route::get('/activatePage/{id}', [
                    'uses' => 'Backend\Pages\pagesController@activatePage',
                    'as' => 'pages.activate'
                ]);
                Route::get('/deactivatePage/{id}', [
                    'uses' => 'Backend\Pages\pagesController@deactivatePage',
                    'as' => 'pages.deactivate'
                ]);
            });
        });
        Route::group(['prefix' => 'tours'], function () {
            Route::get('/', [
                'uses' => 'Backend\Tours\toursController@list',
                'as' => 'tours.list'
            ]);
            Route::post('/create', [
                'uses' => 'Backend\Tours\toursController@createTours',
                'as' => 'tours.add'
            ]);
            Route::post('/search', [
                'uses' => 'Backend\Tours\toursController@search',
                'as' => 'tours.search'
            ]);
            Route::get('/edit/{id}', [
                'uses' => 'Backend\Tours\toursController@edit',
                'as' => 'tours.edit'
            ]);
            Route::post('/update', [
                'uses' => 'Backend\Tours\toursController@updateTours',
                'as' => 'tours.update'
            ]);
            Route::get('/tourDetails/{id}', [
                'uses' => 'Backend\Tours\toursController@viewDetails',
                'as' => 'tours.details'
            ]);

            Route::get('/activateTour/{id}', [
                'uses' => 'Backend\Tours\toursController@activateTour',
                'as' => 'tours.activate'
            ]);
            Route::get('/deactivateTour/{id}', [
                'uses' => 'Backend\Tours\toursController@deactivateTour',
                'as' => 'tours.deactivate'
            ]);
            Route::get('/ImageGallery/{id}', [
                'uses' => 'Backend\Tours\toursController@ImageGallery',
                'as' => 'tours.images'
            ]);
            Route::post('/AddImageGallery', [
                'uses' => 'Backend\Tours\toursController@AddImageGallery',
                'as' => 'tours.images.addgallery'
            ]);
            Route::get('/DeleteImageGallery/{id}', [
                'uses' => 'Backend\Tours\toursController@deleteImageGallery',
                'as' => 'delete.tours.image'
            ]);
            Route::group(['prefix' => 'bookingTours'], function () {
                Route::get('/', [
                    'uses' => 'Backend\Tours\bookingtoursController@list',
                    'as' => 'bookingsTour.list'
                ]);
                Route::get('/create/{id}', [
                    'uses' => 'Backend\Tours\bookingtoursController@createBooking',
                    'as' => 'bookingsTour.add'
                ]);
                Route::post('/create', [
                    'uses' => 'Backend\Tours\bookingtoursController@saveBooking',
                    'as' => 'bookingsTour.save'
                ]);
                Route::post('/search', [
                    'uses' => 'Backend\Tours\bookingtoursController@search',
                    'as' => 'bookingsTour.search'
                ]);
                Route::get('/edit/{id}', [
                    'uses' => 'Backend\Tours\bookingtoursController@edit',
                    'as' => 'bookingsTour.edit'
                ]);
                Route::post('/update', [
                    'uses' => 'Backend\Tours\bookingtoursController@updateBookings',
                    'as' => 'bookingsTour.update'
                ]);
                Route::get('/bookingTourDetails/{id}', [
                    'uses' => 'Backend\Tours\bookingtoursController@viewDetails',
                    'as' => 'bookingsTour.details'
                ]);

                Route::get('/activatebookingTour/{id}', [
                    'uses' => 'Backend\Tours\bookingtoursController@activateTour',
                    'as' => 'bookingsTour.activate'
                ]);
                Route::get('/deactivateTour/{id}', [
                    'uses' => 'Backend\Tours\bookingtoursController@deactivateTour',
                    'as' => 'bookingsTour.deactivate'
                ]);

            });

        });
        Route::group(['prefix' => 'vehicle'], function () {
            Route::get('/', [
                'uses' => 'Backend\Vehicles\vehiclesController@list',
                'as' => 'vehicles.list'
            ]);
            Route::post('/create', [
                'uses' => 'Backend\Vehicles\vehiclesController@createVehicle',
                'as' => 'vehicles.add'
            ]);
            Route::get('/edit/{id}', [
                'uses' => 'Backend\Vehicles\vehiclesController@editVehicle',
                'as' => 'vehicles.edit'
            ]);
            Route::get('/update', [
                'uses' => 'Backend\Vehicles\vehiclesController@storeVehicle',
                'as' => 'vehicles.update'
            ]);
            Route::post('/search', [
                'uses' => 'Backend\Vehicles\vehiclesController@search',
                'as' => 'vehicles.search'
            ]);
            Route::get('/vehicleDetails/{id}', [
                'uses' => 'Backend\Vehicles\vehiclesController@viewDetails',
                'as' => 'vehicles.details'
            ]);

            Route::get('/activateVehicle/{id}', [
                'uses' => 'Backend\Vehicles\vehiclesController@activateVehicle',
                'as' => 'vehicles.activate'
            ]);
            Route::get('/deactivateVehicle/{id}', [
                'uses' => 'Backend\Vehicles\vehiclesController@deactivateVehicle',
                'as' => 'vehicles.deactivate'
            ]);
            Route::group(['prefix' => 'bookingVehicles'], function () {
                Route::get('/', [
                    'uses' => 'Backend\Vehicles\bookingvehiclesController@list',
                    'as' => 'bookingsVehicle.list'
                ]);
                Route::get('/create/{vehicle_id}/{type}/{no_of_People}/{start_date}/{end_date}/', [
                    'uses' => 'Backend\Vehicles\bookingvehiclesController@createBooking',
                    'as' => 'bookingsVehicle.add'
                ]);
                Route::post('/create', [
                    'uses' => 'Backend\Vehicles\bookingvehiclesController@saveBooking',
                    'as' => 'bookingsVehicle.save'
                ]);
                Route::post('/search', [
                    'uses' => 'Backend\Vehicles\bookingvehiclesController@search',
                    'as' => 'bookingsVehicle.search'
                ]);
                Route::get('/edit/{id}', [
                    'uses' => 'Backend\Vehicles\bookingvehiclesController@edit',
                    'as' => 'bookingsVehicle.edit'
                ]);
                Route::post('/update', [
                    'uses' => 'Backend\Vehicles\bookingvehiclesController@updateBookings',
                    'as' => 'bookingsVehicle.update'
                ]);
                Route::get('/bookingVehicleDetails/{id}', [
                    'uses' => 'Backend\Vehicles\bookingvehiclesController@viewDetails',
                    'as' => 'bookingsVehicle.details'
                ]);

                Route::get('/activatebookingVehicle/{id}', [
                    'uses' => 'Backend\Vehicles\bookingvehiclesController@activateVehicle',
                    'as' => 'bookingsVehicle.activate'
                ]);
                Route::get('/deactivateVehicle/{id}', [
                    'uses' => 'Backend\Vehicles\bookingvehiclesController@deactivateVehicle',
                    'as' => 'bookingsVehicle.deactivate'
                ]);

            });
        });
    });

//
//    Route::get('/logout', [
//        'uses' => 'Auth\UsersController@getLogout',
//        'as' => 'backend.logout'
//    ]);
//    Route::post('/logout', [
//        'uses' => 'Auth\UsersController@getLogout',
//        'as' => 'backend.logout'
//    ]);
    Route::resource('/users', 'Auth\UsersController');
    Route::resource('/permissions', 'Auth\PermissionController', ['except' => 'destroy']);
    Route::resource('/roles', 'Auth\RoleController', ['except' => 'destroy']);
});

Auth::routes();
