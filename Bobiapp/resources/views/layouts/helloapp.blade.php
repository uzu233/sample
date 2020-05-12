<html>
<head>
        <title>@yield('title')</title>
        <style>
        body {font-size:16pt; color:#66434f; margin: 5px; }
        h1 { font-size:50pt; text-align:right; color:#e597b2;
        margin:-20px 0px -30px 0px; letter-spacing:-4pt; }
        ul { font-size:12pt; }
        hr { margin: 25px 100px; border-top: 1px dashed #ddd; }
        .menutitle {font-size:14pt; font-weight:bold; margin: 0px; }
        .content {margin:10px; }
        .footer { text-align:right; font-size:10pt; margin:10px;
                border-bottom:solid 1px #ccc; color:#ccc; }
        th {background-color:#e60050; color:fff; padding:5px 10px; }
        td {border: solid 1px #aaa; color:#66434f; padding:5px 10px; }
        </style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
        <h1>@yield('title')</h1>
        @section('menubar')
        <h2 class="menutitle">※メニュー</h2>
        <ul>
                <li>@show</li>
        </ul>
        <hr size="1">
        <div class="content">
        @yield('content')
        </div>
        <div class="footer">
        @yield('footer')
        </div>
</body>
</html>