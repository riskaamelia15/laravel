<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    @for ($i = 1; $i <= 10; $i++)
        @if ($i % 2 == 0)
            Angka {{ $i }} Genap <br>
        @else
            Angka {{ $i }} Ganjil <br>
        @endif
    @endfor

    {{-- Untuk menampilkan kode html --}}
    {!! $i !!}
</body>

</html>
