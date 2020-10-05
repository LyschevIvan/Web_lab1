<?php
session_start(['read_and_close' => true]);
?>
<div class="table-wrap" id="table">
    <table>
        <tr>
            <th>R</th>
            <th>X</th>
            <th>Y</th>
            <th>Result</th>
            <th>Time</th>
            <th>Time taken</th>
        </tr>

        <?php
        if (is_array($_SESSION['history'])) {
            foreach ($_SESSION['history'] as $row) {
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td style='text-align: center'> ";
                    print_r($value);
                    echo "</td>";

                }
                echo "</tr>";

            }
        }
        ?>
    </table>
</div>
