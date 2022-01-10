@extends('layout.app')
@section('content')
    <div class="container pb-5">
        <div class="row">
            <div class="col-md-6 col-sm-12 mt-5 text-center">
                <div class="card h-100">
                    <div class="card-header bg-red100 text-light">
                        KEGIATAN DONOR DARAH
                    </div>
                    <form action="" class="overflow-auto p-3">
                        <div class="card-body py-0 pt-3">
                            <div class="form-group text-left">
                                <label>Tanggal Donor</label>
                                <input type="date" class="form-control" id="date" placeholder="">
                            </div>
                        </div>
                        <div class="card-body py-0">
                            <div class="form-group text-left">
                                <label for="province">Pilih Provinsi</label>
                                <select class="form-control" id="province">
                                    <option>-Pilih Provinsi-</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-danger">CARI</button>
                    </form>
                </div>
            </div>