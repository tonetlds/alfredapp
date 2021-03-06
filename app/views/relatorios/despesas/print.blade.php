<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap CSS -->
    {{ HTML::style('http://netdna.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css') }}

    <!-- PureCSS -->
    {{-- HTML::style('http://yui.yahooapis.com/pure/0.5.0/pure-min.css') --}}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        /*.visible-print {
            display: block !important;
        }*/
    </style>

</head>
<body>
    <div class="container">
        
        <table class="table twelve columns" width="100%">
            <tr>
                <td width="auto">
                    <h3><small>Relatório {{ $relatorio->id }}</small><br/>Despesas</h3>
                </td>
                <td style="text-align:right;font-size:12px;">
                    <h3><small class="badge">{{ date('d/m/Y - H:i', strtotime($relatorio->updated_at) ) }}</small><h3>
                </td>
            </tr>
        </table>

        @include('relatorios.despesas.print-content')

    </div>

    <!-- jQuery -->
    {{-- HTML::script("http://code.jquery.com/jquery.js") --}}
    <!-- Bootstrap JavaScript -->
    {{-- HTML::script("http://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js") --}}
</body>
</html>