<?php


Route::get('/', function () {
    return view('home');
});

Route::get('/getLogin', function () {
    return view('connexion');
});

Route::post('/login', 'CommercialController@login');
Route::get('/logout', 'CommercialController@logout');

Route::get('/getListeMedicaments', 'MedicamentController@getMedicaments');

Route::get('/getMedicamentsParFamille','FamilleController@getFamille');

Route::post('/rechercheParFamille','MedicamentController@getMedicamentsParFamille');

Route::get('/getMedicamentsParNom','MedicamentController@getMedicamentsParNom');

Route::post('/rechercheParNom','MedicamentController@getUnMedicament');


Route::get('/getErrors/{retour}', ['as' => '/getErrors', 'uses' => 'ErrorsController@getErreurs']);

//Afficher un Medicament
Route::get('/formMedicament/{id_medicament}','MedicamentController@getUnMedicament');

//Supprimer une interaction
Route::get('/supprimeInteraction/{id_medicament}/{med_id_medicament}', 'InteractionController@supprInteraction');

//Formulaire pour ajouter un Medicament
Route::get('/ajouterInteraction', 'InteractionController@AjoutInteraction');

//Ajout de l'interaction
Route::post('/addInteraction', 'InteractionController@addInteraction');

//Formulaire pour modifier un Medicament
Route::get('/modifierInteraction/{id_medicament}/{med_id_medicament}', 'InteractionController@updateInteraction');

//Formulaire pour afficher les interactions
Route::get('/listerInteraction/{id_medicament}', 'InteractionController@getInteraction');

//Enregistrer une modification d'un Medicament
Route::post('/validerInteraction', 'interactionController@validateInteraction');

Route::post('/rechercheMedicamentFamille',[
    'as'=>'postRechercheMedicamentFamille',
    'uses'=>'MedicamentController@getMedicamentsParFamille'
]);