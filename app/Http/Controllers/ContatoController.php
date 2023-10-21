<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\View\View;
 
class ContatoController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function contato()
    {
        return view('contato');
    }
}