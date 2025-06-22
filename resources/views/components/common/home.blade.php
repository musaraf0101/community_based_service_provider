<style>
    .filter-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .filter-group {
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 6px;
        overflow: hidden;
    }

    .filter-header {
        padding: 10px 15px;
        background-color: #f1f1f1;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-weight: bold;
        font-size: 0.95em;
    }

    .filter-body {
        display: none;
        padding: 10px 15px;
        background-color: #fff;
    }

    .filter-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .filter-list li {
        display: flex;
        align-items: center;
        margin-bottom: 8px;
    }

    .filter-list input[type="checkbox"] {
        margin-right: 8px;
        width: 18px;
        height: 18px;
        border-radius: 3px;
        border: 1px solid #ccc;
        cursor: pointer;
        position: relative;
    }

    .filter-list input[type="checkbox"]:checked {
        background-color: #007bff;
        border-color: #007bff;
    }

    .filter-list input[type="checkbox"]:checked::after {
        content: '✓';
        color: white;
        font-size: 14px;
        position: absolute;
        top: 1px;
        left: 4px;
    }

    .filter-list label {
        font-size: 0.9em;
        cursor: pointer;
    }

    .arrow {
        transition: transform 0.2s;
    }

    .arrow.open {
        transform: rotate(180deg);
    }
</style>

<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="filter-container">
                <h5 class="mb-3">Services</h5>

                <!-- Location Filter -->
                <div class="filter-group">
                    <div class="filter-header" data-toggle="location">
                        Location
                        <span class="arrow">&#9660;</span>
                    </div>
                    <div class="filter-body" id="location-options">
                        <ul class="filter-list">
                            @php
                            $districts = [
                            "Colombo", "Gampaha", "Kalutara", "Kandy", "Matale", "Nuwara Eliya",
                            "Galle", "Matara", "Hambantota", "Jaffna", "Kilinochchi", "Mannar",
                            "Mullaitivu", "Vavuniya", "Ampara", "Batticaloa", "Trincomalee",
                            "Kurunegala", "Puttalam", "Anuradhapura", "Polonnaruwa",
                            "Badulla", "Monaragala", "Kegalle", "Ratnapura"
                            ];
                            @endphp
                            @foreach($districts as $district)
                            <li>
                                <input type="checkbox" value="{{ strtolower($district) }}" id="district-{{ strtolower($district) }}">
                                <label for="district-{{ strtolower($district) }}">{{ $district }}</label>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Profession Filter -->
                <div class="filter-group">
                    <div class="filter-header" data-toggle="profession">
                        Profession
                        <span class="arrow">&#9660;</span>
                    </div>
                    <div class="filter-body" id="profession-options">
                        <ul class="filter-list">
                            @php
                            $professions = ['Plumber','Electrician','Mechanic','Carpenter','Painter','Mason','Roofer',
                            'Gardener','Cleaner','Housekeeper','HVAC Technician','Welder','Appliance Repair Technician',
                            'Tailor','Tutor','IT / Computer Technician','Security Guard','Driver','Beautician','Hairdresser',
                            'Photographer','Courier Service','Home Health Aide','Pool Cleaner','Maintenance Specialist'];
                            @endphp
                            @foreach($professions as $profession)
                            <li>
                                <input type="checkbox" value="{{ strtolower($profession) }}" id="profession-{{ strtolower($profession) }}">
                                <label for="profession-{{ strtolower($profession) }}">{{ $profession }}</label>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Gender Filter -->
                <div class="filter-group">
                    <div class="filter-header" data-toggle="gender">
                        Gender
                        <span class="arrow">&#9660;</span>
                    </div>
                    <div class="filter-body" id="gender-options">
                        <ul class="filter-list">
                            @php
                            $genders = ['Male', 'Female', 'Other'];
                            @endphp
                            @foreach($genders as $gender)
                            <li>
                                <input type="checkbox" value="{{ strtolower($gender) }}" id="gender-{{ strtolower($gender) }}">
                                <label for="gender-{{ strtolower($gender) }}">{{ $gender }}</label>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-9">
            <div class="row">
                @foreach($providers as $provider)
                <div class="col-md-6 col-lg-4 mb-4 provider-card"
                    data-location="{{ strtolower($provider->location) }}"
                    data-profession="{{ strtolower($provider->profession) }}"
                    data-gender="{{ strtolower($provider->gender) }}">
                    <div class="card shadow-sm border-0 rounded-4 h-100">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $provider->name }}</h5>
                            <p class="card-text text-muted small">Get high-priority help with guaranteed response time.</p>
                            <ul class="list-unstyled text-muted small mb-3">
                                <li><i class="bi bi-geo-alt-fill me-1"></i> Location: <strong>{{ $provider->location }}</strong></li>
                                <li><i class="bi bi-person-fill-check me-1"></i> Profession: <strong>{{ $provider->profession }}</strong></li>
                                <li><i class="bi bi-gender-ambiguous me-1"></i> Gender: <strong>{{ $provider->gender }}</strong></li>
                            </ul>
                            <div class="mt-auto d-flex justify-content-between">
                                <a href="/user/dashboard/book" class="btn btn-primary w-100 me-2">
                                    <i class="bi bi-calendar-check-fill me-1"></i> Book Now
                                </a>
                                <a href="/user/dashboard/compliant-create" class="btn btn-outline-danger w-100">
                                    <i class="bi bi-exclamation-triangle-fill me-1"></i> Report Issue
                                </a>
                            </div>
                        </div>
                        <div class="card-footer text-muted small text-center">
                            Last updated: {{ $provider->updated_at }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center mt-4">
                {{ $providers->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Toggle dropdown sections (Location, Profession, Gender)
        document.querySelectorAll('.filter-header').forEach(header => {
            header.addEventListener('click', function() {
                const type = header.getAttribute('data-toggle');
                const body = document.getElementById(`${type}-options`);
                const arrow = header.querySelector('.arrow');
                body.style.display = body.style.display === 'block' ? 'none' : 'block';
                arrow.classList.toggle('open');
            });
        });

        // Filtering logic to include gender filter
        function applyFilters() {
            const selectedDistricts = Array.from(document.querySelectorAll('#location-options input:checked')).map(cb => cb.value);
            const selectedProfessions = Array.from(document.querySelectorAll('#profession-options input:checked')).map(cb => cb.value);
            const selectedGenders = Array.from(document.querySelectorAll('#gender-options input:checked')).map(cb => cb.value);

            document.querySelectorAll('.provider-card').forEach(card => {
                const district = card.dataset.location;
                const profession = card.dataset.profession;
                const gender = card.dataset.gender;

                const matchDistrict = selectedDistricts.length === 0 || selectedDistricts.includes(district);
                const matchProfession = selectedProfessions.length === 0 || selectedProfessions.includes(profession);
                const matchGender = selectedGenders.length === 0 || selectedGenders.includes(gender);

                card.style.display = (matchDistrict && matchProfession && matchGender) ? '' : 'none';
            });
        }

        // Attach listeners to all checkboxes
        document.querySelectorAll('.filter-list input[type="checkbox"]').forEach(cb => {
            cb.addEventListener('change', applyFilters);
        });
    });
</script>