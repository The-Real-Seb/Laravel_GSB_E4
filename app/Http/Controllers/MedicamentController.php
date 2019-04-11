<?php
/**
 * Created by PhpStorm.
 * User: S.Chevallier
 * Date: 14/03/2019
 * Time: 15:28
 */

namespace App\Http\Controllers;
use App\Http\metier\Medicament;
use Exception;
use Request;
use Illuminate\Support\Facades\Session;

class MedicamentController extends Controller
{
    public function getMedicaments(){
        try{
            $erreur = Session::get('erreur');
            Session::forget('erreur');
            $unMedicament = new Medicament();
            $title = "Liste des medicaments";
            $mesMedicaments = $unMedicament->getMedicaments();
            return view('listerMedicament', compact('mesMedicaments', 'erreur', 'title'));
        }catch (MonException $e){
            $monErreur = $e->getMessage();
            return view('error', compact('monErreur'));
        }catch (Exception $e){
            $monErreur = $e->getMessage();
            return view('error', compact('monErreur'));
        }
    }

    public function getUnMedicaments($id_medicament){
        try{
            $erreur = Session::get('erreur');
            Session::forget('erreur');
            $unMedicament = new Medicament();
            $mesMedicaments = $unMedicament->getUnMedicaments($id_medicament);
            return view('listerMedicament', compact('mesMedicaments', 'erreur'));
        }catch (MonException $e){
            $monErreur = $e->getMessage();
            return view('error', compact('monErreur'));
        }catch (Exception $e){
            $monErreur = $e->getMessage();
            return view('error', compact('monErreur'));
        }
    }

    public function getMedicamentsParNom(){
        try{
            $erreur = Session::get('erreur');
            Session::forget('erreur');
            $unMedicament = new Medicament();
            $mesMedicaments = $unMedicament->getMedicamentsParNom();
            return view('listerMedicament', compact('mesMedicaments', 'erreur'));
        }catch (MonException $e){
            $monErreur = $e->getMessage();
            return view('error', compact('monErreur'));
        }catch (Exception $e){
            $monErreur = $e->getMessage();
            return view('error', compact('monErreur'));
        }
    }
}