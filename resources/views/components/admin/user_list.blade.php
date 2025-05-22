<div class="col-md-12 table-responsive mt-3">
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Full Name</th>
        <th>NIC Number</th>
        <th>Gender</th>
        <th>Date Of Birth</th>
        <th>E-Mail</th>
        <th>Phone</th>
        <th>Location</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->full_name}}</td>
        <td>{{$user->nic}}</td>
        <td>{{$user->gender}}</td>
        <td>{{$user->date_of_birth}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->phone_number}}</td>
        <td>{{$user->location}}</td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>