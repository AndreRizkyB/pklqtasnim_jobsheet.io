<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
</head>
<body>
<div class="calender">
            <p id="monthName"></p>
            <p id="dayName"></p>
            <p id="dayNumber"></p>
            <p id="year"></p>
           </div>
           <script>
        const lang = navigator.language;
        let date = new Date();

        let dayNumber = date.getDate();
        let month = date.getMonth();
        let dayName  = date.toLocaleString(lang,{weekday: 'long'});
        let monthName  = date.toLocaleString(lang,{month: 'long'});
        let year = date.getFullYear();

        document.getElementById('monthName').innerHTML = monthName ;
        document.getElementById('dayName').innerHTML = dayName;
        document.getElementById('dayNumber').innerHTML = dayNumber ;
        document.getElementById('year').innerHTML = year ;

    </script>
</body>
</html>