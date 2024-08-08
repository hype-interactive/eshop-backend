<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Product Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding-bottom: 20px;
        }
        .header h1 {
            color: #333333;
            font-size: 24px;
            margin: 0;
        }
        .content {
            font-size: 16px;
            color: #555555;
        }
        .content p {
            margin: 0 0 10px;
        }
        .button {
            display: inline-block;
            background-color: #007BFF;
            color: #ffffff;
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            text-align: center;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
            color: #999999;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Product Added!</h1>
        </div>
        <div class="content">
            <p>Dear User,</p>
            <p>We are excited to inform you that a new product has been added by <strong>{{ $user->first_name.' '.$user->last_name }} </strong> to our system.</p>
            <p>To view the new product and its details, please click the button below:</p>
            <a href="{{ $user->url }}" class="button">View New Product</a>
            <p>Thank you for being a valued user.</p>
            <p>Best regards,<br> Eshop support team</p>
        </div>
        <div class="footer">
            {{-- <p>If you no longer wish to receive these emails, you can <a href="[Unsubscribe URL]" style="color: #007BFF;">unsubscribe here</a>.</p> --}}
        </div>
    </div>
</body>
</html>
