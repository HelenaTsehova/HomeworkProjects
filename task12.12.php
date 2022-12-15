<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="style.css">
    <title>Homework6</title>
</head>
<body>
    <main class="main">
    
        <?php
           
            $result = $_SERVER['REQUEST_URI'];
            $requestPatch1 = explode('/', $result);

            $requestPatch = '/task12.12.php';

            echo '<a href="/task12.12.php" class="main_page"> main page </a></br>';
            
            
            $users = [
                [
                    'ID' => '1', 'Login' => 's_wilson16', 'Name' => 'Kate', 'Surname' => 'Wilson', 'Birthday' => '23/09/2001', 'RegistrationDate' => '14/12/2021', 'LastLoginDate' => '15/12/2022', 'Avatar' => '/public/avatar_1.jpg'
                ],
                [
                    'ID' => '2', 'Login' => 'den4ik', 'Name' => 'Dan', 'Surname' => 'Smith', 'Birthday' => '21/04/1999', 'RegistrationDate' => '04/01/2020', 'LastLoginDate' => '14/12/2022', 'Avatar' => '/public/avatar_2.jpg'
                ],
                [
                    'ID' => '3', 'Login' => 'walt_white', 'Name' => 'Walter', 'Surname' => 'White', 'Birthday' => '17/01/1994', 'RegistrationDate' => '06/06/2016', 'LastLoginDate' => '18/06/2020', 'Avatar' => '/public/avatar_3.jpg'
                ],
                [
                    'ID' => '4', 'Login' => 'good_man', 'Name' => 'Carl', 'Surname' => 'Goodman', 'Birthday' => '16/02/1985', 'RegistrationDate' => '31/12/2017', 'LastLoginDate' => '03/07/2022', 'Avatar' => '/public/avatar_4.jpg'
                ],
                [
                    'ID' => '5', 'Login' => 'gold_lora', 'Name' => 'Lora', 'Surname' => 'Golden', 'Birthday' => '05/05/2005', 'RegistrationDate' => '28/02/2005', 'LastLoginDate' => '09/08/2021', 'Avatar' => '/public/avatar_5.jpg'
                ],
                [
                    'ID' => '6', 'Login' => 'rick_ded', 'Name' => 'Rick', 'Surname' => 'Sanchez', 'Birthday' => '02/06/1958', 'RegistrationDate' => '13/09/2011', 'LastLoginDate' => '13/12/2022', 'Avatar' => '/public/avatar_6.jpg'
                ],
            ];

            
            $flag = false;

            if (isset ($requestPatch1[2])){
                for ($i =0; $i<= count($users)-1; $i++){
                if ((string) $users[$i]['ID'] === $requestPatch1[2]){
                    echo '<img src="' . $users[$i]['Avatar'] . '">' . '<br>';
                    echo 'Username: ' . $users[$i]['Login'] . '<br>';
                    echo 'Name: ' . $users[$i]['Name'] . '<br>';
                    echo 'Surname: ' . $users[$i]['Surname'] . '<br>';
                    echo 'Birthday: ' . $users[$i]['Birthday'] . '<br>';
                    echo 'Registration Date: ' . $users[$i]['RegistrationDate'] . '<br>';
                    echo 'Last login date: ' . $users[$i]['LastLoginDate'] . '<br>';
                    $flag = true;
                    break;
                }
                }   
                if ($flag === false){
                    echo 'Пользователь не найден';
                }
                exit;
            }
            

            if ($requestPatch1[1] === 'task12.12.php') {
                echo '<table border="1" class="table">';
                for ($i =0; $i<= count($users)-1; $i++){
                        echo '<tr>' ;
                        echo  '<td>' . $users[$i]['ID'] . '</td>';
                        echo  '<td>' . '<a class="login" href="task12.12.php/' . $users[$i]['ID'] . '">' . $users[$i]['Login'] . '</a' . '</td>';
                        echo  '<td>' . $users[$i]['Name'] . '</td>';
                        echo  '<td>' . $users[$i]['Surname'] . '</td>';
                        echo '</tr>';
                    }
                    echo '</table>';
                    exit;
            }
        ?>
    </main>
</body>
</html>