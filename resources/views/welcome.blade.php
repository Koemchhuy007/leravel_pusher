<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('a008572ae187ecf1cc54', {
        cluster: 'ap1'
        });

        var channel = pusher.subscribe('notification');
        channel.bind('test.notification', function(data) {
        alert(JSON.stringify(data));
        });
    </script>
</head>
<body>
    <h1>Hello</h1>
</body>
</html>