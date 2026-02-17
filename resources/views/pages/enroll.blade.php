@extends('layouts.app')

@section('content')
<section class="enroll-page">
<!-- Page Title -->
<section class="page-title" style="background-image:url({{ asset('assets/images/background/page-title.webp') }})">
    <div class="auto-container">
        <h2>Course Enrollment</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Course Enrollment</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- Contact Form Box -->
<div class="contact-form_box enroll-form_box">
    <div class="auto-container">
        <h4>Book Your Quran Class</h4>

        <div class="mb-4" style="background:#f5f9f7;border:1px solid #d8e5df;padding:20px;border-radius:10px;">
            <strong>Enrollment Support:</strong> Fill in the form below and our admissions team will contact you with schedule, trial class, and payment details.
        </div>

        @if (session('success'))
            <div class="mb-4" style="background:#e8f8ee;border:1px solid #8fd4ab;color:#1d6f42;padding:14px 16px;border-radius:8px;">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-4" style="background:#fff2f2;border:1px solid #f0b5b5;color:#7d1c1c;padding:14px 16px;border-radius:8px;">
                <strong>Please fix the following:</strong>
                <ul class="mt-2 mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="contact-form">
            <form method="post" action="{{ route('enroll.submit') }}">
                @csrf

                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="text" name="student_name" value="{{ old('student_name') }}" placeholder="Student Full Name*" required>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="text" name="parent_name" value="{{ old('parent_name') }}" placeholder="Parent/Guardian Name (Optional)">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email Address*" required>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 form-group">
                        <select name="dial_code" id="dial_code" required>
                            <option value="">Code*</option>
                            @foreach ($locationData as $countryCode => $countryItem)
                                <option
                                    value="{{ $countryItem['dial_code'] }}"
                                    data-country="{{ $countryCode }}"
                                    data-flag="{{ $countryItem['flag'] }}"
                                    data-country-name="{{ $countryItem['name'] }}"
                                    data-code="{{ $countryItem['dial_code'] }}"
                                    {{ old('country') === $countryCode ? 'selected' : '' }}
                                >
                                    {{ $countryItem['flag'] }} {{ $countryItem['dial_code'] }} ({{ $countryItem['name'] }})
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-3 col-md-8 col-sm-12 form-group">
                        <input type="text" name="phone_number" value="{{ old('phone_number') }}" placeholder="WhatsApp / Phone Number*" required>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                        <input type="text" name="age" value="{{ old('age') }}" inputmode="numeric" pattern="[0-9]*" maxlength="2" placeholder="Student Age">
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                        <select name="country" id="country" required>
                            <option value="">Select Country*</option>
                            @foreach ($locationData as $countryCode => $countryItem)
                                <option value="{{ $countryCode }}" {{ old('country') === $countryCode ? 'selected' : '' }}>
                                    {{ $countryItem['flag'] }} {{ $countryItem['name'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                        <select name="state" id="state" data-old-state="{{ old('state') }}" required>
                            <option value="">Select State*</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <select name="city" id="city" data-old-city="{{ old('city') }}" required>
                            <option value="">Select City*</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <select name="course" required>
                            <option value="">Select Course*</option>
                            @foreach ($courseMap as $courseSlug => $courseName)
                                <option value="{{ $courseSlug }}" {{ old('course', $selectedCourse) === $courseSlug ? 'selected' : '' }}>
                                    {{ $courseName }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <select name="plan" required>
                            <option value="">Select Plan*</option>
                            @foreach ($planMap as $planSlug => $planLabel)
                                <option value="{{ $planSlug }}" {{ old('plan', $selectedPlan) === $planSlug ? 'selected' : '' }}>
                                    {{ $planLabel }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input type="time" name="preferred_time" value="{{ old('preferred_time') }}" placeholder="Preferred Class Time">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <textarea name="notes" placeholder="Learning goals / Notes">{{ old('notes') }}</textarea>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <div class="button-box">
                            <button type="submit" class="theme-btn btn-style-four">
                                <span class="btn-wrap">
                                    <span class="text-one">Submit Booking</span>
                                    <span class="text-two">Submit Booking</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Contact Form Box -->
</section>
@endsection

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
<style>
.enroll-page .select2-container--default .select2-selection--single {
    height: 50px;
    border: 1px solid rgba(var(--black-color-rgb), 1);
    border-radius: 3px;
    background-color: var(--white-color);
}
.enroll-page .select2-container .select2-selection--single .select2-selection__rendered {
    line-height: 48px;
    padding-left: 25px;
    color: var(--black-color);
    font-size: var(--font-14);
    font-family: "Segoe UI Emoji", "Apple Color Emoji", "Noto Color Emoji", sans-serif;
}
.enroll-page .select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 48px;
    right: 12px;
}
.enroll-page .select2-container {
    width: 100% !important;
}
.enroll-page .select2-results__option {
    font-family: "Segoe UI Emoji", "Apple Color Emoji", "Noto Color Emoji", sans-serif;
}
</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const locationData = @json($locationData);
    const countrySelect = document.getElementById('country');
    const stateSelect = document.getElementById('state');
    const citySelect = document.getElementById('city');
    const dialCodeSelect = document.getElementById('dial_code');

    const oldCountry = "{{ old('country') }}";
    const oldState = stateSelect.getAttribute('data-old-state') || '';
    const oldCity = citySelect.getAttribute('data-old-city') || '';

    const setOptions = (select, items, placeholder, selectedValue) => {
        select.innerHTML = '';
        const firstOption = document.createElement('option');
        firstOption.value = '';
        firstOption.textContent = placeholder;
        select.appendChild(firstOption);

        items.forEach((item) => {
            const option = document.createElement('option');
            option.value = item.value;
            option.textContent = item.label;
            if (selectedValue && selectedValue === item.value) {
                option.selected = true;
            }
            select.appendChild(option);
        });

        if (window.jQuery && window.jQuery(select).hasClass('select2-hidden-accessible')) {
            window.jQuery(select).trigger('change.select2');
        }
    };

    const syncDialCode = (countryCode) => {
        if (!countryCode || !locationData[countryCode]) {
            return;
        }
        const optionByCountry = dialCodeSelect.querySelector(`option[data-country="${countryCode}"]`);
        if (!optionByCountry) {
            return;
        }
        optionByCountry.selected = true;
        if (window.jQuery && window.jQuery(dialCodeSelect).hasClass('select2-hidden-accessible')) {
            window.jQuery(dialCodeSelect).trigger('change.select2');
        }
    };

    const populateStates = (countryCode, selectedState = '') => {
        if (!countryCode || !locationData[countryCode]) {
            setOptions(stateSelect, [], 'Select State*', '');
            setOptions(citySelect, [], 'Select City*', '');
            return;
        }

        const stateItems = Object.keys(locationData[countryCode].states).sort((a, b) => a.localeCompare(b)).map((stateName) => ({
            value: stateName,
            label: stateName
        }));

        setOptions(stateSelect, stateItems, 'Select State*', selectedState);
        populateCities(countryCode, stateSelect.value, oldCity);
    };

    const populateCities = (countryCode, stateName, selectedCity = '') => {
        if (!countryCode || !stateName || !locationData[countryCode] || !locationData[countryCode].states[stateName]) {
            setOptions(citySelect, [], 'Select City*', '');
            return;
        }

        const cityItems = locationData[countryCode].states[stateName]
            .slice()
            .sort((a, b) => a.localeCompare(b))
            .map((cityName) => ({
            value: cityName,
            label: cityName
        }));

        setOptions(citySelect, cityItems, 'Select City*', selectedCity);
    };

    const handleCountryChange = (countryCode) => {
        syncDialCode(countryCode);
        populateStates(countryCode);
    };

    const handleStateChange = (stateName) => {
        populateCities(countrySelect.value, stateName);
    };

    countrySelect.addEventListener('change', function () {
        handleCountryChange(this.value);
    });

    stateSelect.addEventListener('change', function () {
        handleStateChange(this.value);
    });

    dialCodeSelect.addEventListener('change', function () {
        const selectedOption = this.options[this.selectedIndex];
        const countryCode = selectedOption ? selectedOption.getAttribute('data-country') : '';
        if (!countryCode || !locationData[countryCode] || countrySelect.value === countryCode) {
            return;
        }
        countrySelect.value = countryCode;
        if (window.jQuery && window.jQuery(countrySelect).hasClass('select2-hidden-accessible')) {
            window.jQuery(countrySelect).trigger('change.select2');
        }
        populateStates(countryCode);
    });

    if (countrySelect.value || oldCountry) {
        if (!countrySelect.value && oldCountry) {
            countrySelect.value = oldCountry;
        }
        if (!dialCodeSelect.value) {
            syncDialCode(countrySelect.value);
        }
        populateStates(countrySelect.value, oldState);
    } else {
        setOptions(stateSelect, [], 'Select State*', '');
        setOptions(citySelect, [], 'Select City*', '');
    }

    if (window.jQuery) {
        const $ = window.jQuery;
        $('.enroll-page select').not('#dial_code').select2({
            width: '100%',
            placeholder: 'Select option',
            minimumResultsForSearch: 0
        });

        const formatDialCode = function (option) {
            if (!option.id) {
                return option.text;
            }
            const el = option.element;
            if (!el) {
                return option.text;
            }
            const flag = el.getAttribute('data-flag') || '';
            const code = el.getAttribute('data-code') || option.id;
            const countryName = el.getAttribute('data-country-name') || '';
            return `${flag} ${code}${countryName ? ` (${countryName})` : ''}`;
        };

        $('#dial_code').select2({
            width: '100%',
            placeholder: 'Code*',
            minimumResultsForSearch: 0,
            templateResult: formatDialCode,
            templateSelection: formatDialCode
        });
        $('#country').on('change', function () {
            handleCountryChange(this.value);
        });
        $('#state').on('change', function () {
            handleStateChange(this.value);
        });
    }
});
</script>
@endpush
