<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\View\View;
 
class PrincipalController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function principal()
    {
        return view('principal');
    }
}
