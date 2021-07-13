<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChessController extends Controller
{
    public function index()
    {

        //Colors for switching between them

        $colors1=['light','dark','light','dark','light','dark','light','dark'];
        $colors2=['dark','light','dark','light','dark','light','dark','light'];


        //Unicode for pieces pictures
        $mainPiecesTop = ["&#9820;","&#9822;","&#9821;","&#9819;","&#9818;","&#9821;","&#9822;",
            "&#9820;"];
        $topSoldiers = "&#9821;";
        $bottomSoldiers = "&#9817;";
        $mainPiecesBottom = ['&#9814;','&#9816;','&#9815;','&#9813;','&#9812;','&#9815;',
            '&#9816;','&#9814;'];

        return view('welcome',compact('colors1','colors2','mainPiecesTop','mainPiecesBottom',
        'topSoldiers','bottomSoldiers'));


    }
}
