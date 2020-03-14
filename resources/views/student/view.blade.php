<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Fullname</th>
            <th>Age</th>
            <th>province</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->firstname." ".$student->lastname}}</td>
                <td>{{$student->age}}</td>
                <td>{{$student->province}}</td>
                <td>
                    <a href="{{route('student.create')}}"></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>