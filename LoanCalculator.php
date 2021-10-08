<?php
define("CURRENTRATE", number_format(3.0, 1));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Calculator</title>
</head>
<body>
    <form action="LoanSummary.php" method="post">
        <fieldset>
            <legend>Loan Calculator</legend>
                <table>
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="name" id="name"></td>
                    </tr>

                    <tr>
                        <td>Loan Amount (MYR):</td>
                        <td><input type="number" name="loanAmount" id="loanAmount" min="1" required></td>
                    </tr>

                    <tr>
                        <td>Current Rate:</td>
                        <td><?= CURRENTRATE ?>%</td>
                    </tr>

                    <tr>
                        <td>Loan Period (Year):</td>
                        <td><input type="number" name="loanPeriod" id="loanPeriod" min="1" required></td>
                    </tr>

                    <!-- submit btn -->
                    <tr>
                        <td><input type="submit" value="Calculate"></td>
                    </tr>
                </table>
        </fieldset>
    </form>
</body>
</html>


