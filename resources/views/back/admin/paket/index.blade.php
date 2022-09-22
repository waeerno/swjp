@extends('back.app')

@section('content')

<div class="content-body">
    <!-- Basic Tables start -->
    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Paket Perjalanan</h4>
                    <div>
                        <blockquote class="blockquote pr-1 text-right border-right-primary border-right-3">
                            <div class="alert alert-danger alert-validation-msg" role="alert">
                                <p class="mb-0"></p>
                            </div>
                        </blockquote>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Paket Perjalanan yang di tawarkan untuk di tampilkan di halaman awal juga termasuk detail paket dari paket yang di tampilkan
                    </p>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Paket</th>
                                <th>Harga</th>
                                <th>Detail Paket</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="font-weight-bold">1</span> </td>
                                <td>ISTANBUL PACKAGES TOUR</td>
                                <td>$278</td>
                                <td><span class="font-weight-bold">2 Detail Paket</span> </td>
                                <td>
                                    <div class="row">
                                        {{-- show --}}
                                        <a class="btn btn-outline-info waves-effect btn-xm mb-1" data-toggle="modal" data-backdrop="false" data-target="#backdrop-">

                                            <span><i data-feather='info'></i></span>
                                        </a>
                                        {{-- acc --}}
                                        <a>
                                            <form onsubmit="return confirm('Terima pengajuan ini?')" class="form" method="POST" action="">
                                                @csrf
                                                <input type="hidden" value="PUT" name="_method">
                                                {{-- <input type="hidden" name="id" value="{{ $data->id }}"> --}}
                                                <button type="submit" class="btn btn-outline-primary waves-effect"><i data-feather='check-circle'></i></button>
                                            </form>
                                        </a>
                                        {{-- reject --}}
                                        <a>
                                            <form onsubmit="return confirm('Tolak pengajuan ini?')" class="form" method="POST" action="">
                                                @csrf
                                                <input type="hidden" value="PUT" name="_method">
                                                <input type="hidden" name="id" value="">
                                                <button type="submit" class="btn btn-outline-danger waves-effect"> <i data-feather='x-square'></i></button>
                                            </form>
                                        </a>

                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Tables end -->
</div>

@endsection
