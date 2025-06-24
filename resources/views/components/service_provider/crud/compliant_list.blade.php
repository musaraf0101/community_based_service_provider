<div class="container mt-5">
  <div class="row">
    <div class="d-flex justify-content-between">
      <h5><i class="bi bi-journal-richtext"></i>Compliant List</h5>
    </div>
    <div class="col-md-12 table-responsive mt-3">
      <table class="table table">
        <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>service_date</th>
            <th>Email</th>
            <th>Phone No</th>
            <th>Compliand status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($complaint as $complaint)
          <tr>
            <td>{{ $complaint->id}}</td>
            <td>{{ $complaint->full_name}}</td>
            <td>{{ $complaint->service_date}}</td>
            <td>{{ $complaint->email}}</td>
            <td>{{ $complaint->phone_number}}</td>
            <td>
              @if ($complaint->complaint_status === 'pending')
              <span class="alert alert-warning">pending</span>
              @elseif ($complaint->complaint_status === 'going')
              <span class="alert alert-primary">on going</span>
              @elseif ($complaint->complaint_status === 'complete')
              <span class="alert alert-success">complete</span>
              @else
              <span>{{ $complaint->complaint_status }}</span>
              @endif
            </td>
            <td>
              <a href="{{route('ServiceProvider.complaintEdit',$complaint->id)}}" class="btn btn-dark btn-sm"><i class="bi bi-pencil-square"></i></a>
              <form action="{{route('ServiceProvider.complaintDelete',$complaint->id)}}" method="post">
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
  </div>
</div>