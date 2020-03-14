<form action="{{route('student.store')}}" method="POST">
    @csrf
    <label>Firstname</label>
    <input type="text" name="fname" placeholder="Firstname">
    <label>Lastname</label>
    <input type="text" name="lname" placeholder="Lastname">
    <label>Age</label>
    <input type="number" name="age" placeholder="Age">
    <label>Province</label>
    <input type="text" name="province" placeholder="Province">
    <button name="btn" type="submit">Add</button>
</form>