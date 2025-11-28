<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Cotización Kai Studio</title>
</head>

<body style="font-family: Arial, sans-serif; background:#f4f4f7; padding: 30px;">

    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">

                <!-- CARD -->
                <table width="600" cellpadding="0" cellspacing="0"
                       style="background:#ffffff; border-radius:12px; padding:25px; box-shadow:0px 3px 15px rgba(0,0,0,0.1);">

                    <!-- HEADER -->
                    <tr>
                        <td align="center" style="padding-bottom: 20px;">
                            <h1 style="margin:0; font-size:26px; color:#333;">Nueva Solicitud de Cotización</h1>
                            <p style="margin:5px 0 0 0; color:#666;">Generada desde Kai Studio</p>
                        </td>
                    </tr>

                    <!-- DATOS DEL CLIENTE -->
                    <tr>
                        <td style="padding:20px; background:#fafafa; border-radius:10px;">
                            <h2 style="font-size:20px; margin:0 0 10px 0; color:#222;">Datos del cliente</h2>

                            <p style="margin:4px 0;"><strong>Nombre:</strong> {{ $data['nombre'] }}</p>
                            <p style="margin:4px 0;"><strong>Teléfono:</strong> {{ $data['telefono'] }}</p>
                            <p style="margin:4px 0;"><strong>Comentarios:</strong> {{ $data['comentarios'] ?? 'N/A' }}</p>
                        </td>
                    </tr>

                    <!-- SEPARADOR -->
                    <tr><td style="height:20px;"></td></tr>

                    <!-- PRODUCTOS -->
                    <tr>
                        <td>
                            <h2 style="font-size:20px; margin-bottom:15px; color:#333;">Productos solicitados</h2>

                            @foreach($productos as $index => $p)
                                <table width="100%" cellpadding="0" cellspacing="0"
                                       style="background:#fafafa; border-radius:10px; padding:15px; margin-bottom:15px;">

                                    <tr>
                                        <td>
                                            <h3 style="font-size:18px; margin-bottom:10px; color:#2d4a8a;">
                                                {{ ucfirst($p['tipo']) }} #{{ $index }}
                                            </h3>

                                            <p style="margin:4px 0;"><strong>Ancho:</strong> {{ $p['ancho'] ?? '-' }} cm</p>
                                            <p style="margin:4px 0;"><strong>Alto:</strong> {{ $p['alto'] ?? '-' }} cm</p>

                                            @if(isset($p['tela']))
                                                <p style="margin:4px 0;"><strong>Tipo de tela:</strong> {{ $p['tela'] }}</p>
                                            @endif

                                            @if(isset($p['privacidad']))
                                                <p style="margin:4px 0;"><strong>Privacidad:</strong> {{ $p['privacidad'] }}</p>
                                            @endif

                                            @if(isset($p['tipoPersiana']))
                                                <p style="margin:4px 0;"><strong>Tipo de persiana:</strong> {{ $p['tipoPersiana'] }}</p>
                                            @endif

                                        </td>
                                    </tr>
                                </table>
                            @endforeach

                        </td>
                    </tr>

                    <!-- FOOTER -->
                    <tr>
                        <td align="center" style="padding-top:20px;">
                            <p style="color:#999; font-size:13px;">
                                © {{ date('Y') }} Kai Studio — Cotizaciones automáticas
                            </p>
                        </td>
                    </tr>

                </table>
                <!-- END CARD -->

            </td>
        </tr>
    </table>

</body>
</html>
