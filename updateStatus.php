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
        <form action="compensationControl.php">
            <button type="submit" class="cancelbtn" ><a href="compensationControl.php" style="color: black">Compensation Control</a></button>
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

        <form method="post" action="">
            <p>Update Shipping Status</p>
            <p>Invoice Number:</p>
            <input type="number" name="invoiceNum">
            <p>Delivery Status:</p>
            <input type="text" name="deliSt">

            <input type="submit">
        </form>
        <?php
        //header("Content-Type: text/plain");
        include("config.php");
        if (isset($_POST['invoiceNum'])) {
            global $db, $search_sql;
            $db = $_POST['invoiceNum'];
            if ($db == NULL) {
                $db == 1;
            } else {

                $update_sql = "UPDATE internal "
                        . "SET shippingStatus='" . $_POST["deliSt"] . "'"
                        . "WHERE invoiceNumber='" . $_POST["invoiceNum"] . "'";
                $update_query = mysqli_query($mysqli, $update_sql);

                $search_sql = 'SELECT * FROM internal WHERE invoiceNumber = ' . $_POST['invoiceNum'];
                $search_query = mysqli_query($mysqli, $search_sql);
                echo "<table cellpadding='0' cellspacing='0'>";
                echo"<tr>"
                . "<th>Invoice Number: </th>"
                . "<th>Recipient Phone Number </th>"
                . "<th>Shipping Address: </th>"
                . "<th>Expected Arrival Date: </th>"
                . "<th>Shipping Status: </th>"
                . "</tr>";

                if (mysqli_num_rows($search_query) != 0) {
                    $search_rs = mysqli_fetch_assoc($search_query);
                    do {
                        echo "<tr>";
                        echo "<td>" . $search_rs['invoiceNumber'] . "</td>";
                        echo "<td>" . $search_rs['recipientPH'] . "</td>";
                        echo "<td>" . $search_rs['shippingAdd3'] .
                        "\t" . $search_rs['shippingAdd4'] . "</td>";
                        echo "<td>" . $search_rs['expectedArrDate'] . "</td>";
                        echo "<td>" . $search_rs['shippingStatus'] . "</td>";
                        echo "</tr>";
                    } while ($search_rs = mysqli_fetch_assoc($search_query));
                } else
                    echo "No results found";
                echo"</table>";
            }
        }
        ?>
        <form method="post" action="">
            <p>Update Delivery Completion</p>
            <p>Invoice Number:</p>
            <input type="number" name="invoiceNum2">

            <input type="submit">
        </form>
        <?php
        //header("Content-Type: text/plain");
        include("config.php");
        if (isset($_POST['invoiceNum2'])) {
            global $db, $search_sql;
            $db = $_POST['invoiceNum2'];
            if ($db == NULL) {
                $db == 1;
            } else {

                $update_sql = "UPDATE internal "
                        . "SET deliveryCompletion='1'"
                        . "WHERE invoiceNumber='" . $_POST["invoiceNum2"] . "'";
                $update_query = mysqli_query($mysqli, $update_sql);

                $search_sql = 'SELECT * FROM internal WHERE invoiceNumber = ' . $_POST['invoiceNum2'];
                $search_query = mysqli_query($mysqli, $search_sql);

                echo "<table cellpadding='0' cellspacing='0'>";
                echo"<tr>"
                . "<th>Invoice Number: </th>"
                . "<th>Recipient Phone Number </th>"
                . "<th>Shipping Address: </th>"
                . "<th>Expected Arrival Date: </th>"
                . "<th>Shipping Status: </th>"
                . "<th>Delivery Completion: </th>"
                . "</tr>";

                if (mysqli_num_rows($search_query) != 0) {
                    $search_rs = mysqli_fetch_assoc($search_query);
                    do {
                        echo "<tr>";
                        echo "<td>" . $search_rs['invoiceNumber'] . "</td>";
                        echo "<td>" . $search_rs['recipientPH'] . "</td>";
                        echo "<td>" . $search_rs['shippingAdd3'] .
                        "\t" . $search_rs['shippingAdd4'] . "</td>";
                        echo "<td>" . $search_rs['expectedArrDate'] . "</td>";
                        echo "<td>" . $search_rs['shippingStatus'] . "</td>";
                        echo"<td>" . $search_rs['deliveryCompletion'] . "</td>";
                        echo "</tr>";
                    } while ($search_rs = mysqli_fetch_assoc($search_query));
                } else
                    echo "No results found";
                echo"</table>";
            }
        }
        ?>
        <form method="post" action="">
            <p>Check Destination</p>
            <p>Invoice Number:</p>
            <input type="number" name="invoiceNum3">

            <input type="submit">
        </form>
        <?php
        //header("Content-Type: text/plain");
        include("config.php");
        if (isset($_POST['invoiceNum3'])) {
            global $db, $search_sql;
            $db = $_POST['invoiceNum3'];
            if ($db == NULL) {
                $db == 1;
            } else {

                $search_sql = 'SELECT * FROM internal WHERE invoiceNumber = ' . $_POST['invoiceNum3'];
                $search_query = mysqli_query($mysqli, $search_sql);

                echo "<table cellpadding='0' cellspacing='0'>";
                echo"<tr>"
                . "<th>Invoice Number: </th>"
                . "<th>Shipping Address: 1</th>"
                . "<th>Shipping Address: 2</th>"
                . "<th>Shipping Address: 3</th>"
                . "<th>Shipping Address: 4</th>"
                . "</tr>";

                if (mysqli_num_rows($search_query) != 0) {
                    $search_rs = mysqli_fetch_assoc($search_query);
                    do {
                        echo "<tr>";
                        echo "<td>" . $search_rs['invoiceNumber'] . "</td>";
                        echo "<td>" . $search_rs['shippingAdd1'] . "</td>";
                        echo "<td>" . $search_rs['shippingAdd2'] . "</td>";
                        echo "<td>" . $search_rs['shippingAdd3'] . "</td>";
                        echo "<td>" . $search_rs['shippingAdd4'] . "</td>";
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



