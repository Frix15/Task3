<!DOCTYPE html>
<html>
<head>
    <title>SQL Functions Demonstration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 30px;
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

<h3>MySQL Function Reference</h3>
<p>Complete list of MySQL functions grouped by category.</p>

<table>
    <tr>
        <th>Function</th>
        <th>Category</th>
    </tr>
    <?php
    $functions = include __DIR__ . '/mysql_functions.php';
    foreach ($functions as $function) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($function['name']) . '</td>';
        echo '<td>' . htmlspecialchars($function['category']) . '</td>';
        echo '</tr>';
    }
    ?>
</table>

</body>
</html>
