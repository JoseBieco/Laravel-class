<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste 3</title>
    <style>
        p {
            font-size: 1.3em;
            animation: fade 2s ease-in;
        }

        @keyframes fade {
            0%{
                opacity: 0;
            }
            
            100%{
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <p>{{ $post }}</p>
</body>
</html>