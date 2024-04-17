<!-- resources/views/errors/404.blade.php -->
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenant Not Identified</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }

        h1 {
            color: #FF0000;
        }

        .svg-container {
            width: 200px;
            height: 200px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="svg-container">
        <!-- Replace the SVG code below with your own SVG image -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10"></circle>
            <line x1="12" y1="8" x2="12" y2="16"></line>
            <line x1="12" y1="12" x2="12" y2="12"></line>
        </svg>
    </div>
    <h2>Error: Tenant Not Identified</h2>
    <p>We couldn't identify the requested tenant. Please check the domain and try again.</p>

</body>

</html>
