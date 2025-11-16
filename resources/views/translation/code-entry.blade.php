<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hyrje në Përkthim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f88922 0%, #FD794F 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .code-entry-card {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            max-width: 500px;
            width: 100%;
        }

        .code-entry-title {
            color: #f88922;
            font-weight: bold;
            margin-bottom: 30px;
            text-align: center;
        }

        .btn-submit {
            background: linear-gradient(135deg, #f88922 0%, #FD794F 100%);
            border: none;
            padding: 12px;
            font-weight: bold;
            width: 100%;
        }

        .btn-submit:hover {
            opacity: 0.9;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="code-entry-card">
                    <h2 class="code-entry-title">Hyrje në Hapësirën e Përkthimit</h2>
                    <p class="text-center text-muted mb-4">Vendosni kodin e përkthimit për të filluar</p>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('translation.validate') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="code" class="form-label">Kodi i Përkthimit</label>
                            <input type="text" class="form-control form-control-lg" id="code" name="code"
                                placeholder="Vendosni kodin..." required autofocus>
                        </div>

                        <button type="submit" class="btn btn-primary btn-submit">Vazhdo</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
