Route::group(['prefix' => 'bookingRooms'], function () {
Route::get('/', [
'uses' => 'Backend\Rooms\Bookings\bookingroomsController@list',
'as' => 'bookingsRoom.list'
]);
Route::get('/create/{id}/{tag}/{start_date}/{end_date}/{no_of_people}', [
'uses' => 'Backend\Rooms\Bookings\bookingroomsController@createBooking',
'as' => 'bookingsRoom.add'
]);
Route::post('/create',[
'uses'=>'Backend\Rooms\Bookings\bookingroomsController@saveBooking',
'as'=>'bookingsRoom.save'
]);
Route::post('/search', [
'uses' => 'Backend\Rooms\Bookings\bookingroomsController@search',
'as' => 'bookingsRoom.search'
]);
Route::get('/edit/{id}', [
'uses' => 'Backend\Rooms\Bookings\bookingroomsController@edit',
'as' => 'bookingsRoom.edit'
]);
Route::post('/update', [
'uses' => 'Backend\Rooms\Bookings\bookingroomsController@updateBookings',
'as' => 'bookingsRoom.update'
]);
Route::get('/bookingRoomDetails/{id}', [
'uses' => 'Backend\Rooms\Bookings\bookingroomsController@viewDetails',
'as' => 'bookingsRoom.details'
]);

Route::get('/activatebookingRoom/{id}', [
'uses' => 'Backend\Rooms\Bookings\bookingroomsController@activateRoom',
'as' => 'bookingsRoom.activate'
]);
Route::get('/deactivateRoom/{id}', [
'uses' => 'Backend\Rooms\Bookings\bookingroomsController@deactivateRoom',
'as' => 'bookingsRoom.deactivate'
]);

});