<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="index.php">
            <button type="submit" class="cancelbtn" ><a href="index.php" style="color: black">Logout</a></button>

        </form>
        <br>

        <form action="batchControl.php">
            <button type="submit" class="cancelbtn" ><a href="batchControl.php" style="color: black">Batch Control</a></button>
        </form>
        <br>

        <form action="batchSearch.php">
            <button type="submit" class="cancelbtn" ><a href="batchSearch.php" style="color: black">Search Batch</a></button>
        </form>
        <br>

        <form action="updateStatus.php">
            <button type="submit" class="cancelbtn" ><a href="updateStatus.php" style="color: black">Update Status</a></button>
        </form>
        <br>

        <form method="post" action="">
            <p>Compensation Number:</p>
            <input type="number" name="comNum">
            <p>Compensation Amount:</p>
            <input type="number" name="comAmo">
            <p>Reason:</p>
            <input type="text" name="reason">

            <input type="submit">
        </form>
        <?php
        //header("Content-Type: text/plain");
        include("config.php");
        if (isset($_POST['comNum'])) {
            global $db, $search_sql;
            $db = $_POST['comNum'];
            if ($db == NULL) {
                $db == 1;
            } else {

                $update_sql = "UPDATE compensation "
                        . "SET compenAmount='" . $_POST["comAmo"] . "', reason='" . $_POST["reason"] . "' "
                        . "WHERE compenNum='" . $_POST["comNum"] . "'";
                $update_query = mysqli_query($mysqli, $update_sql);

                $search_sql = 'SELECT * FROM compensation ';
                $search_query = mysqli_query($mysqli, $search_sql);

                if (mysqli_num_rows($search_query) != 0) {
                    $search_rs = mysqli_fetch_assoc($search_query);
                    echo "<table cellpadding='0' cellspacing='0'>";
                    echo"<tr>"
                    . "<th>Compensation Number: </th>"
                    . "<th>&nbsp;</th>"
                    . "<th>Invoice Number: </th>"
                    . "<th>&nbsp;</th>"
                    . "<th>Message: </th>"
                    . "<th>&nbsp;</th>"
                    . "<th>Compensation amount: </th>"
                    . "<th>&nbsp;</th>"
                    . "<th>Reason: </th>"
                    . "</tr>";
                    do {
                        echo "<tr>";
                        echo "<td>&nbsp;</td>";
                        echo "<td>" . $search_rs['compenNum'] . "</td>";
                        echo "<td>&nbsp;</td>";
                        echo "<td>" . $search_rs['invoiceNumber'] . "</td>";
                        echo "<td>&nbsp;</td>";
                        echo "<td>" . $search_rs['description'] . "</td>";
                        echo "<td>&nbsp;</td>";
                        echo "<td>" . $search_rs['compenAmount'] . "</td>";
                        echo "<td>&nbsp;</td>";
                        echo "<td>" . $search_rs['reason'] . "</td>";
                        echo "</tr>";
                    } while ($search_rs = mysqli_fetch_assoc($search_query));
                } else
                    echo "No results found";
                echo"</table>";
            }
        }
        ?>
    </body>
</html>
