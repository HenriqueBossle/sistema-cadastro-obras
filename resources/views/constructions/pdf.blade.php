<!DOCTYPE html>
<html>
<head>
    <title>Relatório da Obra - {{ $construction->builder_name }}</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .header { border-bottom: 2px solid #333; padding-bottom: 10px; }
        .detalhes { margin-top: 20px; }
        strong { color: #2d3748; }
    </style>
</head>
<body>
    <div class="header">
        <h1>Relatório da Obra</h1>
    </div>

    <div class="detalhes">
        <h3>Construtor: <strong>{{ $construction->builder_name }}</strong></h3>
        <h3>Telefone do construtor: <strong>{{ $construction->builder_phone }}</strong></h3>
        <h3>Responsável: <strong>{{ $construction->sitemanager_name }}</strong></h3>
        <h3>Telefone do responsável: <strong>{{ $construction->sitemanager_phone }}</strong></h3>
        <h3>Endereço: <strong>{{ $construction->address }}</strong></h3>
        <h3>Tipo: <strong>{{ $construction->type }}</strong></h3>
        <h3>Status: <strong>{{ $construction->status }}</strong></h3>
        <h3>Volume: <strong>{{ $construction->volume }}</strong></h3>
        <h3>Observações: <strong>{{ $construction->notes }}</strong></h3>
    </div>
</body>
</html>