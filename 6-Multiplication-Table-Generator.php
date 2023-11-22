<?php

$tables = [
    1,
    2,
    3,
    4,
    5,
    6,
    7,
    8,
    9,
    10,
];
?>


<table border="2">
    <thead>
        <th>Table 2</th>
        <th>Table 3</th>
        <th>Table 4</th>
        <th>Table 5</th>
        <th>Table 6</th>
        <th>Table 7</th>
        <th>Table 8</th>
        <th>Table 9</th>
        <th>Table 10</th>



    </thead>
    <tbody>
        <?php
        foreach ($tables as $table) {
            $table2 = 0; ?>

            <tr>
                <td>
                    <?php

                    echo "2 x $table = " . 2 * $table; ?>
                </td>
                <td>
                    <?php echo "3 x $table = " . 3 * $table; ?>
                </td>
                <td>
                    <?php echo "4 x $table = " . 4 * $table; ?>
                </td>
                <td>
                    <?php echo "5 x $table = " . 5 * $table; ?>
                </td>
                <td>
                    <?php echo "6 x $table = " . 6 * $table; ?>
                </td>
                <td>
                    <?php echo "7 x $table = " . 7 * $table; ?>
                </td>
                <td>
                    <?php echo "8 x $table = " . 8 * $table; ?>
                </td>
                <td>
                    <?php echo "9 x $table = " . 9 * $table; ?>
                </td>
                <td>
                    <?php echo "10 x $table = " . 10 * $table; ?>
                </td>
            </tr>

        <?php } ?>

        <tr>
            <td>
                <?php echo $table2; ?>
            </td>
        </tr>
    </tbody>
</table>