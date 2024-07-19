<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        .form-group label {
            font-weight: bold;
        }
        .btn-primary {
            width: 100%;
        }
    </style>
</head>
<body>
<div class="card">
    <div class="card-body">
        <h3 class="card-title text-center">Register</h3>
        <form method="POST" action="/register">
            @csrf
            <div class="form-group">
                <label for="username">Username</label>
                <input id="username" name="username" type="text" class="form-control @error('username') is-invalid @else is-valid @enderror">
                @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="phonenumber">Phonenumber</label>
                <input id="phonenumber" name="phonenumber" type="text" class="form-control @error('phonenumber') is-invalid @else is-valid @enderror">
                @error('phonenumber')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</div>
</body>
</html>
