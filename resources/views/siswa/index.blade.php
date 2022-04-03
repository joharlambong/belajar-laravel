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
                            <td><?php echo"<a href='siswa/$siswa->id' class='btn btn-success btn-sm'>Detail</a>"; ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        @else
                <p>Tidak ada data siswi binale.</p>
        @endif

        <div class="table-bottom">
            <div class="pull-left">
                <strong>Jumlah Siswa: {{ $jumlah_siswa }}</strong>
            </div>
            <div class="pull-right">
                Vagination
            </div>
        </div>

        <div class="bottom-nav">
            <div>
                <a href="siswa/create" class="btn btn-primary">Tambah Siswa</a>
            </div>
        </div>
    </div>
@stop

@section('footer')
    <div id="footer">
        <p>&copy; 2022 LaravelApp</p>
    </div>
@stop
