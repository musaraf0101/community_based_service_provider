<div class="col-md-12 table-responsive mt-3">
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Card Name</th>
        <th>Card Number</th>
        <th>Expire Date</th>
        <th>CCV</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($payments as $payment)
      <tr>
        <td>{{$payment->id}}</td>
        <td>{{$payment->card_name}}</td>
        <td>{{$payment->card_number}}</td>
        <td>{{$payment->expire_date}}</td>
        <td>{{$payment->ccv}}</td>
        <td>
          <a href="{{route('Payment.edit',$payment->id)}}" class="btn btn-dark btn-sm"><i class="bi bi-pencil-square"></i></a>
          <form action="{{route('Payment.delete',$payment->id)}}" method="post">
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