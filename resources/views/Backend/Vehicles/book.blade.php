Route::group(['prefix' => 'bookingVehicles'], function () {
Route::get('/', [
'uses' => 'Backend\Vehicles\bookingvehiclesController@list',
'as' => 'bookingsVehicle.list'
]);
Route::get('/create/{id}/{tag}/{start_date}/{end_date}/{no_of_people}', [
'uses' => 'Backend\Vehicles\bookingvehiclesController@createBooking',
'as' => 'bookingsVehicle.add'
]);
Route::post('/create',[
'uses'=>'Backend\Vehicles\bookingvehiclesController@saveBooking',
'as'=>'bookingsVehicle.save'
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