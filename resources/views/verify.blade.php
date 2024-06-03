<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Email</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }

        .verification-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        .btn-link {
            color: #007bff;
            text-decoration: none;
        }

        .btn-link:hover {
            color: #0056b3;
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="verification-container">
        <div class="alert alert-info" role="alert">
            {{ __('Tautan verifikasi baru telah dikirim ke email Anda.') }}
        </div>

        <p>{{ __('Sebelum melanjutkan, silakan periksa email Anda untuk tautan verifikasi.') }}</p>
        <p>{{ __('Jika Anda tidak menerima email') }},</p>
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit"
                class="btn btn-link p-0 m-0 align-baseline">{{ __('klik di sini untuk meminta yang lain') }}</button>.
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Redirect to home page after verification
        setTimeout(function() {
            window.location.href = "{{ auth()->user()->type == 'admin' ? route('admin/home') : route('home') }}";
        }, 3000); // 3000 milliseconds = 3 seconds, you can adjust this as needed
    </script>

</body>

</html>
