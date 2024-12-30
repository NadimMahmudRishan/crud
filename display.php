<?php
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>CRUD Operation</title>
</head>

<body>
    <div class="items-center">
        <button class="btn btn-primary px-5 py-3 bg-blue-700 hover:bg-blue-800 rounded-lg text-white font-semibold m-7"><a href="user.php">Add User</a></button>

        <table class="border">
            <thead>
                <tr>
                    <th class="p-5">Name</th>
                    <th class="p-5">Email</th>
                    <th class="p-5">Password</th>
                </tr>
            </thead>

            <tbody>

                <?php
                $sql = "select * from `crud`";
                $result = mysqli_query($con, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                    $name = $row['name'];
                    $email = $row['email'];
                    $password = $row['password'];

                    echo "
                    <tr> 
                    <td class='p-5 border'>$name</td>
                    <td class='p-5 border'>$email</td>
                    <td class='p-5 border'>$password</td>
                    </tr>
                    ";
                }
                ?>
            </tbody>
        </table>

    </div>
</body>

</html>