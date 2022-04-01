@extends('template')

@section('main')
    <div id="siswa">
        <h2>Siswi Binale</h2>

        @if (!empty($siswa_list))
            <table class="table">
                <thead>
                    <tr>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($siswa_list as $siswa):?>
                        <tr>
                            <td>{{ $siswa->nisn }}</td>
                            <td>{{ $siswa->nama_siswa }}</td>
                            <td>{{ $siswa->tanggal_lahir }}</td>
                            <td>{{ $siswa->jenis_kelamin }}</td>
                            <!-- <td><button type="button" class="btn btn-success btn-sm">Detail</button></td> -->
                            <td>{{ link_to('siswa/'.$siswa->id, 'Detail',['class' => 'btn btn-success btn-sm']) }}</td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        @else
                <p>Tidak ada data siswi binale.</p>
        @endif

        <div class="pull-left">
            <strong>Jumlah Siswa: {{ $jumlah_siswa }}</strong>
        </div>
    </div>
@stop

@section('footer')
    <div id="footer">
        <p>&copy; 2022 LaravelApp</p>
    </div>
@stop
