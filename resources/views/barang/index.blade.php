@extends('layouts.admin')

@section('content')


<br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-secondary">
                    <div class="card-header mb-3"   >Data Barang
                        <a href="{{ route('barang.create') }}"
                            class="btn btn-sm btn-primary" style="float: right;">Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama_barang</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($barang as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nama_barang }}</td>
                                            <td>{{ $data->harga }}</td>
                                            <td>{{ $data->stok }}</td>
                                            <td>
                                                <form action="{{route('barang.destroy', $data->id) }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('apakah kmu yakin ingin menghapus data?')">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection