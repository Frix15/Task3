<!DOCTYPE html>
<html>
<head>
    <title>SQL Functions Demonstration</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            vertical-align: top;
        }
        code {
            background: #f4f4f4;
            padding: 5px;
            display: block;
        }
    </style>
</head>
<body>

<h2>SQL Functions Demonstration Using PHP</h2>

<table>
    <tr>
        <th>SQL Function</th>
        <th>Description</th>
        <th>Example Code</th>
        <th>Example Output</th>
    </tr>

    <tr>
        <td>UPPER()</td>
        <td>Converts text to uppercase</td>
        <td>
            <code>
            SELECT UPPER(name) AS upper_name FROM employees;
            </code>
        </td>
        <td><a href="upper.php" target="_blank">View Output</a></td>
    </tr>

    <tr>
        <td>AVG()</td>
        <td>Calculates average salary</td>
        <td>
            <code>
            SELECT AVG(salary) AS avg_salary FROM employees;
            </code>
        </td>
        <td><a href="avg.php" target="_blank">View Output</a></td>
    </tr>

    <tr>
        <td>COUNT()</td>
        <td>Counts number of employees</td>
        <td>
            <code>
            SELECT COUNT(*) AS total_employees FROM employees;
            </code>
        </td>
        <td><a href="count.php" target="_blank">View Output</a></td>
    </tr>

    <tr>
        <td>NOW()</td>
        <td>Returns current date and time</td>
        <td>
            <code>
            SELECT NOW() AS current_time;
            </code>
        </td>
        <td><a href="now.php" target="_blank">View Output</a></td>
    </tr>

    <tr>
        <td>SUM()</td>
        <td>Calculates total salary</td>
        <td>
            <code>
            SELECT SUM(salary) AS total_salary FROM employees;
            </code>
        </td>
        <td><a href="sum.php" target="_blank">View Output</a></td>
    </tr>

</table>

</body>
</html>
