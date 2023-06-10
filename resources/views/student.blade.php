<!doctype html>
<html >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">

    <title>Student Management System</title>
  </head>
  <body>
@include("navbar")

    @if ($layout == 'index')

        <div class="container-fluid mt-5">
           <div class="row">
            <section class="col-md-5">
                @include("studentslist")
            </section>
            <section class="col md-5"></section>
           </div>
        </div>

    @elseif($layout == 'create')

        <div class="container-fluid mt-5">
            <div class="row">
                <section class="col">
                    @include("studentslist")
                </section>
                <section class="col">
                    <form action="{{url('/store')}}" method="post">
                        @csrf
                        @method('POST')
                        <div class="mb-3 form-group">
                            <label class="form-label">CIN</label>
                            <input type="text" class="form-control" name="cin"  placeholder="Enter Cin">
                        </div>
                        <div class="mb-3 form-group">
                            <label class="form-label">FIRST NAME</label>
                            <input type="text" class="form-control" name="firstName"  placeholder="Enter First Name">
                        </div>
                        <div class="mb-3 form-group">
                            <label class="form-label">SECOND NAME</label>
                            <input type="text" class="form-control" name="secondName"  placeholder="Enter Second Name">
                        </div>
                        <div class="mb-3 form-group">
                            <label class="form-label">AGE</label>
                            <input type="text" class="form-control" name="age"  placeholder="Enter age"><br><br>
                        </div>
                        <div class="mb-3 form-group">
                            <label class="form-label">SPECIALITY</label>
                            <input type="text" class="form-control" name="Speciality"  placeholder="Enter Speciality">
                        </div>

                        <input type="submit" class="btn btn-warning" value="Save">
                        <input type="reset" class="btn btn-warning" value="Reset">
                    </form>
                </section>
            </div>
        </div>

    @elseif($layout == 'show')

        <div class="container-fluid mt-5">
            <div class="row">
                <section class="col">
                    @include("studentslist")
                </section>
                <section class="col"></section>
            </div>
        </div>

    @elseif($layout == 'edit')

        <div class="container-fluid mt-5">
            <div class="row">
                <section class="col md-5">
                    @include("studentslist")
                </section>
                <section class="col">
                    {{-- <form action="{{url('/update/'.$student->id)}}" method="post">
                        @csrf

                        <div class="mb-3 form-group">
                            <label class="form-label">CIN</label>
                            <input value="{{$student->cin}}" type="text" class="form-control" name="cin"  placeholder="Enter Cin">
                        </div>
                        <div class="mb-3 form-group">
                            <label class="form-label">FIRST NAME</label>
                            <input value="{{$student->firstName}}" type="text" class="form-control" name="firstName"  placeholder="Enter First Name">
                        </div>
                        <div class="mb-3 form-group">
                            <label class="form-label">SECOND NAME</label>
                            <input value="{{$student->secondName}}" type="text" class="form-control" name="secondName"  placeholder="Enter Second Name">
                        </div>
                        <div class="mb-3 form-group">
                            <label class="form-label">AGE</label>
                            <input value="{{$student->age}}" type="text" class="form-control" name="age"  placeholder="Enter age"><br><br>
                        </div>
                        <div class="mb-3 form-group">
                            <label class="form-label">SPECIALITY</label>
                            <input value="{{$student->Speciality}}" type="text" class="form-control" name="Speciality"  placeholder="Enter Speciality">
                        </div>
                        <input type="submit" class="btn btn-info" value="Save">
                        <input type="reset" class="btn btn-warning" value="Reset">


                    </form> --}}

                    <h5 class="card-title">Update informations of student</h5>
                    <form action="{{ url('/update/'.$student->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>cin</label>
                            <input value="{{ $student->cin }}" name="cin" type="text" class="form-control"  placeholder="Enter cin">
                        </div>
                        <div class="form-group">
                            <label>First Name</label>
                            <input value="{{ $student->firstName }}" name="firstName" type="text" class="form-control"  placeholder="Enter the first name">
                        </div>
                        <div class="form-group">
                            <label>second Name</label>
                            <input value="{{ $student->secondName }}" name="secondName" type="text" class="form-control"  placeholder="Enter second name">
                        </div>
                        <div class="form-group">
                            <label>Age</label>
                            <input value="{{ $student->age }}" name="age" type="text" class="form-control"  placeholder="Enter the Age">
                        </div>
                        <div class="form-group">
                            <label>Speciality</label>
                            <input value="{{ $student->Speciality }}" name="Speciality" type="text" class="form-control"  placeholder="Enter Sepeciality">
                        </div>
                        <input type="submit" class="btn btn-info" value="Update">
                        <input type="reset" class="btn btn-warning" value="Reset">

                    </form>
                </section>
            </div>
        </div>

    @endif








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

  </body>
</html>
