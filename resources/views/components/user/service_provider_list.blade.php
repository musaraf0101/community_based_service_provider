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
      </tr>
      @endforeach


    </tbody>
  </table>
</div>