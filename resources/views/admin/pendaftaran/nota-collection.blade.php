<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nota Pendaftaran</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
            color: #111;
        }

        .page-break {
            page-break-after: always;
        }

        .spacer {
            height: 1px;
        }
    </style>
</head>

<body>
    @foreach ($pendaftaranList as $pendaftaran)
        <div class="page-break">
            @include('admin.pendaftaran.nota', ['pendaftaran' => $pendaftaran])
        </div>
    @endforeach
</body>

</html>
