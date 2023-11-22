<?php
$teams = [
    'Pakistan' => [
        'Babar Azam',
        'Fakhar Zaman',
        'Shaheen Afridi',
        'Shadab Khan',
        'Mohammad Rizwan',
        'Imad Wasim',
        'Hassan Ali',
        'Sarfaraz Ahmed',
        'Wahab Riaz',
        'Haris Sohail',
        'Asif Ali',
    ],

    'England' => [
        'Joe Root',
        'Ben Stokes',
        'Jos Buttler',
        'Jason Roy',
        'Jofra Archer',
        'Jonny Bairstow',
        'Eoin Morgan',
        'Chris Woakes',
        'Adil Rashid',
        'Mark Wood',
        'Moeen Ali',

    ],





    'India' => [

        'Virat Kohli',
        'Rohit Sharma',
        'Jasprit Bumrah',
        'KL Rahul',
        'Ravindra Jadeja',
        'Shikhar Dhawan',
        'Hardik Pandya',
        'Yuzvendra Chahal',
        'Ishant Sharma',
        'Ajinkya Rahane',
        'Mohammed Shami',
    ],


    'Australia' => [

        'Steve Smith',
        'David Warner',
        'Pat Cummins',
        'Aaron Finch',
        'Glenn Maxwell',
        'Mitchell Starc',
        'Alex Carey',
        'Nathan Lyon',
        'Marnus Labuschagne',
        'Josh Hazlewood',
        'Travis Head',

    ],

    'South Africa' => [

        'Quinton de Kock',
        'Kagiso Rabada',
        'Faf du Plessis',
        'David Miller',
        'Lungi Ngidi',
        'Aiden Markram',
        'Rassie van der Dussen',
        'Tabraiz Shamsi',
        'Anrich Nortje',
        'Temba Bavuma',
        'Andile Phehlukwayo',
    ],


    'New Zealand' => [

        'Kane Williamson',
        'Trent Boult',
        'Martin Guptill',
        'Lockie Ferguson',
        'Tom Latham',
        'James Neesham',
        'Tim Southee',
        'Colin de Grandhomme',
        'Mitchell Santner',
        'Kyle Jamieson',
        'Daryl Mitchell',

    ],

    'West Indies' => [

        'Jason Holder',
        'Chris Gayle',
        'Andre Russell',
        'Shai Hope',
        'Evin Lewis',
        'Nicholas Pooran',
        'Shimron Hetmyer',
        'Oshane Thomas',
        'Kemar Roach',
        'Roston Chase',
        'Hayden Walsh Jr.',
    ],


    'Sri Lanka' => [

        'Dimuth Karunaratne',
        'Angelo Mathews',
        'Kusal Perera',
        'Dushmantha Chameera',
        'Dhananjaya de Silva',
        'Lahiru Thirimanne',
        'Wanindu Hasaranga',
        'Lasith Malinga',
        'Avishka Fernando',
        'Isuru Udana',
        'Nuwan Pradeep',

    ],

];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teams</title>
</head>

<body>
    <table border="1">
        <tbody>
            <?php foreach ($teams as $teamName => $teamPlayers) { ?>
            <tr>
                <th>
                    <?php echo $teamName; ?>
                </th>

                <?php foreach ($teamPlayers as $teamPlayerName) { ?>


                <td>
                    <?php echo $teamPlayerName; ?>
                </td>



                <?php } ?>


            </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>