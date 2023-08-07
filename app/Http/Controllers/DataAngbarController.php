<?php

namespace App\Http\Controllers;

use DateTimeZone;
use Carbon\Carbon;
use App\Models\dataAngbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Yajra\DataTables\Facades\DataTables;

class DataAngbarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $year = Carbon::now(new DateTimeZone('Asia/Jakarta'))->year;
            $query = dataAngbar::with('user:id,name')->where('tahun',$year)->get();
            return DataTables::of($query)->addColumn('pengelola',function($dataAngbar){
                return $dataAngbar->user->name;
            })->addColumn('encrypted_id', function ($dataAngbar) {
                return Crypt::encryptString($dataAngbar->id);
            })->addColumn('volume_persentase', function ($dataAngbar) {
                if($dataAngbar->volume_realisasi){
                    return round(($dataAngbar->volume_realisasi / $dataAngbar->volume_program) * 100,2);
                }else{
                    return;
                }
            })->addColumn('pendapatan_persentase', function ($dataAngbar) {
                if ($dataAngbar->pendapatan_realisasi) {
                    return round(($dataAngbar->pendapatan_realisasi / $dataAngbar->pendapatan_program) * 100,2);
                } else {
                    return;
                }
            })->make();
        }

        return view('pages.dataangbar.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bulan_pilihan = [];

        for ($bulan = 1; $bulan <= 12; $bulan++) {
            $carbon = Carbon::createFromDate(null, $bulan, 1, "Asia/Jakarta");
            $bulan_tertulis = $carbon->locale('id')->isoFormat('MMMM');
            $bulan_pilihan[$bulan] = $bulan_tertulis;
        }

        return view('pages.dataangbar.create',[
            'bulan_pilihan' => $bulan_pilihan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id = auth()->user()->id;

        $request->validate([
            'volume_program' => 'required|numeric',
            'volume_realisasi' => 'numeric',
            'pendapatan_program' => 'numeric|required',
            'pendapatan_realisasi' => 'numeric',
            'bulan' => 'required',
        ]);

        $year = Carbon::now(new DateTimeZone('Asia/Jakarta'))->year;

        $data = [
            'user_id' => $id,
            'volume_program' => $request->volume_program,
            'volume_realisasi' => $request->volume_realisasi,
            'pendapatan_program' => $request->pendapatan_program,
            'pendapatan_realisasi' => $request->pendapatan_realisasi,
            'bulan' => $request->bulan,
            'tahun' => $year,
        ];

        dataAngbar::create($data);

        return redirect('dataAngbar')->with('toast', 'showToast("Data berhasil disimpan")');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $idCrypt = Crypt::decryptString($id);
        $item = dataAngbar::findOrFail($idCrypt);

        $bulan_pilihan = [];

        for ($bulan = 1; $bulan <= 12; $bulan++) {
            $carbon = Carbon::createFromDate(null, $bulan, 1, "Asia/Jakarta");
            $bulan_tertulis = $carbon->locale('id')->isoFormat('MMMM');
            $bulan_pilihan[$bulan] = $bulan_tertulis;
        }

        return view('pages.dataangbar.edit', [
            'item'  =>  $item,
            'bulan_pilihan' => $bulan_pilihan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataAngbar = dataAngbar::findOrFail($id);

        $request->validate([
            'volume_program' => 'required|numeric',
            'volume_realisasi' => 'numeric',
            'pendapatan_program' => 'numeric|required',
            'pendapatan_realisasi' => 'numeric',
            'bulan' => 'required',
        ]);

        $year = Carbon::now(new DateTimeZone('Asia/Jakarta'))->year;

        $data = [
            'volume_program' => $request->volume_program,
            'volume_realisasi' => $request->volume_realisasi,
            'pendapatan_program' => $request->pendapatan_program,
            'pendapatan_realisasi' => $request->pendapatan_realisasi,
            'bulan' => $request->bulan,
            'tahun' => $year,
        ];

        $dataAngbar->update($data);

        return redirect('dataAngbar')->with('toast', 'showToast("Data berhasil diupdate")');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $idCrypt = Crypt::decryptString($id);
        $dataAngbar = dataAngbar::findOrFail($idCrypt);
        $dataAngbar->delete();

        return redirect()->back()->with('toast', 'showToast("Data berhasil dihapus")');
    }
}
