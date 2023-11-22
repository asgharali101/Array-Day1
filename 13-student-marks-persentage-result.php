<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student Data with its marks</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">


</head>

<body>
    <?php
    $students = [
        'Asghar' => [
            'physics' => 90,
            'chemistry' => 88,
            'sindhi' => 85,
            'english' => 90,
            'biology' => 95,
        ],
        'Aqsa noor' => [
            'physics' => 60,
            'chemistry' => 40,
            'sindhi' => 90,
            'english' => 70,
            'biology' => 55,
        ],
        'Alisba' => [
            'physics' => 75,
            'chemistry' => 85,
            'sindhi' => 65,
            'english' => 78,
            'biology' => 92,
        ],
        'Fatima' => [
            'physics' => 90,
            'chemistry' => 80,
            'sindhi' => 70,
            'english' => 60,
            'biology' => 50,
        ],
        'Mehnaz' => [
            'physics' => 85,
            'chemistry' => 95,
            'sindhi' => 75,
            'english' => 88,
            'biology' => 78,
        ],
        'Sonu' => [
            'physics' => 78,
            'chemistry' => 68,
            'sindhi' => 82,
            'english' => 77,
            'biology' => 89,
        ],
        'Gulo' => [
            'physics' => 72,
            'chemistry' => 92,
            'sindhi' => 88,
            'english' => 85,
            'biology' => 76,
        ],
        'Fahad Ali' => [
            'physics' => 38,
            'chemistry' => 35,
            'sindhi' => 30,
            'english' => 45,
            'biology' => 33,
        ],
        'GulAhmed' => [
            'physics' => 94,
            'chemistry' => 86,
            'sindhi' => 79,
            'english' => 91,
            'biology' => 81,
        ],
        'Farhan' => [
            'physics' => 55,
            'chemistry' => 30,
            'sindhi' => 40,
            'english' => 30,
            'biology' => 42,
        ],
    ];

    ?>

    <table border="2">
        <thead>
            <tr>
                <th>Students</th>
                <th>Physics</th>
                <th>Chemistry</th>
                <th>Sindhi</th>
                <th>English</th>
                <th>Biology</th>
                <th>Total</th>
                <th>persenatge</th>
                <th>Result</th>
                <th>Awards</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($students as $studentName => $studentData) { ?>
                <tr>
                    <td>
                        <?php echo " $studentName <br>"; ?>
                    </td>
                    <td>
                        <?php echo $studentData['physics'] . '<br>'; ?>
                    </td>
                    <td>
                        <?php echo $studentData['chemistry'] . '<br>'; ?>
                    </td>
                    <td>
                        <?php echo $studentData['sindhi'] . '<br>'; ?>
                    </td>
                    <td>
                        <?php echo $studentData['english'] . '<br>'; ?>
                    </td>
                    <td>
                        <?php echo $studentData['biology'] . '<br>'; ?>
                    </td>
                    <td>
                        <?php echo $total = $studentData['physics'] + $studentData['chemistry'] + $studentData['sindhi'] + $studentData['english'] + $studentData['biology'];
                        ?>
                    </td>
                    <td>
                        <?php echo $persenatge = ($total / 500) * 100 . '%'; ?>
                    </td>
                    <td>
                        <?php if ($persenatge >= 80 && $persenatge <= 90) {
                            echo " A1 ";
                        } elseif ($persenatge >= 70 && $persenatge <= 80) {
                            echo "A ";
                        } elseif ($persenatge >= 65 && $persenatge <= 70) {
                            echo " B ";
                        } elseif ($persenatge >= 55 && $persenatge <= 65) {
                            echo " C ";
                        } elseif ($persenatge >= 50 && $persenatge <= 55) {
                            echo " D ";
                        } elseif ($persenatge >= 40 && $persenatge <= 50) {
                            echo " Pass ";
                        } else {
                            echo " fail ";
                        } ?>
                    </td>


                    <td>
                        <?php
                        if ($persenatge >= 80 && $persenatge <= 90) {
                            echo "  <i class='fas fa-star' style='color: gold;'></i>";
                        } elseif ($persenatge >= 70 && $persenatge <= 80) {
                            echo " <i class='fas fa-medal' style='color: brown;'></i>";
                        } elseif ($persenatge >= 65 && $persenatge <= 70) {
                            echo " <i class='fas fa-award' style='color: #cd7f32;'></i>";
                        } elseif ($persenatge >= 55 && $persenatge <= 65) {
                            echo " <i class='fas fa-certificate' style='color: green;'></i>";
                        } elseif ($persenatge >= 50 && $persenatge <= 55) {
                            echo " <i class='fas fa-check' style='color: pink;'></i>";
                        } else {
                            echo " <i class='fas fa-times' style='color: red;'></i>";
                        }
                        ?>
                    </td>


                </tr>
            <?php } ?>

        </tbody>
    </table>

</body>

</html>