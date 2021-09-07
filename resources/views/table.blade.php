@extends('home')
@section('content2')
<section class="section">
    <div class="card">
    <div class="card-header">
    Data <RT></RT>
    </div>
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>Nik</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Kontak</th>
                        <th>Rw</th>
                        <th>Rt</th>
                    </tr>    
                </thead>
                <tbody>
                    @foreach ($warga as $wargas)
                    <tr>
                        <td>{{ $wargas->nik }}</td>
                        <td>{{ $wargas->nama }}</td>
                        <td>{{ $wargas->tempat_lahir }}</td>
                        <td>{{ $wargas->tanggal_lahir }}</td>
                        <td>{{ $wargas->kontak }}</td>
                        <td>{{ $wargas->rw }}</td>
                        <td>{{ $wargas->rt }}</td>
                        <!-- <td>
                            <span class="badge bg-success">Active</span>
                        </td> -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection