<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scheduling</title>
    <style>
        body {
  font-family:Arial, Helvetica, sans-serif;
    font-size:14px;
        }
        h1 {
            text-align: center;
        }
        #course-selector, #staff-selector, #schedule-section {
            margin-bottom: 20px;
        }
        select, input, button {
            margin: 5px;
        }
        #course-details, #qualified-staff, #scheduled-courses {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Scheduling</h1>
    <div id="course-selector">
        <h2>Course</h2>
        <select id="course-dropdown">
            <option value="Course 1">Introduction to Programming</option>
            <option value="Course 2">Advanced Data Analysis</option>
        </select>
    <div id="staff-selector">
        <h2>Select Staff Members</h2>
        <select id="staff-dropdown" multiple>
            <option value="John Doe">John Smith - Available - Programming, Data Analysis</option>
        </select>
        <button onclick="displayQualifiedStaff()">View Qualified Staff</button>
        <div id="qualified-staff"></div>
    </div>
    <div id="schedule-section">
        <h2>Schedule Course</h2>
        <label for="date-picker">Select Date:</label>
        <input type="date" id="date-picker">
        <label for="start-time">Start Time:</label>
        <input type="time" id="start-time">
        <label for="end-time">End Time:</label>
        <input type="time" id="end-time">
        <button onclick="addScheduledCourse()">Add Course to Schedule</button>
        <div id="scheduled-courses"></div>
    </div>
    <script>
        function displayCourseDetails() {
            const courseDropdown = document.getElementById('course-dropdown');
            const courseName = courseDropdown.value;
            let courseDetails = '';
            document.getElementById('course-details').textContent = courseDetails;
        }
        function displayQualifiedStaff() {
            const staffDropdown = document.getElementById('staff-dropdown');
            const selectedStaff = [...staffDropdown.selectedOptions].map(option => option.value);
            let qualifiedStaff = '';
            document.getElementById('qualified-staff').textContent = qualifiedStaff;
        }
        function addScheduledCourse() {
=            const date = document.getElementById('date-picker').value;
            const startTime = document.getElementById('start-time').value;
            const endTime = document.getElementById('end-time').value;
            const courseName = document.getElementById('course-dropdown').value;
            const scheduledCourse = `Course: ${courseName}, Date: ${date}, Start Time: ${startTime}, End Time: ${endTime}`;
            const scheduledCourses = document.getElementById('scheduled-courses');
            scheduledCourses.textContent += scheduledCourse + '\n';
        }
    </script>
</body>
</html>

