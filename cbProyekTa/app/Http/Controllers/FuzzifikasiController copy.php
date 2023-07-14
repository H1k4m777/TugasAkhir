<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelInferensi;
use App\Models\ModelKategori;

class FuzzifikasiController extends Controller
{
    public $hsl;

    public function fuzzifikasi($x, $sebentar, $sedang, $lama)
    {
        $hitungx = array();

        if ($x <= $sebentar) {
            $hitungx['xsebentar'] = 1;
        } else if ($x > $sebentar && $x < $sedang) {
            $hitungx['xsebentar'] = ($x - $sebentar) / ($sedang - $sebentar);
            $hitungx['xsedang'] = ($sedang - $x) / ($sedang - $sebentar);
        } else if ($x == $sedang) {
            $hitungx['xsedang'] = 1;
        } else if ($x > $sedang && $x < $lama) {
            $hitungx['xsedang'] = ($lama - $x) / ($lama - $sedang);
            $hitungx['xlama'] = ($x - $sedang) / ($lama - $sedang);
        } else if ($x >= $lama) {
            $hitungx['xlama'] = 1;
        }

        return $hitungx;
    }

    public function inferensi($game, $editing, $office, $programming)
    {
        $hasil = min($game, $editing, $office, $programming);
        return $hasil;
    }



    public function hasilFuzzifikasi(Request $request)
    {
        //menentukan x
        $x_game = $request->input('range1') * 60;
        $x_office = $request->input('range3') * 60;
        $x_editing = $request->input('range2') * 60;
        $x_programming = $request->input('range4') * 60;

        //memberikan parameter masing-masing kategori
        $kategori = [
            "game" => [
                "sebentar" => $request->input('kategori_game_sebentar', ModelKategori::where('nama', 'game')->value('sebentar')),
                "sedang" => $request->input('kategori_game_sedang', ModelKategori::where('nama', 'game')->value('sedang')),
                "lama" => $request->input('kategori_game_lama', ModelKategori::where('nama', 'game')->value('lama')),
            ],
            "office" => [
                "sebentar" => $request->input('kategori_office_sebentar', ModelKategori::where('nama', 'office')->value('sebentar')),
                "sedang" => $request->input('kategori_office_sedang', ModelKategori::where('nama', 'office')->value('sedang')),
                "lama" => $request->input('kategori_office_lama', ModelKategori::where('nama', 'office')->value('lama')),
            ],
            "editing" => [
                "sebentar" => $request->input('kategori_editing_sebentar', ModelKategori::where('nama', 'editing')->value('sebentar')),
                "sedang" => $request->input('kategori_editing_sedang', ModelKategori::where('nama', 'editing')->value('sedang')),
                "lama" => $request->input('kategori_editing_lama', ModelKategori::where('nama', 'editing')->value('lama')),
            ],
            "programming" => [
                "sebentar" => $request->input('kategori_programming_sebentar', ModelKategori::where('nama', 'programming')->value('sebentar')),
                "sedang" => $request->input('kategori_programming_sedang', ModelKategori::where('nama', 'programming')->value('sedang')),
                "lama" => $request->input('kategori_programming_lama', ModelKategori::where('nama', 'programming')->value('lama')),
            ]
        ];

        //menghitung nilai keanggotaan masing-masing kategori
        $hitungx_game = $this->fuzzifikasi($x_game, $kategori["game"]["sebentar"], $kategori["game"]["sedang"], $kategori["game"]["lama"]);
        $hitungx_office = $this->fuzzifikasi($x_office, $kategori["office"]["sebentar"], $kategori["office"]["sedang"], $kategori["office"]["lama"]);
        $hitungx_editing = $this->fuzzifikasi($x_editing, $kategori["editing"]["sebentar"], $kategori["editing"]["sedang"], $kategori["editing"]["lama"]);
        $hitungx_programming = $this->fuzzifikasi($x_programming, $kategori["programming"]["sebentar"], $kategori["programming"]["sedang"], $kategori["programming"]["lama"]);

        $categories = ['xsebentar', 'xsedang', 'xlama'];
        $counter = 1;

        foreach ($categories as $gameCategory) {
            foreach ($categories as $editingCategory) {
                foreach ($categories as $officeCategory) {
                    foreach ($categories as $programmingCategory) {
                        $gameValue = isset($hitungx_game[$gameCategory]) ? $hitungx_game[$gameCategory] : 0;
                        $editingValue = isset($hitungx_editing[$editingCategory]) ? $hitungx_editing[$editingCategory] : 0;
                        $officeValue = isset($hitungx_office[$officeCategory]) ? $hitungx_office[$officeCategory] : 0;
                        $programmingValue = isset($hitungx_programming[$programmingCategory]) ? $hitungx_programming[$programmingCategory] : 0;

                        $nilai = round($this->inferensi($gameValue, $editingValue, $officeValue, $programmingValue), 2);

                        // Update nilai di tabel_inferensi menggunakan Model
                        $modelInferensi = ModelInferensi::find($counter);
                        $modelInferensi->nilai = $nilai;
                        $modelInferensi->save();

                        $counter++;
                    }
                }
            }
        }
        $this->hsl = compact('hitungx_game', 'hitungx_office', 'hitungx_editing', 'hitungx_programming');
        print_r($this->hsl);
    }

    public function hasilFuzzifikasi2()
    {
        //$this->hasilFuzzifikasi();
        print_r($this->hsl);
    }

    public function update(Request $request)
    {
        $input = $request->all();

        // Update data kategori game
        ModelKategori::where('nama', 'game')->update([
            'sebentar' => $input['kategori_game_sebentar'],
            'sedang' => $input['kategori_game_sedang'],
            'lama' => $input['kategori_game_lama'],
        ]);

        // Update data kategori office
        ModelKategori::where('nama', 'office')->update([
            'sebentar' => $input['kategori_office_sebentar'],
            'sedang' => $input['kategori_office_sedang'],
            'lama' => $input['kategori_office_lama'],
        ]);

        // Update data kategori editing
        ModelKategori::where('nama', 'editing')->update([
            'sebentar' => $input['kategori_editing_sebentar'],
            'sedang' => $input['kategori_editing_sedang'],
            'lama' => $input['kategori_editing_lama'],
        ]);

        // Update data kategori programming
        ModelKategori::where('nama', 'programming')->update([
            'sebentar' => $input['kategori_programming_sebentar'],
            'sedang' => $input['kategori_programming_sedang'],
            'lama' => $input['kategori_programming_lama'],
        ]);

        return redirect()->back()->with('success', 'Data kategori berhasil diupdate.');
    }

    public function showValue()
    {
        $kategori = [
            'game' => ModelKategori::where('nama', 'game')->first(),
            'office' => ModelKategori::where('nama', 'office')->first(),
            'editing' => ModelKategori::where('nama', 'editing')->first(),
            'programming' => ModelKategori::where('nama', 'programming')->first(),
        ];

        return view('kategori', compact('kategori'));
    }
}
