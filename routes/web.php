<?php



Route::get('/', 'SuperHeroController@index')->name('heroes');

Route::get('/hero/{hero}', 'SuperHeroController@show')->name('hero.show');

Route::get('/hero_create', 'SuperHeroController@create')->name('hero.create');

Route::post('/hero_save','SuperHeroController@save')->name('hero.save');

Route::get('/hero_edit/{hero}', 'SuperHeroController@edit')->name('hero.edit');

Route::post('/hero_update/{hero}','SuperHeroController@update')->name('hero.update');

Route::delete('/hero_delete/{id}', 
	'SuperHeroController@destroy')->name('hero.destroy');

Route::post('/image_save',
	'SuperHeroController@image_save')->name('image.save');

Route::delete('/image_delete/{id}',
    'SuperHeroController@image_destroy')->name('image.destroy');

