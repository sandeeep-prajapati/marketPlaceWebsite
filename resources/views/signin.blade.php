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
    <!-- nvacBar -->
    <?php
    include "navBar.php";

    ?>

    <div class="container register register-background">
        <div class="row ">
            <div class="col-md-3 register-left">
                <img src="img/red-rocket-png-5.png" alt="">
                <h2>Welcome</h2>
                <p>Here you can find best offers of you city.</p>
                <a href="login">
                    <input type="submit" class="btn btn-xll btn-success" name="" value="Log-in Here">
                </a>
            </div>
            <div class="col-md-9 register-right">
                <form action="{{route('register-user')}}" method="post">
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <Label>ENTER YOUR FIRST NAME</Label>
                    <br>
                    <input class="input-type" type="text" name="fname" value="{{old('fname')}}" placeholder="FIRST NAME" >
                    <span class="text text-danger">@error('fname') {{$message}} @enderror</span>
                    <br>
                    <br>
                    <Label>ENTER LAST NAME</Label>
                    <br>
                    <input class="input-type" type="text" name="lname" value="{{old('lname')}}" placeholder="LAST NAME" >
                    <span class="text text-danger">@error('lname') {{$message}} @enderror</span>
                    <br>
                    <br><Label>MOBILE NUMBER</Label>
                    <br>
                    <input class="input-type" type="number" name="mobilNo" value="{{old('mobilNo')}}" placeholder="MOBILE NO" >
                    <span class="text text-danger">@error('mobilNo') {{$message}} @enderror</span>
                    <br>
                    <br><Label>FULL ADDRESS</Label>
                    <br>
                    <input class="input-type" type="text" name="address" value="{{old('address')}}" placeholder="ADDRESS" >
                    <span class="text text-danger">@error('address') {{$message}} @enderror</span>
                    <br>
                    <br>
                    <label for="exampleFormControlSelect1">Select your Course</label>
                    <br>
                    <select class="form-control" name="course" value="{{old('course')}}" id="exampleFormControlSelect1">
                        <option type= "text">B-tech</option>
                        <option type= "text">B-pharma</option>
                        <option type= "text">BCA</option>
                        <option type= "text">BBA</option>
                        <option type= "text">POLYTECHNIC</option>
                        <option type= "text">D-PHARMA</option>
                        <option type= "text">M-PHARMA</option>
                        <option type= "text">LLB</option>
                        <option type= "text">BSC</option>
                        <option type= "text">OTHER</option>

                    </select>
                    <span class="text text-danger">@error('course') {{$message}} @enderror</span>
                    <br><label for="exampleFormControlSelect1">Choose your College Name</label>
                    <br>
                    <select class="form-control" name="college" value="{{old('college')}}" id="exampleFormControlSelect1">
                        <option type= "text">I T M</option>
                        <option type= "text">B I T</option>
                        <option type= "text">K I P M</option>
                    </select>
                    <span class="text text-danger">@error('college') {{$message}} @enderror</span>
                    <br>
                    <label for="exampleFormControlSelect1">Select your Current year of course</label>
                    <br>
                    <select class="form-control" name="year" value="{{old('year')}}" id="exampleFormControlSelect1">
                        <option type= "text">1st year</option>
                        <option type= "text">2nd year</option>
                        <option type= "text">3rd year</option>
                        <option type= "text">4th year</option>
                    </select>
                    <span class="text text-danger">@error('year') {{$message}} @enderror</span>
                    <br>
                    <Label> STRONG PASSWORD</Label>
                    <br>
                    <input class="input-type" type="text" name="password" value="{{old('password')}}" placeholder="STRONG PASSWORD" >
                    <span class="text text-danger">@error('password') {{$message}} @enderror</span>
                    <br>
                    <br>
                    <input class="input-button btn-success" type="submit" value="Sign-in Here">
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