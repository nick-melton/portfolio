<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Welcome to Our Platform</title>
    <style>
        /* Inline styles for simplicity, consider using CSS classes for larger templates */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            margin: 0 auto;
            padding: 20px;
            background-color: #f1f1f1;
        }

        .message {
            padding: 20px;
            background-color: #ffffff;
        }

        .message p {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        
        <div class="message">
            <p>Hi, Nick, my name is {{ $mailData['name'] }}, my email is {{ $mailData['email'] }}</p>
            <p>{{ $mailData['message'] }}</p>
        </div>
        
    </div>
</body>

</html>