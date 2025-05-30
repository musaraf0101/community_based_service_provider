<div class="col-md-12 table-responsive mt-3">
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Full Name</th>
        <th>NIC Number</th>
        <th>Gender</th>
        <th>Date Of Birth</th>
        <th>Profession</th>
        <th>E-Mail</th>
        <th>Phone</th>
        <th>Location</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($providers as $provider)
      <tr>
        <td>{{ $provider-> id}}</td>
        <td>{{ $provider-> full_name}}</td>
        <td>{{ $provider-> nic}}</td>
        <td>{{ $provider-> gender}}</td>
        <td>{{ $provider-> date_of_birth}}</td>
        <td>{{ $provider-> profession}}</td>
        <td>{{ $provider-> email}}</td>
        <td>{{ $provider-> phone_number}}</td>
        <td>{{ $provider-> location}}</td>
        <td>
          <a href="{{route('AdminServiceProvider.edit',$provider->id)}}" class="btn btn-dark btn-sm"><i class="bi bi-pencil-square"></i></a>
          <form action="{{route('AdminServiceProvider.delete',$provider->id)}}" method="post">
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