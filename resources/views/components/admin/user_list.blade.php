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
        <th>Action</th>
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
        <td>
          <a href="{{route('AdminUser.edit',$user->id)}}" class="btn btn-dark btn-sm"><i class="bi bi-pencil-square"></i></a>
          <form action="{{route('AdminUser.delete',$user->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
          </form>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>