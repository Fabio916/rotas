<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\View\View;
 
class SobreNosController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function sobrenos()
    {
        return view('sobrenos');
    }
}