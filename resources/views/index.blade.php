<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    <title>Document</title>
</head>
    <body>
        <div id="app">
            <passenger-component
            v-for="(passenger, index) in passengersList"
            :key="index"
            :passengerCard="passenger"
            />

        </div>
    </body>
    <script src="{{asset('js/app.js')}}"></script>
</html>
