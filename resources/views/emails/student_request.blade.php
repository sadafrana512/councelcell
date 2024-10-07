<!DOCTYPE html>
<html>
<head>
    <title>Appointment Alert</title>
</head>
<body>
    <!-- Add more content as needed -->
    <p>
        Dear {{ $appointment['name'] }},
       Your appointment is scheduled with {{$appointment['counselor']}}.<br>
        <b>Appointment Details</b><br>
        <!-- Date:{{ $appointment['date'] }}<br> -->
        Date & Time:{{ $appointment['time'] }}

        
    </p>
</body>
</html>
 