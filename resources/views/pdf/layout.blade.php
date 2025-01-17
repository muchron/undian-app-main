<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @php \Carbon\Carbon::setLocale(locale: 'id') @endphp
    <style>
        * {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
            font-size: 12px;
        }

        tr:nth-child(even) {
            background-color: #e9e9e9;
        }
    </style>
    
    <style>
        #second-table {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        #second-table table {
            border-collapse: collapse;
            width: 100%;
        }

        #second-table th,
        #second-table td {
            text-align: left;
            padding: 8px;
            font-size: 12px;
        }

        #second-table tr:nth-child(even) {
            background-color: #f3f3f300;
        }
    </style>
</head>

<body>
    @yield('pdf')
</body>

</html>

