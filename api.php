Route::group(['middleware' => ['tokenaccess']], function () {
  Route::get('cities', 'CityAPIController@show_city');
});
