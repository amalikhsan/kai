@extends('layouts.app')

@section('title', 'Edit Angkutan Barang')
@section('desc', 'Halaman Ini Kamu Bisa Edit Angkutan Barang. ')

@section('content')
    <form action="{{ route('dataAngbar.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Angkutan Barang</h4>
                    </div>
                    <div class="card-body">
                        <h6>Bulan</h6>
                        <div class="form-group row">
                            <label for="bulan" class="col-sm-3 col-form-label">Bulan</label>
                            <div class="col-sm-9">
                                <select type="text" class="form-control @error('bulan') is-invalid @enderror" name="bulan" id="bulan">
                                    <option value="">Pilih Bulan</option>
                                    @foreach($bulan_pilihan as $bulan_nomor => $bulan_nama)
                                        <option value="{{ ucfirst($bulan_nama) }}"{{ $item->bulan==$bulan_nama?'selected':'' }}>{{ ucfirst($bulan_nama) }}</option>
                                    @endforeach
                                </select>
                                @error('bulan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <h6>Volume</h6>
                        <div class="form-group row">
                            <label for="volume_program" class="col-sm-3 col-form-label">Program</label>
                            <div class="col-sm-9">
                                <input value="{{ old('volume_program',$item->volume_program) }}" type="text" class="form-control @error('volume_program') is-invalid @enderror" name="volume_program" id="volume_program" placeholder="Program">
                                @error('volume_program')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="volume_realisasi" class="col-sm-3 col-form-label">Realisasi</label>
                            <div class="col-sm-9">
                                <input value="{{ old('volume_realisasi',$item->volume_realisasi) }}" type="text" class="form-control @error('volume_realisasi') is-invalid @enderror" name="volume_realisasi" id="volume_realisasi" placeholder="Realisasi">
                                @error('volume_realisasi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <h6>Pendapatan</h6>
                        <div class="form-group row">
                            <label for="volume_program" class="col-sm-3 col-form-label">Program</label>
                            <div class="col-sm-9">
                                <input value="{{ old('pendapatan_program',$item->pendapatan_program) }}" type="text" class="form-control @error('pendapatan_program') is-invalid @enderror" name="pendapatan_program" id="pendapatan_program" placeholder="Program">
                                @error('pendapatan_program')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pendapatan_realisasi" class="col-sm-3 col-form-label">Realisasi</label>
                            <div class="col-sm-9">
                                <input value="{{ old('pendapatan_realisasi',$item->pendapatan_realisasi) }}" type="text" class="form-control @error('pendapatan_realisasi') is-invalid @enderror" name="pendapatan_realisasi" id="pendapatan_realisasi" placeholder="Realisasi">
                                @error('pendapatan_realisasi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
