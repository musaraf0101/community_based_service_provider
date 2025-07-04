<div class="top-nav-search mb-5">
  <div class="input-group">
    <input type="text" id="providerSearch" class="form-control" placeholder="Search here">
    <button class="btn btn-dark" type="button">
      <i class="fas fa-search"></i>
    </button>
  </div>
</div>
<div class="col-md-12 table-responsive">
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
          <a href="{{route('User.userbook')}}" class="btn btn-outline-primary"><i class="bi bi-calendar-check"></i> Book</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<script>
  document.getElementById('providerSearch').addEventListener('keyup', function() {
    let searchValue = this.value.toLowerCase();
    let tableRows = document.querySelectorAll('.table tbody tr');
    tableRows.forEach(function(row) {
      let rowText = row.innerText.toLowerCase();
      if (rowText.includes(searchValue)) {
        row.style.display = '';
      } else {
        row.style.display = 'none';
      }
    });
  });
</script>