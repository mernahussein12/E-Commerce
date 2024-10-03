@extends('backend.inc.master')
@section('title', 'Edit Service Category')
@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Dashboard</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Service Category</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Edit Service Category</h5>
                <hr/>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('ServiceCategory.update', $category->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-body mt-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="border border-3 p-4 rounded">
                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label">Arabic Category Name</label>
                                        <input type="text" class="form-control" name="name_ar" id="inputProductTitle" value="{{ $category->name_ar }}" placeholder="Category name">
                                    </div>

                                    <div class="mb-3">
                                        <label for="body_ar" class="form-label">Arabic Body</label>
                                        <textarea class="form-control" name="text_ar" id="body_ar" rows="3">{{ $category->text_ar }}</textarea>
                                    </div>


                                    <!-- Experiences -->
                                    <div class="mb-3">
                                        <label for="inputProductDescription" class="form-label">Arabic Experiences</label>
                                        <div id="experiences-ar">
                                            @foreach (json_decode($category->exp_ar, true) as $exp)
                                                <input type="text" class="form-control mb-2" name="exp_ar[]" value="{{ $exp }}">
                                            @endforeach
                                        </div>
                                        <button type="button" class="btn btn-primary" onclick="addExperience('ar')">Add Arabic Experience</button>
                                    </div>

                                   

                                    <!-- Front Image -->
                                    <div class="mb-3">
                                        <label for="image-uploadify" class="form-label">Front Image</label>
                                        <input id="image-uploadify" type="file" name="image" accept="image/*">
                                        @if($category->image)
                                            <img src="{{ url('public/services/' . $category->image) }}" alt="Current Image" width="100">
                                        @endif
                                    </div>

                                    <!-- Single Image -->
                                    <div class="mb-3">
                                        <label for="single_image" class="form-label">Single Image</label>
                                        <input id="single_image" type="file" name="single_image" accept="image/*">
                                        @if($category->back)
                                            <img src="{{ url('public/services/' . $category->back) }}" alt="Current Image" width="100">
                                        @endif
                                    </div>

                                    <!-- Icon Image -->
                                    <div class="mb-3">
                                        <label for="icon_image" class="form-label">Icon Image</label>
                                        <input id="icon_image" type="file" name="icon_image" accept="image/*">
                                        @if($category->icon)
                                            <img src="{{ url('public/services/' . $category->icon) }}" alt="Current Image" width="100">
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div><!--end row-->
                    </div>

                    <div class="form-actions right p-3">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-check-square-o"></i> Update
                        </button>
                        <button type="reset" class="btn btn-warning mr-1">
                            <i class="feather icon-x"></i> Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
    function addExperience(language) {
        var container = document.getElementById('experiences-' + language);
        var input = document.createElement('input');
        input.type = 'text';
        input.className = 'form-control mb-2';
        input.name = 'exp_' + language + '[]';
        container.appendChild(input);
    }
</script>
@endsection


