@extends('admin.layouts')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-xl-4 col-sm-7 box-col-3">
                        <h3>Job Applied List</h3>
                    </div>
                    <div class="col-5 d-none d-xl-block">

                    </div>
                    <div class="col-xl-3 col-sm-5 box-col-4">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('admin-assets/svg/icon-sprite.svg') }}#stroke-home"></use>
                                    </svg></a></li>
                            <li class="breadcrumb-item">Job Applied</li>
                            <li class="breadcrumb-item active">Job Applied List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <!-- HTML (DOM) sourced data  Starts-->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive custom-scrollbar">
                                <table class="display" id="jobPostList" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Salary</th>
                                            <th>Skills</th>
                                            <th>Qualification</th>
                                            <th>Experience</th>
                                            <th>Address</th>
                                            <th>Bio</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Initialize DataTable
            const url = @json(route('job.applied.list.data'));
            $('#jobPostList').DataTable({
                processing: true,
                serverSide: true,
                ajax: url,
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'job_post',
                        name: 'Job Post'
                    },
                    {
                        data: 'name',
                        name: 'Name'
                    },
                    {
                        data: 'email',
                        name: 'Email'
                    },
                    {
                        data: 'mobile',
                        name: 'Mobile'
                    },
                    {
                        data: 'salary',
                        name: 'Salary'
                    },
                    {
                        data: 'skills',
                        name: 'Skills'
                    },
                    {
                        data: 'qualifications',
                        name: 'Qualifications'
                    },
                    {
                        data: 'experience',
                        name: 'Experience'
                    },
                    {
                        data: 'address',
                        name: 'Address'
                    },
                    {
                        data: 'about',
                        name: 'About'
                    }
                ]
            });
        });
    </script>
@endpush
