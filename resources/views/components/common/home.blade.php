<div class="container py-4">
    <div class="row">
        @foreach($providers as $provider)
        <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
            <div class="card shadow-sm border-0 rounded-4 h-100">
                <img src="https://via.placeholder.com/400x200?text=Service+Image" class="card-img-top rounded-top-4" alt="Service Image">
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="card-title mb-0">{{ $provider->name }}</h5>
                    </div>
                    <p class="card-text text-muted small">
                        Get high-priority help with guaranteed response time.
                    </p>
                    <ul class="list-unstyled text-muted small mb-3">
                        <li><i class="bi bi-clock-fill me-1"></i> Response Time: <strong>Under 2 hours</strong></li>
                        <li><i class="bi bi-geo-alt-fill me-1"></i> Location: <strong>{{ $provider->location }}</strong></li>
                        <li><i class="bi bi-person-fill-check me-1"></i> Profession: <strong>{{ $provider->profession }}</strong></li>
                    </ul>
                    <div class="mt-auto d-flex justify-content-between">
                        <a href="/user/dashboard/book/{{ $provider->id }}" class="btn btn-primary w-100 me-2">
                            <i class="bi bi-calendar-check-fill me-1"></i> Book Now
                        </a>
                        <a href="/user/dashboard/compliant-create/{{ $provider->id }}" class="btn btn-outline-danger w-100">
                            <i class="bi bi-exclamation-triangle-fill me-1"></i> Report Issue
                        </a>
                    </div>
                </div>
                <div class="card-footer text-muted small text-center">
                    Last updated: {{ $provider->updated_at}}
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $providers->links('pagination::bootstrap-5') }}
    </div>
</div>
