<div class="card mb-3">
    <img src="https://cdn.pixabay.com/photo/2015/05/19/14/55/educational-773651_960_720.jpg" alt="no logo">
    <div class="card-body">
        <h5 class="card-title">List of students</h5>
        <p class="card-text">You can find here all the informatins about students in the system</p>
        <table class="table table-dark table-hover">
            <thead>
            <tr>
                <th scope="col">Cin</th>
                <th scope="col">First Name</th>
                <th scope="col">Second Name</th>
                <th scope="col">Age</th>
                <th scope="col">Speciality</th>
                <th scope="col">Operations</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            @foreach ($students as $student)
                <tr>
                    <th>{{$student->cin}}</th>
                    <td>{{$student->firstName}}</td>
                    <td>{{$student->secondName}}</td>
                    <td>{{$student->age}}</td>
                    <td>{{$student->Speciality}}</td>
                    <td>

                        <a href="{{url('/edit/'.$student->id)}}" class="btn btn-sm btn-warning">Edit</a>

                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
</div>

