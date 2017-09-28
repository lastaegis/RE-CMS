<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            color: #B0BEC5;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }
        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }
        .content {
            text-align: center;
            display: inline-block;
        }
        .title {
            font-size: 72px;
            margin-bottom: 40px;
            color: black;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <audio src="{{ URL('storage/app/music/majestic-af.mp3') }}" loop="true" autoplay="true"></audio>
        <div class="title">Under Maintenance. Please Wait.</div>
        <div class="title">"You forgot one very important thing mate, I'm captain Jack Sparrow."</div>
    </div>
</div>
</body>
</html>