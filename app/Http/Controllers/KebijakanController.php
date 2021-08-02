<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use PDF;

class KebijakanController extends Controller
{
    public function K3KebijakanPDF(){

        $pdf = PDF::loadView('pdf.k3kebijakan');

        return $pdf->download('K3KebijakanPTPilarperkasaPersada.pdf');

    }

    public function pengalamanPekerjaanPDF(){

        $pdf = PDF::loadView('pdf.pengalaman_pekerjaan');

        return $pdf->download('PengalamanPekerjaan.pdf');

    }

    public function LihatK3KebijakanPDF(){

        return \view('pdf.lihat_k3_kebijakan');

    }

    public function LihatpengalamanPekerjaanPDF(){

        return \view('pdf.lihat_pengalaman_pekerjaan');

    }

}
