@extends('backend.inc.master')
@section('title', 'Edit Slider')
@section('content')

<div class="content-overlay"></div>
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title mb-0">Edit Slider</h3>
        </div>
    </div>
    <div class="content-body">
        <!-- Basic form layout section start -->
        <section id="form-control-repeater">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="feather icon-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="feather icon-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <form class="form row" action="{{ route('new_slider.update', $slider->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group col-md-12 mb-2">
                                                <label for="donationinput1">Arabic Sale Slider</label>
                                                <input type="text" class="form-control" placeholder="Arabic Name" value="{{$slider->saletitle_ar }}"  name="sale_ar">
                                            </div>

                                    <div class="form-group col-12 mb-2">
                                                <label for="body_ar" class="form-label">Arabic Titel Body</label>
                                                <textarea class="form-control" id="exp_ar" name="title_ar" rows="5">{!!$slider->pagetitle_ar !!}</textarea>
                                            </div>

                                    <div class="form-group col-12 mb-2">
                                                <label for="body_ar" class="form-label">Arabic text Body</label>
                                                <textarea class="form-control" id="body_ar" name="text_ar" rows="5">{!!$slider->text_ar !!}</textarea>
                                            </div>

                                    <div class="form-group col-md-12 mb-2">
                                        <label for="image" class="form-label">Slider Image</label>
                                        <input type="file" id="image" class="form-control" name="image">
                                        <img src="{{ url('public/images/new_slider/' . $slider->image) }}" width="100" height="100" alt="Slider Image">
                                    </div>

                                     <div class="form-group col-md-12 mb-2">
                                             <label for="image2" class="form-label">Image2</label>
                                             <input type="file" id="image2"  value="{{$slider->image2}}" class="form-control" name="image2">
                                           <img src="{{url('public/images/new_slider/' .  $slider->image2) }}" width="50" height="50" alt="">
                                             </div>

                                    <div class="form-group col-12 mb-2">
                                        <label for="status" class="form-label">Status</label>
                                        <input type="checkbox" class="form-control" value="1" name="status" {{ $slider->status ? 'checked' : '' }}>
                                    </div>

                                    <div class="form-actions center">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-check-square-o"></i> Save
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
            </div>
        </section>
    </div>
</div>
@endsection
