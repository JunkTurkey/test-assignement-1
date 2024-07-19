<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display URL</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            width: 100%;
            max-width: 500px;
        }
        .url-text {
            font-size: 1.25rem;
            text-align: center;
            margin: 20px 0;
        }
        .url-link {
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="card">
    <div class="card-body">
        <h3 class="card-title text-center">Your URL</h3>
        <div class="url-text">
            <a href="{{ $url }}" class="url-link">{{ $url }}</a>
        </div>
    </div>
</div>
</body>
</html>
