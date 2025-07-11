<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your {{ $business_name ?? "Business" }} Menu is Ready</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8f9fa;
        }

        .email-container {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 40px;
            margin: 20px 0;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid #e9ecef;
        }

        .header h1 {
            color: #2c3e50;
            font-size: 24px;
            margin: 0;
            font-weight: 600;
        }

        .greeting {
            font-size: 18px;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .content {
            margin-bottom: 25px;
        }

        .credentials-box {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 25px;
            border-radius: 10px;
            margin: 25px 0;
            box-shadow: 0 2px 10px rgba(102, 126, 234, 0.3);
        }

        .credentials-box h3 {
            margin-top: 0;
            margin-bottom: 15px;
            font-size: 18px;
            font-weight: 600;
        }

        .credential-item {
            margin-bottom: 10px;
            font-size: 16px;
        }

        .credential-label {
            font-weight: 600;
            opacity: 0.9;
        }

        .credential-value {
            font-weight: 500;
            background-color: rgba(255, 255, 255, 0.2);
            padding: 5px 10px;
            border-radius: 5px;
            display: inline-block;
            margin-left: 10px;
        }

        .login-button {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 16px;
            display: inline-block;
            margin: 20px 0;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(40, 167, 69, 0.3);
            border: none;
            cursor: pointer;
        }

        .login-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(40, 167, 69, 0.4);
        }

        .login-section {
            text-align: center;
            margin: 30px 0;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
        }

        .footer {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #e9ecef;
            color: #6c757d;
        }

        .footer .signature {
            font-weight: 600;
            color: #495057;
        }

        .security-note {
            background-color: #fff3cd;
            border: 1px solid #ffeaa7;
            border-radius: 6px;
            padding: 15px;
            margin: 20px 0;
            font-size: 14px;
            color: #856404;
        }

        .security-note strong {
            color: #533f03;
        }

        @media (max-width: 800px) {
            body {
                padding: 10px;
            }

            .email-container {
                padding: 20px;
            }

            .header h1 {
                font-size: 20px;
            }

            .login-button {
                padding: 12px 25px;
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="header">
            <h1>🎉 Your Menu is Ready!</h1>
        </div>

        <div class="greeting">
            Hello {{ $user->name }},
        </div>

        <div class="content">
            <p>Great news! Your {{ $business_name ?? "Business" }} menu has been successfully created and is ready to
                use.</p>
        </div>

        <div class="credentials-box">
            <h3>🔐 Your Login Credentials</h3>
            <div class="credential-item">
                <span class="credential-label">Email:</span>
                <span class="credential-value">{{ $user->email }}</span>
            </div>
            <div class="credential-item">
                <span class="credential-label">Temporary Password:</span>
                <span class="credential-value">{{ $password }}</span>
            </div>
        </div>

        <div class="security-note">
            <strong>Security Tip:</strong> Please change your password after your first login to keep your account
            secure.
        </div>

        <div class="login-section">
            <p>Ready to customize your menu? Click the button below to get started:</p>
            <a href="{{ url('/login') }}" class="login-button">
                Login to Your Menu Dashboard
            </a>
        </div>

        <div class="footer">
            <p>If you have any questions or need assistance, feel free to reach out to our support team.</p>
            <p class="signature">
                Thanks,<br>
                <strong>The Menu Development Team</strong>
            </p>
        </div>
    </div>
</body>

</html>