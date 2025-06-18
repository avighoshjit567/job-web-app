<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobPost;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class JobPostController extends Controller
{
    // function for displaying the job post list
    public function jobPostList()
    {
        return view('job-post.job-post-list');
    }

    // function for fetching job post data
    public function jobPostListData(Request $request)
    {
        $jobPosts = JobPost::where('status', 'active');
    
        return DataTables::of($jobPosts)
            ->addIndexColumn()
            ->editColumn('created_at', function ($data) {
                return $data->created_at->format('Y-m-d H:i:s');
            })
            ->addColumn('action', function ($data) {
                $htmlData = '<a href="javascript:void(0)" data-id="'.$data->id.'" class="btn btn-info btn-sm tableEdit"><i class="fa fa-edit"></i></a>&nbsp;';
                $htmlData .= '<a href="javascript:void(0)" data-id="'.$data->id.'" class="btn btn-danger btn-sm tableDelete"><i class="fa fa-trash"></i></a>';
                return $htmlData;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    // function for displaying the job post list
    public function jobPostAdd()
    {
        return view('job-post.job-post-add');
    }
}
