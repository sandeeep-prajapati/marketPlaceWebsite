<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="icon" href="img\favicon.ico">
    <title>Mega Offers</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- navbar -->
    <?php
    include "navBar.php";
    ?>

    <!-- carousl -->
    <div class="container-fluid">
        @if(Session('status'))
        <div class="alert alert-success">{{Session('status')}}</div>
        @endif
        <div class="row">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/mySlider1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/mySlider2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/mySlider3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <!-- card -->
    <div class="container-fluid">
        <div class="row">
            @foreach($all as $all)
            <div class="col-md-4">
                <div class="card m-3">
                    <img style="height:350px; width : auto ;" src="{{ asset('uploads/product/'.$all->img)}}"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h1 class="card-title">
                            {{$all->title}}
                        </h1>
                        <p class="card-text">
                        {{$all->dirciption}}
                        </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                        {{$all->price}}
                        </li>
                        <li class="list-group-item">
                        {{$all->minimum}}
                        </li>
                        <li class="list-group-item">
                            {{$all->address}}
                        </li>
                        <div class="row">
                            <div class="col-sm-6 text-center">
                                {{$all->course}}
                            </div>
                            <div class="col-sm-6 text-center">
                            {{$all->year}}
                            </div>
                        </div>
                    </ul>

                    <!-- <div class="card-body">
                      <a href="#" class="card-link">Card link</a>
                      <a href="#" class="card-link">Another link</a>
                    </div> -->
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- footer -->
    <?php require "footer.php";
?>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
<?php

?>