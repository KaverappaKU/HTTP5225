<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>User list</h1>
        <div class="row">
            <?php
            function getUsers(){
                $url = "https://jsonplaceholder.typicode.com/users";
                $data = file_get_contents($url);
                return json_decode($data, true);
            }
            $users = getUsers();

            for($i = 0; $i < count($users); $i++){
                    echo '<div class="col-md-3 m-2">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Name: ' .$users[$i]['name']. '</h5>
                                <p class="card-text">Email: ' .$users[$i]['email']. '</p>
                                <p class="card-text">Phone: ' .$users[$i]['phone']. '</p>
                            </div>
                        </div>
                    </div>';
                }
            ?>
        </div>
    </div>

    <script   script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

