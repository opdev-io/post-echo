<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>POST Echo</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="termynal.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

        <div class="header justify-center">
            <h1 style="color: #EF3B2E;">POST Echo</h1>
        </div>

        <div class="subhead justify-center">
            <h3 style="color: #EF3B2E;">Request Dumper</h3>
        </div>

        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div id="termynal" data-termynal data-ty-typeDelay="60" data-ty-progressLength="50" data-ty-lineDelay="60">
                <span data-ty="input">curl -X POST '{{url('/api/echo')}}' \</span>
                <span data-ty="input" data-ty-prompt="">-d 'my_post_data=Hello POST Echo!';</span>
                <span data-ty="input" data-ty-prompt=""></span>
                <span data-ty>{"status":"ok","result":{"headers":{"host":["{{request()->getHost()}}:{{request()->getPort()}}"],"user-agent":["curl\/7.72.0"],"accept":["*\/*"],"content-length":["162"],"content-type":["multipart\/form-data; boundary=-1"]},"data":{"my_post_data":"Hello POST Echo"}}}</span>
            </div>
        </div>

        <div class="footer justify-center">
            <a href="https://github.com/opdev-io/post-echo" target="_blank">@version('v-only') <i class="fab fa-github"></i></a>
        </div>
    </div>
</div>
<script src="termynal.js" data-termynal-container="#termynal"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>
</body>
</html>
