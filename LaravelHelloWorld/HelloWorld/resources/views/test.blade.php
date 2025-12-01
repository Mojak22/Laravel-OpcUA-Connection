<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>REST API Test</title>
    <style>
        textarea {
            width: 100%;
            min-height: 300px;
            font-family: monospace;
            padding: 10px;
            margin-top: 10px;
        }
    </style>
</head>
<header>
    <h1>REST API Test</h1>
</header>
<body>
<div>
    <form action="{{ route('show.fetch') }}" method="POST">
        @csrf
        <button type="submit">Fetch Weather Data</button>
    </form>

    @if($response)
        <div>
            <h2>Response</h2>
            <textarea readonly>{{ $response }}</textarea>
        </div>
    @endif
</div>

</body>
</html>
