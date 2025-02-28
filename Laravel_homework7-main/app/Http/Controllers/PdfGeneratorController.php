<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\MyUser;

class PdfGeneratorController extends Controller
{
    //
    public function index($id) {
        
        $user = MyUser::find($id);
        $data = [
            'name' => $user->name,
            'surname' => $user->surname,
            'email' => $user->email
        ];
        $pdf = PDF::loadView('resume', $data);
        return $pdf->stream('resume.pdf');
    }
}
