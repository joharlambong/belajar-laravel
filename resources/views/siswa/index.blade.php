@extends('template')

@section('main')
    <div id="siswa">
        <h2>Siswi Binale</h2>

        <?php if(!empty($siswa)):?>
            <ul>
                <?php foreach($siswa as $binale):?>
                    <li><?= $binale ?></li>
                <?php endforeach ?>
            </ul>
        <?php else:?>
            <p>Tidak ada data siswi binale.</p>
        <?php endif ?>
    </div>
@stop

@section('footer')
    <div id="footer">
        <p>&copy; 2022 LaravelApp</p>
    </div>
@stop
