<?php


namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function index(){

    // Déclarer TOUTES les variables de la table tasks
        $tasks= Task::all();
    //                      Afficher $tasks sur la vue concernée
        return view("todo", compact("tasks"));
    }


    public function addtodo(Request $request){

        $pourvalider = $request->validate([
            'tache' => 'required|min:2'
        ]);
        // dd($pourvalider);

        if (isset($pourvalider)) {

// Créer l'instance de la classe (créer un nouvel exemplaire de la table)
            $todo = new Task ;

            // Afectation des données à l'intance
//   variable créée -> colonne table = $request->colonne table
            $todo->tache = $request->tache ;
            // Variable en dur (valeur par défaut)
            $todo->etat = "n" ;

            $todo->save() ;
        }

        return back();
        // return view("todo");

    }

    public function remove($tache){

        $item = Task::where('tache', $tache)->delete() ;

        return view("todo");
    }

    // public function update(){

    // }

}