<!DOCTYPE html>
<html>
<head>
    <title>Counselling Request Alert</title>
</head>
<body>
    
    <!-- Add more content as needed -->
    <p>Dear {{ $formData['counselor'] }}<br>
   A counselling request is initiated for <br>
   <b>Student Name:</b> {{ $formData['name'] }}<br>
    <b>Student Class ID:</b> {{ $formData['class_id'] }} 
    <br><b>Program: </b>{{ $formData['program'] }}.<br>
   Please reach out student to schedule an appointment at your earliest convienience.<br>
   <b>Thank You!</b>
    </p>
</body>
</html> 
 