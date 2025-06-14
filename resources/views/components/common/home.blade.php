<style>
    .container{
        margin-top: 50px;
    }
    .card{
        margin: 20px;
    }
</style>
<div class="container">
    <div class="row">

    @foreach ($providers as $provider)
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$provider->full_name}}</h5>
                    <h6>{{$provider->profession}}</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/view/service-provider-details" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

    @endforeach


        <!--  -->
    </div>
</div>