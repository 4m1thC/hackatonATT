<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Certificado de Participación</title>
    <link rel="stylesheet" type="text/css" href="{{ public_path('css/certificado.css') }}">
    
</head>

<body>


    <div class="certificate">
        <div class="header">
            <img class="logo" src="{{ public_path('assets/empresa.png') }}" alt="Logo de la empresa">
            <span class="company-name">Nombre de la empresa</span>
            <div class="folio">
                Folio: {{ $certificado->folio }}
            </div>
        </div>
        <img class="insignia" src="{{ public_path('assets/insignia.png') }}" alt="Insignia">
        <h1>Certificado de participación</h1>
        <h3>{{ $certificado->charla->evento->nombre_evento }}</h3>
        <p>Por haber participado en el de la charla <span class="name">{{ $certificado->charla->tema }}</span> en
            fecha <span class="date">{{ $certificado->charla->evento->fecha }}</span> y expedido en fecha
            <span class="date">{{ $certificado->fecha_expedido }}</span>. con una carga horaria de
            <span class="name">{{ $certificado->horas_academicas }} horas academicas
        </p>
        <p>Se otorga este certificado a: <span class="name">{{ $certificado->user->name }}</span>.</p>
        <div class="signature">
            <img src="{{ public_path('assets/firma.png') }}" alt="Firma">
            <p>Cynthia G. Smith</p>
            <p>Organizador</p>
        </div>
    </div>

</body>

</html>
