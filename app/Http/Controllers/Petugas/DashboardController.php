<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //count
        $count_buku = Buku::count();
        $count_user = User::role('peminjam')->count();
        $count_sedang_dipinjam = Peminjaman::where('status', 2)->count();
        $count_selesai_dipinjam = Peminjaman::where('status', 3)->count();


        return view('petugas/dashboard/index', 
            compact(
                'count_buku', 'count_user', 'count_sedang_dipinjam', 'count_selesai_dipinjam'
            ));
    }
}
