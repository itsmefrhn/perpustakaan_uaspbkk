<?php

namespace App\Http\Livewire\Petugas;

use App\Models\Peminjaman;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ChartScript extends Component
{

    public $bulan_tahun;

    public function mount()
    {
        $this->bulan_tahun = date('2023-07');
    }
    public function render()
    {
        $bulan = substr($this->bulan_tahun, -2);
        $tahun = substr($this->bulan_tahun, 0, 4);

        $selesai_dipinjam = Peminjaman::select(DB::raw('count(*) as user_count, tanngal_pengembalian'))
        ->groupBy('tanngal_pengembalian')
            ->whereMonth('tanngal_pengembalian', $bulan)
            ->whereYear('tanngal_pengembalian', $tahun)
            ->where('status', 3)
            ->get();

            $hari_per_bulan = Carbon::parse($this->bulan_tahun)->daysInMonth;

            $tanggal_pengembalian = [];
            $count = [];
            for ($i=1; $i <= $hari_per_bulan; $i++) { 
                for ($j=0; $j < count($selesai_dipinjam); $j++) { 
                    if (substr($selesai_dipinjam[$j]->tanngal_pengembalian, 0, 2) == $i) {
                        $tanggal_pengembalian[$i] = substr($selesai_dipinjam[$j]->tanngal_pengembalian, 0, 2);
                        $count[$i] = $selesai_dipinjam[$j]->count;
                        break;
                    }else {
                        $tanggal_pengembalian[$i] = $i;
                        $count[$i] = 0;
                    }
                }
            }
    

        return view('livewire.petugas.chart-script', compact('count', 'tanggal_pengembalian'));
    }
}
