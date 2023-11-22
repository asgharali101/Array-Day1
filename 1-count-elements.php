<?php
$students = [
    [
        'name' => 'Asghar',
        'father_name' => 'haji chanesar',
        'cast' => 'burdi',
    ],
    [
        'name' => 'Ali',
        'father_name' => 'Ahmed',
        'cast' => 'memon',
    ],
    [
        'name' => 'Afzal',
        'father_name' => 'Gul ahmed',
        'cast' => 'burdi',
    ],
    [
        'name' => 'faraz',
        'father_name' => 'najeeb',
        'cast' => 'memon',
    ],
];


?>


<table border="2">

    <thead>
        <th>Name </th>
        <th>Father name</th>
        <th>Cast</th>
    </thead>

    <tbody>
        <?php

        foreach ($students as $key) { ?>

        <tr>
            <td>
                <?php

                    echo $key['name'] . "<br>"; ?>
            </td>
            <td>
                <?php echo $key['father_name'] . "<br>";
                    ?>
            </td>
            <td>
                <?php echo $key['cast'] . "<br>";
                    ?>
            </td>

        </tr>

        <?php } ?>
    </tbody>
</table>