@extends('admin.layouts')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-xl-4 col-sm-7 box-col-3">
                    <h3> Add New Job Post</h3>
                </div>
                <div class="col-5 d-none d-xl-block">

                </div>
                <div class="col-xl-3 col-sm-5 box-col-4">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('admin-assets/svg/icon-sprite.svg') }}#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Job Post</li>
                        <li class="breadcrumb-item active">Job Post Add </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        @if (session('success'))
                        <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <div class="form theme-form">
                            <form action="{{ route('job.post.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label>Job Title</label>
                                            <input class="form-control" type="text" name="title"
                                                placeholder="Job name *">
                                            @error('title')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label>Description</label>
                                            <textarea name="description" class="form-control"
                                                id="exampleFormControlTextarea4" rows="3"
                                                placeholder="Enter Job Description"></textarea>
                                            @error('description')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label>Company name</label>
                                            <input class="form-control" type="text" name="company_name"
                                                placeholder="Name client or company name">
                                            @error('company_name')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label>Location</label>
                                            <input class="form-control" type="text" name="location"
                                                placeholder="Enter location">
                                            @error('location')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label>Employment Type</label>
                                            <select class="form-select" name="employment_type">
                                                <option>Full time</option>
                                                <option>Part time</option>
                                                <option>Project Basis</option>
                                            </select>
                                            @error('employment_type')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Experience Level</label>
                                                <input class="form-control" name="experience_level" type="text"
                                                    placeholder="Experience Level">
                                                @error('experience_level')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label>Education Level</label>
                                                <input class="form-control" name="education_level" type="text"
                                                    placeholder="Education Level">
                                                @error('education_level')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label>Salary</label>
                                            <input class="form-control" type="text" name="salary"
                                                placeholder="Enter Salary">
                                            @error('salary')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label>Vacancy</label>
                                            <input class="form-control" type="text" name="vacancy"
                                                placeholder="Enter Vacancy">
                                            @error('vacancy')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label>Application Deadline</label>
                                            <input class="datepicker-here form-control" type="date"
                                                name="application_deadline" data-language="en">
                                            @error('application_deadline')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label>Contact Email</label>
                                            <input class="form-control" type="text" name="contact_email"
                                                placeholder="Enter Contact Email">
                                            @error('contact_email')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label>Status</label>
                                            <select class="form-select" name="status">
                                                <option>Active</option>
                                                <option>Draft</option>
                                            </select>
                                            @error('status')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label>Image</label>
                                            <input class="datepicker-here form-control" type="file" name="image"
                                                data-language="en">
                                            @error('image')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-success me-3">Add</button>
                                            <a class="btn btn-danger" href="#">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection

@push('scripts')
<script>
setTimeout(() => {
    const alert = document.getElementById('success-alert');
    if (alert) {
        // Bootstrap 5 way to hide (fade out and remove)
        alert.classList.remove('show');
        alert.classList.add('fade');
        alert.addEventListener('transitionend', () => alert.remove());
    }
}, 2000); // 2 seconds
</script>
@endpush