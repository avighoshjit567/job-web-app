<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobPost;
use App\Models\JobCategory;
use Illuminate\Support\Str;
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
                $htmlData = '<a href="javascript:void(0)" data-id="'.$data->id.'" class="btn btn-info btn-sm tableEdit">Edit</a>&nbsp;';
                $htmlData .= '<a href="javascript:void(0)" data-id="'.$data->id.'" class="btn btn-danger btn-sm tableDelete">Delete</a>';
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

    public function jobPostStore(Request $request)
    {
        $validated = $request->validate([
            'title'                => 'required|string|max:255',
            'description'          => 'nullable|string',
            'company_name'         => 'nullable|string|max:255',
            'location'             => 'nullable|string|max:255',
            'employment_type'      => 'required|string|in:Full time,Part time,Project Basis',
            'experience_level'     => 'nullable|string|max:255',
            'education_level'      => 'nullable|string|max:255',
            'salary'               => 'nullable|string|max:255',
            'vacancy'              => 'nullable|integer',
            'application_deadline' => 'nullable|date',
            'contact_email'        => 'nullable|email|max:255',
            'status'               => 'required|string|in:Active,Draft',
            'image'                => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Generate slug
        $slug = Str::slug($validated['title']);
        $originalSlug = $slug;
        $counter = 1;

        while (JobPost::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter++;
        }

        // Handle image upload if exists
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/job-posts'), $imageName);
            $validated['image_path'] = 'uploads/job-posts/' . $imageName;
        }

        // Store job post
        JobPost::create([
            'title'                => $validated['title'],
            'slug'                 => $slug,
            'description'          => $validated['description'] ?? null,
            'company_name'         => $validated['company_name'] ?? null,
            'location'             => $validated['location'] ?? null,
            'employment_type'      => $validated['employment_type'],
            'experience_level'     => $validated['experience_level'] ?? null,
            'education_level'      => $validated['education_level'] ?? null,
            'salary'               => $validated['salary'] ?? null,
            'vacancy'              => $validated['vacancy'] ?? null,
            'application_deadline' => $validated['application_deadline'] ?? null,
            'contact_email'        => $validated['contact_email'] ?? null,
            'status'               => $validated['status'],
            'image'                => $validated['image_path'] ?? null,
            'user_id'              => auth()->id(), // assuming jobs belong to users
        ]);

        return redirect()->route('job.post.add')->with('success', 'Job post created successfully.');
    }
    
    // function for displaying the job category add
    public function jobCategoryAdd()
    {
        return view('job-category.job-category-add');
    }

    public function jobCategoryStore(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:job_categories,title',
        ]);

        $slug = Str::slug($validated['title']);

        // Ensure slug is unique
        $originalSlug = $slug;
        $counter = 1;
        while (JobCategory::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter++;
        }

        JobCategory::create([
            'title'   => $validated['title'],
            'slug'    => $slug,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('job.category.add')->with('success', 'Job category created successfully.');
    }

    // function for displaying the job category add
    public function jobCategoryList()
    {
        return view('job-category.job-category-list');
    }

    // function for fetching job post data
    public function jobCategoryListData(Request $request)
    {
        $query = JobCategory::query();
    
        return DataTables::of($query)
            ->addIndexColumn()
            ->editColumn('created_at', function ($data) {
                return $data->created_at->format('Y-m-d H:i:s');
            })
            ->addColumn('action', function ($data) {
                $htmlData = '<a href="javascript:void(0)" data-id="'.$data->id.'" class="btn btn-info btn-sm tableEdit">Edit</a>&nbsp;';
                $htmlData .= '<a href="javascript:void(0)" data-id="'.$data->id.'" class="btn btn-danger btn-sm tableDelete">Delete</a>';
                return $htmlData;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    
}