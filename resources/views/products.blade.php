<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Mega Offers</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include "navBar.php";
    ?>
    <div class="container-fluid">
    @if(Session('status'))
        <div class="alert alert-success">{{Session('status')}}</div>
        @endif
        <div class="row">
            @foreach($products as $products)
            <div class="col-md-4">
                <div class="card m-3">
                    <img src="{{ asset('uploads/product/'.$products->img)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h1 class="card-title">
                            {{$products->title}}
                        </h1>
                        <p class="card-text">
                        {{$products->dirciption}}
                        </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                        {{$products->price}}
                        </li>
                        <li class="list-group-item">
                        {{$products->minimum}}
                        </li>
                        <li class="list-group-item">
                        {{$products->address}}
                        </li>
                        <div class="row">
                            <div class="col-sm-6 text-center">
                                {{$products->course}}
                            </div>
                            <div class="col-sm-6 text-center">
                            {{$products->year}}
                            </div>
                        </div>
                    </ul>

                    <div class="card-body">
                        <!-- <a href="yourCardUpdate.php" class="card-link">update</a> -->
                        <a href="{{ url('delete/'.$products->title)}}" class="card-link">delete</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    </div>



    <!-- footer -->
    <?php
include "footer.php";
?>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>