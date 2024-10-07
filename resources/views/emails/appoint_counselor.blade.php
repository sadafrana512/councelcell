<!DOCTYPE html>
<html>
<head>
    <title>Counselling Appointment</title>
</head>
<body>
<p>
Dear {{ $appointment['counselor'] }},
       Your Appointment with {{ $appointment['name'] }} is scheduled.<br>
        <b>Appointment Details</b><br>
        Date:{{ $appointment['date'] }}<br>
        Time:{{ $appointment['time'] }}
        
    </p>
</body>
</html> 
 