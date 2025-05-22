 <!-- compliant table -->
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
             <th>Full Name</th>
             <th>Service Date</th>
             <th>Email</th>
             <th>Phone No</th>
             <th>Location</th>
             <th>Compliant</th>
             <th>Service Provider Name</th>
             <th>Service Type</th>
           </tr>
         </thead>
         <tbody>
           @foreach ($compliants as $compliant)
           <tr>
             <td>{{$compliant->id}}</td>
             <td>{{$compliant->full_name}}</td>
             <td>{{$compliant->service_date}}</td>
             <td>{{$compliant->email}}</td>
             <td>{{$compliant->phone_number}}</td>
             <td>{{$compliant->location}}</td>
             <td>{{$compliant->compliant}}</td>
             <td>{{$compliant->service_provider_name}}</td>
             <td>{{$compliant->profession}}</td>
           </tr>
           @endforeach

         </tbody>
       </table>
     </div>
   </div>
 </div>