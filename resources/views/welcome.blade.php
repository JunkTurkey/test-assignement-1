<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actions</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .card {
            width: 100%;
            max-width: 500px;
        }
        .btn-group {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin: 20px 0;
        }
        .result {
            font-size: 1.25rem;
            margin: 20px 0;
        }
        .history {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="card">
    <div class="card-body">
        <h3 class="card-title">Actions</h3>
        <div class="btn-group">
            <a href="/regenerate" class="btn btn-primary">Regenerate</a>
            <a href="/invalidate" class="btn btn-secondary">Deactivate</a>
            <a href="/imfeelinglucky" class="btn btn-success">I'm Feeling Lucky</a>
            <a href="/history" class="btn btn-info">History</a>
        </div>
        @isset($result)
            <div class="result">
                YOU {{ $result === 0 ? 'LOSE' : 'WIN' }}<br>
                Result: {{ $result }}
            </div>
        @endisset
        @isset($history)
            <div class="history">
                <strong>Your previous results:</strong><br>
                @foreach($history as $result)
                    {{ $result }}<br>
                @endforeach
            </div>
        @endisset
    </div>
</div>
</body>
</html>
