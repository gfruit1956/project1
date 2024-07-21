<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar View</title>
    <style>
        body {
 font-family:Arial, Helvetica, sans-serif;
    font-size:14px;
        }

        .calendar {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 10px;
            margin: 10px;
        }

        .day {
            flex: 0 0 auto;
            width: 200px;
            padding: 10px;
            margin: 5px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }

        .course {
            margin-bottom: 10px;
        }

        button {
            margin-right: 5px;
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
			
        
    </style>
</head>

<body>
    <p>Welcome, John Smith!</p>

    <div class="calendar">
        <div class="day">
            <h3>Monday</h3>
            <div class="course">
                <p>09:00 AM - 10:00 AM: Information Technology Fundamentals (IT), Start Date: 2021-01-04</p>
                <button>Edit</button>
                <button>Copy</button>
                <button>Delete</button>
            </div>
            <div class="course">
                <p>10:00 AM - 11:00 AM: Programming Environments (Programming), Start Date: 2021-02-01</p>
                <button>Edit</button>
                <button>Copy</button>
                <button>Delete</button>
            </div>
        </div>

        <div class="day">
            <h3>Tuesday</h3>
            <div class="course">
                <p>09:00 AM - 10:00 AM: Cloud Foundation (Cloud), Start Date: 2021-03-01</p>
                <button>Edit</button>
                <button>Copy</button>
                <button>Delete</button>
            </div>
            <div class="course">
                <p>10:00 AM - 11:00 AM: Object Oriented Programming Fundamentals (Programming), Start Date: 2021-04-05</p>
                <button>Edit</button>
                <button>Copy</button>
                <button>Delete</button>
            </div>
        </div>

        <div class="day">
            <h3>Wednesday</h3>
            <div class="course">
                <p>09:00 AM - 10:00 AM: Database Fundamentals (Database), Start Date: 2021-05-03</p>
                <button>Edit</button>
                <button>Copy</button>
                <button>Delete</button>
            </div>
            <div class="course">
                <p>10:00 AM - 11:00 AM: Web Development (Web), Start Date: 2021-06-07</p>
                <button>Edit</button>
                <button>Copy</button>
                <button>Delete</button>
            </div>
        </div>

        <div class="day">
            <h3>Thursday</h3>
            <div class="course">
                <p>09:00 AM - 10:00 AM: Computer Networks (Network), Start Date: 2021-07-05</p>
                <button>Edit</button>
                <button>Copy</button>
                <button>Delete</button>
            </div>
            <div class="course">
                <p>10:00 AM - 11:00 AM: Operating Systems (IT), Start Date: 2021-08-02</p>
                <button>Edit</button>
                <button>Copy</button>
                <button>Delete</button>
            </div>
        </div>

        <div class="day">
            <h3>Friday</h3>
            <div class="course">
                <p>09:00 AM - 10:00 AM: Software Engineering (Software), Start Date: 2021-09-06</p>
                <button>Edit</button>
                <button>Copy</button>
                <button>Delete</button>
            </div>
        </div>
    </div>

</body>

</html>
