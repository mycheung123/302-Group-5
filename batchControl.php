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
        <form action="batchSearch.php">
            <button type="submit" class="cancelbtn" ><a href="batchSearch.php" style="color: black">Search Batch</a></button>
        </form>
        <br>
        <form action="updateStatus.php">
            <button type="submit" class="cancelbtn" ><a href="updateStatus.php" style="color: black">Update Status</a></button>
        </form>
        <br>
        <form method="post" action="">
            <p>Batch Number:</p>
            <input type="text" name="batchNum">
            <p>Invoice Number:</p>
            <input type="number" name="invoiceNum">
            <input type="submit">
        </form>
        <?php
        //header("Content-Type: text/plain");
        include( "config.php" );
        if (isset($_POST['batchNum'])) {
            global $db, $search_sql;
            $db = $_POST['batchNum'];
            if ($db == NULL) {
                $db == 1;
            } else {

                $update_sql = "UPDATE internal "
                        . "SET batch ='" . $_POST["batchNum"] . "'"
                        . "WHERE invoiceNumber='" . $_POST["invoiceNum"] . "'";
                $update_query = mysqli_query($mysqli, $update_sql);

                $search_sql = 'SELECT invoiceNumber,recipientPH,shippingDate,
                                        shippingAdd3,shippingAdd4,expectedArrDate,shippingStatus,batch
                                        FROM internal WHERE invoiceNumber = ' . $_POST['invoiceNum'];
                $search_query = mysqli_query($mysqli, $search_sql);

                echo "<table border='0' cellpadding='0' cellspacing='0' class='container text-center'>";
                echo "<tr>"
                . "<th>Invoice Number: </th>"
                . "<th>Recipient Phone Number </th>"
                . "<th>Shipping Date: </th>"
                . "<th>Shipping Address: </th>"
                . "<th>Expected Arrival Date: </th>"
                . "<th>Shipping Status: </th>"
                . "<th>Batch Number: </th>"
                . "</tr>";

                if (mysqli_num_rows($search_query) != 0) {
                    $search_rs = mysqli_fetch_assoc($search_query);
                    do {
                        echo "<tr>";
                        echo "<td>" . $search_rs['invoiceNumber'] . "</td>";
                        echo "<td>" . $search_rs['recipientPH'] . "</td>";
                        echo "<td>" . $search_rs['shippingDate'] . "</td>";
                        echo "<td>" . $search_rs['shippingAdd3'] .
                        "\t" . $search_rs['shippingAdd4'] . "</td>";
                        echo "<td>" . $search_rs['expectedArrDate'] . "</td>";
                        echo "<td>" . $search_rs['shippingStatus'] . "</td>";
                        echo "<td>" . $search_rs['batch'] . "</td>";
                        echo "</tr>";
                    } while ($search_rs = mysqli_fetch_assoc($search_query));
                } else
                    echo "No results found";
                echo "</table>";
            }
        }
        ?>
    </body>

</html>