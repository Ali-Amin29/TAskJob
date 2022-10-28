<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
    a {
        text-decoration: none;
        color: white;
    }
    </style>
</head>
<body>
    <div class="alert alert-primary text-center mt-5" role="alert">
        <h1> All Having Clients </h1>
    </div>
    <div class="container mt-5">
        <div class="row">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">UserID</th>
                        <th scope="col">UserName</th>
                        <th scope="col">Adress</th>
                        <th scope="col">Email</th>




                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clients as $key => $client) :?>
                    <tr>
                        <td scope="col"><?php echo $key+1 ?></td>
                        <td scope="col" ><?php echo $client['ID'] ?></td>
                        <td scope="col" ><?php echo $client['name'] ?></td>
                        <td scope="col" ><?php echo $client['adress'] ?></td>
                        <td scope="col" ><?php echo $client['email'] ?></td>

                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
