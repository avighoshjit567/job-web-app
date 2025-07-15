@extends('admin.layouts')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-xl-4 col-sm-7 box-col-3">
                    <h3> Add New Job Category</h3>
                </div>
                <div class="col-5 d-none d-xl-block">

                </div>
                <div class="col-xl-3 col-sm-5 box-col-4">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('admin-assets/svg/icon-sprite.svg') }}#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Job Category</li>
                        <li class="breadcrumb-item active">Job Category Add </li>
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
                    @if (session('success'))
                    <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <br>
                    <div class="card-body">
                        <div class="form theme-form">
                            <form action="{{ route('job.category.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label>Job Category Title</label>
                                            <input class="form-control" type="text" name="title"
                                                placeholder="Job Category Title *">
                                            @if ($errors->has('title'))
                                            <div class="text-danger mt-1">{{ $errors->first('title') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col">
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-success me-3">Add</button>
                                            <a class="btn btn-danger" href="{{ route('job.category.add') }}">Cancel</a>
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