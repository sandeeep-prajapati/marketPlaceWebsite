
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

    <div class="container register register-background">
        <div class="row ">
            <div class="col-md-3 register-left">
                <img src="img/red-rocket-png-5.png" alt="">
                <h2>Welcome</h2>
                <p>Share your notes with your following student. To make education esay and effordable...</p>
                <button class="bg-success text-center text-white input-button"><a class="text-white"
                        href="myProducts">Your Products</a></button>
                        <br><br>
            </div>
            <div class="col-md-9 register-right">
                <form action="{{route('merchant-user')}}" method="post" enctype="multipart/form-data">
                @csrf
                    <Label>ENTER YOUR BOOK / NOTES TITLE</Label>
                    <br>
                    <input class="input-type" type="text" name="title" value="{{old('title')}}" placeholder="PRODUCT">
                    <span class="text text-danger">@error('title') {{$message}} @enderror</span>
                    <br>
                    <br>
                    <Label>ENTER YOUR BOOK / NOTES DESCRIPTION</Label>
                    <br>
                    <input class="input-type" type="text" name="dirciption" value="{{old('dirciption')}}" placeholder="PRODUCT">
                    <span class="text text-danger">@error('dirciption') {{$message}} @enderror</span>
                    <br>
                    <br>
                    <label for="exampleFormControlSelect1">Course related to book / notes</label>
                    <select class="form-control" name="course" value="{{old('course')}}"  id="exampleFormControlSelect1">
                        <option type= "text">For-all-Courses</option>
                        <option type= "text">B-tech</option>
                        <option type= "text">10Th</option>
                        <option type= "text">B-pharma</option>
                        <option type= "text">BCA</option>
                        <option type= "text">BBA</option>
                        <option type= "text">POLYTECHNIC</option>
                        <option type= "text">D-PHARMA</option>
                        <option type= "text">M-PHARMA</option>
                        <option type= "text">LLB</option>
                        <option type= "text">BSC</option>

                    </select>
                    <span class="text text-danger">@error('course') {{$message}} @enderror</span>

                    <br>
                    <label for="exampleFormControlSelect1">Year of Course related to book / notes</label>
                    <select class="form-control" name="year" value="{{old('year')}}"  id="exampleFormControlSelect1">
                        <option type= "text">For-all-year</option>
                        <option type= "text">1st year</option>
                        <option type= "text">2nd year</option>
                        <option type= "text">3rd year</option>
                        <option type= "text">4th year</option>
                    </select>
                    <span class="text text-danger">@error('year') {{$message}} @enderror</span>
                    <br>
                    <Label>PRICE</Label>
                    <br>
                    <input class="input-type" type="number" name="price" value="{{old('price')}}" value="{{old('fname')}}" placeholder="PRICE">
                    <span class="text text-danger">@error('price') {{$message}} @enderror</span>
                    <br>
                    <br><Label>NUMBERS OF ITEM</Label>
                    <br>
                    <input class="input-type" type="text" name="minimum" value="{{old('minimum')}}" placeholder="eg : 2 books only">
                    <span class="text text-danger">@error('minimum') {{$message}} @enderror</span>
                    <br>
                    <br>
                    <Label>YOUR ADDRESS</Label>
                    <br>
                    <input class="input-type" type="text" name="address" value="{{old('address')}}" placeholder="ADDRESS">
                    <span class="text text-danger">@error('address') {{$message}} @enderror</span>
                    <BR>
                    <br>
                    <Label>Choose image</Label>
                    <br>
                    <button class="btn-success input-button text-center"><input class="success" type="file"
                            value="image" name="img" value="{{old('img')}}" placeholder = "choose image"></button>
                    <span class="text text-danger">@error('img') {{$message}} @enderror</span>
                    <br>
                    <br>
                    <input class="input-button btn-success" type="submit" name="submit" value="Add your product">
                </form>
            </div>
        </div>
    </div>




    <!-- footer -->
    <?php
    include "footer.php";
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>


</html>