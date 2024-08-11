<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: auto;
            background: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 8px;
            overflow: hidden;
        }
        .header {
            background: #007bff;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
            margin: 20px 0;
            text-align: center;
        }
        .body {
            padding: 20px;
            font-size: 16px;
            line-height: 1.5;
            color: #333333;
        }
        .name{
            font-weight: bold;

        }
        .footer {
            background: #f1f1f1;
            padding: 10px;
            text-align: center;
            font-size: 14px;
            color: #666666;
            border-top: 1px solid #dddddd;
        }
    </style>
</head>
<body>
    <div class="container">

        <!-- Title -->
        <div class="title">
            <h2> </h2>
        </div>
        <!-- Body -->
        <div class="body">
            <div> Dear,<p class="name"> {{ $user->first_name.' '.$user->middle_name }},</p>
                <p> </div>

                {{ $user->comment }}
            </p>


             @if($user->sender_name)
             <p> From: <p class="name">  {{$user->sender_name  }} </p>
            </p>

             @else
             <p>Best regards,</p>
            <p>  The Team</p>

            @endif
        </div>
        <!-- Footer -->
        <div class="footer">
            <p>&copy; 2024 eshop. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
