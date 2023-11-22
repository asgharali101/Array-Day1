<?php

$numbers = [
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
        <th>Squares</th>

    </thead>
    <tbody>
        <?php
        foreach ($numbers as $number) { ?>

            <tr>
                <td>
                    <?php

                    echo "The Square $number is = " . $number * $number; ?>
                </td>

            </tr>

        <?php } ?>
    </tbody>
</table>