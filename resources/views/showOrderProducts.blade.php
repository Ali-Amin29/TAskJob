<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <h1> All Having Products </h1>
    </div>
    <div class="container mt-5">
        <div class="row">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">OrderID</th>
                        <th scope="col">ProductID</th>
                        <th scope="col">amount</th>
                        <th scope="col">Action</th>




                        {{--  <th scope="col">Email</th>  --}}
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($order as $key => $value) :?>
                    <tr>
                        <td scope="col"><?php echo $key+1 ?></td>
                        <td scope="col" ><?php echo $value['order_ID'] ?></td>
                        <td scope="col" ><?php echo $value['product_ID'] ?></td>
                        <td scope="col" ><?php echo $value['amount'] ?></td>
                        <td scope="col" >
                            <button class="btn btn-info">
                                <a href={{ route('total',['idp'=>$value['product_ID'],'ido'=>$value['order_ID']]) }}> ShowPrice </a>
                               </button>
                        </td>
                    </tr>
                    <?php endforeach?>
                    @if($product)
                    <th scope="col">Price</th>
                    <th scope="col">Name</th>
                    @endif
                    @if($product)
                    <td scope="col" >
                        <?php foreach ($product as $key => $value) :?>
                        <?php echo $value['price'].' LE' ?>
                        <?php endforeach?>
                    </td>
                    <td scope="col" >
                        <?php foreach ($product as $key => $value) :?>
                        <?php echo $value['name_prod'] ?>
                        <?php endforeach?>
                    </td>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

<div class="container text-center">

</div>


</body>

</html>
