@extends('admin.layouts')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-xl-4 col-sm-7 box-col-3">
                    <h3> Edit Job Post</h3>
                </div>
                <div class="col-5 d-none d-xl-block">

                </div>
                <div class="col-xl-3 col-sm-5 box-col-4">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('admin-assets/svg/icon-sprite.svg') }}#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Job Post</li>
                        <li class="breadcrumb-item active">Job Post Edit </li>
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
                            <form action="{{ route('job.post.update', $jobPost->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label>Job Category</label>
                                            <select class="form-select" name="job_category_id">
                                                @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ $jobPost->category_id == $category->id ? 'selected' : '' }}>{{ $category->title }}</option>
                                                @endforeach
                                            </select>
                                            @error('job_category_id')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label>Job Title</label>
                                            <input class="form-control" type="text" name="title"
                                                placeholder="Job name *" value="{{ $jobPost->title }}">
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
                                                placeholder="Enter Job Description">{{ $jobPost->description }}</textarea>
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
                                                placeholder="Name client or company name" value="{{ $jobPost->company_name }}">
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
                                                placeholder="Enter location" value="{{ $jobPost->location }}">
                                            @error('location')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label>Employment Type</label>
                                            <select class="form-select" name="employment_type">
                                                <option value="Full time" {{ $jobPost->employment_type == 'Full time' ? 'selected' : '' }}>Full time</option>
                                                <option value="Part time" {{ $jobPost->employment_type == 'Part time' ? 'selected' : '' }}>Part time</option>
                                                <option value="Project Basis" {{ $jobPost->employment_type == 'Project Basis' ? 'selected' : '' }}>Project Basis</option>
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
                                                    placeholder="Experience Level" value="{{ $jobPost->experience_level }}">
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
                                                    placeholder="Education Level" value="{{ $jobPost->education_level }}">
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
                                                placeholder="Enter Salary" value="{{ $jobPost->salary }}">
                                            @error('salary')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label>Vacancy</label>
                                            <input class="form-control" type="text" name="vacancy"
                                                placeholder="Enter Vacancy" value="{{ $jobPost->vacancy }}">
                                            @error('vacancy')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label>Application Deadline</label>
                                            <input class="datepicker-here form-control" type="date"
                                                name="application_deadline" data-language="en" value="{{ $jobPost->application_deadline }}">
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
                                                placeholder="Enter Contact Email" value="{{ $jobPost->contact_email }}">
                                            @error('contact_email')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label>Status</label>
                                            <select class="form-select" name="status">
                                                <option value="Active" {{ $jobPost->status == 'Active' ? 'selected' : '' }}>Active</option>
                                                <option value="Draft" {{ $jobPost->status == 'Draft' ? 'selected' : '' }}>Draft</option>
                                            </select>
                                            @error('status')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label>Image</label>
                                            <img src="{{ asset($jobPost->image) }}" alt="">
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
                                            <button type="submit" class="btn btn-success me-3">Update</button>
                                            <a class="btn btn-danger" href="{{ route('job.post.list') }}">Cancel</a>
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