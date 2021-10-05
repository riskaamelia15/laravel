@php
$nama = 'Riska Amelia';
$umur = 17;
$ttl = 'Bandung, 15 Agustus 2003';
$alamat = 'Kp. Cilebak';
$hobi = 'Menggambar';

$i = 10;
@endphp

<h1>Halo {{ $nama }}</h1>

{{-- IF --}}
@if ($umur == 18)
    <h2>Umurnya {{ $umur }} sudah dewasa</h2>
@elseif ()
@else
    <h2>Umurnya {{ $umur }}</h2>
@endif

<h3>Lahirnya {{ $ttl }}</h3>
<h4>Alamatnya {{ $alamat }}</h4>
<h5>Hobinya {{ $hobi }}</h5>
<br>

{{-- SWITCH --}}
@switch($i)
    @case(1)
        First case...
    @break

    @case(2)
        Second case...
    @break

    @default
        Default case...
@endswitch
<br>

{{-- LOOPS --}}
@for ($i = 0; $i < 10; $i++)
    Angka {{ $i }}
@endfor

@foreach ($users as $user)
    <p>This is user {{ $user->id }}</p>
@endforeach

@forelse ($users as $user)
    <li>{{ $user->name }}</li>
@empty
    <p>No users</p>
@endforelse

@while (true)
    <p>I'm looping forever.</p>
@endwhile
