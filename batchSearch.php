<html>
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
        <form action="updateStatus.php">
            <button type="submit" class="cancelbtn" ><a href="updateStatus.php" style="color: black">Update Status</a></button>
        </form>
        <br>
        <form method="post" action="batchSearch.php">
            <p>Batch Number:</p>
            <input type="text" name="batchNum">
            <input type="submit" value="submit">
        </form>

        <?php
//header("Content-Type: text/plain");
        include("config.php");
        if (isset($_POST['batchNum'])) {

            global $db, $search_sql;
            $db = $_POST['batchNum'];
            if ($db == NULL) {
                $db == 1;
            } else {

                $search_sql = 'SELECT invoiceNumber,recipientPH,shippingDate,
                                        shippingAdd3,shippingAdd4,expectedArrDate,shippingStatus,batch 
                                        FROM internal WHERE batch = ' . $_POST['batchNum'];
                $search_query = mysqli_query($mysqli, $search_sql);

                echo "<table border='0' cellpadding='0' cellspacing='0' class='container text-center'>";
                echo"<tr>"
                . "<th>Batch Number: </th>"
                . "<th>Invoice Number: </th>"
                . "<th>Recipient Phone Number </th>"
                . "<th>Shipping Date: </th>"
                . "<th>Shipping Address: </th>"
                . "<th>Expected Arrival Date: </th>"
                . "<th>Shipping Status: </th>"
                . "</tr>";

                if (mysqli_num_rows($search_query) != 0) {
                    $search_rs = mysqli_fetch_assoc($search_query);
                    do {
                        echo "<tr>";
                        echo "<td>" . $search_rs['batch'] . "</td>";
                        echo "<td>" . $search_rs['invoiceNumber'] . "</td>";
                        echo "<td>" . $search_rs['recipientPH'] . "</td>";
                        echo "<td>" . $search_rs['shippingDate'] . "</td>";
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
    </body>
</html>