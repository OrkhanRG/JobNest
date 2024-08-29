<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Şifrə Dəyişmə</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
            padding: 0;
            margin: 0;
        }

        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            padding: 10px 0;
        }

        .header img {
            width: 50px;
        }

        .content {
            padding: 20px 0;
        }

        .btn {
            display: inline-block;
            background-color: #28a745;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 20px;
        }

        .btn:hover {
            background-color: #218838;
        }

        .footer {
            text-align: center;
            padding-top: 20px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>
<div class="email-container">
    @if(false)
        <div class="header">
            <img src="logo.png" alt="Şirkət Logo">
        </div>
    @endif
    <div class="content">
        <h2>Hörmətli {{ $user->name ?? '' . ' ' . $user->surname ?? '' }},</h2>
        <p>Hesabınızın şifrəsini dəyişmək üçün aşağıdakı düyməni klikləyin:</p>
        <p><a href="{{ route('forgot-password-verify', $token) }}" class="btn">Şifrəni Dəyiş</a></p>
        <p>Əgər bu e-poçtu siz göndərməmisinizsə, bu mesaja məhəl qoymayın.</p>
        <p>Ən xoş arzularla,<br> JobNest komandası</p>
    </div>
    <div class="footer">
        <p>© 2024 JobNest. Bütün hüquqlar qorunur.</p>
    </div>
</div>
</body>
</html>
