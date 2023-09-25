<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exceptions\MonException;
use Exception;
use App\dao\ServiceEmploye;
use Illuminate\Support\Facades\Validator;

class EmployeControleur extends Controller
{
    public function postAjouterEmploye(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'civilite' => 'required|in:Mr,Mme,Non genré',
            'prenom' => 'required|string',
            'nom' => 'required|string',
            'passe' => 'required|string',
            'profil' => 'required|in:particulier,professionnelle,institutionnel',
            'interet' => 'required|array',
            'message' => 'in:loc, achat', // Le champ message est-il facultatif ?
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $civilite = $request->input("civilite");
            $prenom = $request->input("prenom");
            $nom = $request->input("nom");
            $pwd = $request->input("passe");
            $profil = $request->input("profil");
            $interet = implode(', ', $request->input("interet"));
            $message = $request->input("message"); // Correction

            $unEmployeService = app(ServiceEmploye::class); // Utilisation de l'injection de dépendance
            $unEmployeService->ajoutEmploye($civilite, $prenom, $nom, $pwd, $profil, $interet, $message);

            return view("home");
        } catch (MonException $e) {
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        }
    }

    public function listerEmployes()
    {
        try {
            $unEmployeService = new ServiceEmploye();
            $mesEmployes = $unEmployeService->getListeEmployes();
            return view('vues/formEmployeLister', compact('mesEmployes'));
        } catch (MonException $e) {
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        } catch (Exception $e) {
            $monErreur = $e->getMessage();
            return view('vues/error', compact('monErreur'));
        }
    }
}
