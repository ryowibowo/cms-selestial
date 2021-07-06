@extends('layouts.default')

@section('content')

	<div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="h4 box-title">Daftar Transaksi</div>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>No Trans</th>
                                        <th>Tanggal</th>
                                        <th>Divisi</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @forelse ($items as $item)
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->notrans}}</td>
                                            <td>{{$item->tanggal}}</td>
                                            <td>{{$item->divisi}}</td>
                                            <td>{{$item->jumlah}}</td>
                                        </tr>
                                   @empty
                                       <tr>
                                           <td colspan="6" class="text-center p-5">
                                               Data Tidak Ada
                                           </td>
                                       </tr>
                                   @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection