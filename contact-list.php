<?php 

    $contacts = [
        [
            "name" => "John",
            "tel" => 675468277,
            "email" => "Johndoe@gmail.com"
        ],

        [
            "name" => "Francis",
            "tel" => 678904657,
            "email" => "FrancisConcecao@gmail.com"
        ],

        [
            "name" => "Andrew",
            "tel" => 68890347,
            "email" => "AndrewTate@yahoo.com"
        ],

        [
            "name" => "Zankado",
            "tel" => 675508278,
            "email" => "ZankadoMasecherano@yahoo.com"
        ],

        [
            "name" => "Serena",
            "tel" => 68768237,
            "email" => "Serenawilliams@gmail.com"
        ]

    ];



 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-List</title>
    <link rel="stylesheet" href="contact-list.css">
</head>
<body>
        <h2> Contact List </h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($contacts as $contact): ?>
                    <tr>
                        <td><?php echo $contact['name'] ?></td>
                        <td> <?php echo $contact['tel'] ?></td>
                        <td><?php echo $contact['email']?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>    

</body>
</html>
