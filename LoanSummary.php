<?php
define("CURRENTRATE", number_format(3.0, 1));

$loanAmount = (!empty($_POST['loanAmount'])) ? $_POST['loanAmount']:"-None-";
$loanPeriod = (!empty($_POST['loanPeriod'])) ? $_POST['loanPeriod']:"-None-";

$interest = calInterest($loanAmount,CURRENTRATE,$loanPeriod);

$maturityValue = calMaturityValue($loanAmount,$interest);

$instalmentPerMonth = number_format(calInstalmentPerMonth($maturityValue,$loanPeriod),2);

function calInterest($loanAmount,$currentRate,$loanPeriod){
    return $loanAmount * ($currentRate/100) * $loanPeriod;
}

function calMaturityValue($loanAmount,$interest){
    return $loanAmount + $interest;
}

function calInstalmentPerMonth($maturityValue,$loanPeriod){
    return $maturityValue/($loanPeriod * 12);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Summary</title>
</head>
<body>
    <h1>Hi, <?php echo(!empty($_POST['name'])) ? $_POST['name']:"-None-"; ?> !</h1>
    <form>
        <fieldset>
            <legend>Loan Summary</legend>
                <table>
                    <tr>
                        <td>Loan Amount (MYR):</td>
                        <td><?= $loanAmount  ?></td>
                    </tr>

                    <tr>
                        <td>Current Rate:</td>
                        <td><?= CURRENTRATE ?> %</td>
                    </tr>

                    <tr>
                        <td>Loan Period (Year):</td>
                        <td><?= $loanPeriod ?> year(s)</td>
                    </tr>

                    <tr>
                        <td>Interest (MYR):</td>
                        <td><?= $interest?></td>
                    </tr>

                    <tr>
                        <td>Maturity Value (MYR):</td>
                        <td><?= $maturityValue?></td>
                    </tr>

                    <tr>
                        <td>Instalment Per Month (MYR):</td>
                        <td><?= $instalmentPerMonth?></td>
                    </tr>
                </table>
        </fieldset>
    </form>
    
</body>
</html>