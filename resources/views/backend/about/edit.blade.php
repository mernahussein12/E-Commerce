@extends('backend.inc.master')
@section('title' , 'Edit About')
@section('content')

 <section id="form-control-repeater">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="file-repeater">Edit About </h4>
                                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>

                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                                  @if ($errors->any())
                                                        <div class="alert alert-danger">
                                                          <ul>
                                                              @foreach ($errors->all() as $error)
                                                                  <li>{{ $error }}</li>
                                                              @endforeach
                                                          </ul>
                                                        </div>
                                                       @endif
                                        <form class="form row" action="{{ route('About.update', $about->id) }}" method="post" enctype="multipart/form-data">
                                             @csrf
                                              @method('PUT')
                                            <div class="form-group col-md-12 mb-2">
                                            <label for="inputProductTitle" class="form-label">Title Arabic </label>
                                           <input type="text" class="form-control" placeholder="about title" name="title_ar" value="{{ $about->title_ar }}">
                                            </div>


                                            <div class="form-group col-12 mb-2">
                                            <label for="body_ar" class="form-label">Arabic Body</label>
                                            <textarea class="form-control" name="body_ar" id="body_ar" rows="5">{{ $about->body_ar }}</textarea>
                                        </div>


                                            <!--<div class="form-group col-12 mb-2 file-repeater">-->
                                            <!--    <div data-repeater-list="repeater-list">-->
                                            <!--        <div data-repeater-item>-->
                                            <!--            <div class="row mb-1">-->
                                            <!--                <div class="col-9 col-xl-10">-->
                                            <!--                    <label class="file center-block">-->
                                            <!--                        <input type="file" id="file" name="image" value="{{$about->image}}">-->
                                            <!--                          <img src="{{ url('public/abouts/' . $about->image) }}" width="50" height="50" alt="">-->
                                            <!--                        <span class="file-custom"></span>-->
                                            <!--                    </label>-->
                                            <!--                </div>-->
                                            <!--                <div class="col-2 col-xl-1">-->
                                            <!--                    <button type="button" data-repeater-delete class="btn btn-icon btn-danger mr-1"><i class="feather icon-x"></i></button>-->
                                            <!--                </div>-->
                                            <!--            </div>-->
                                            <!--        </div>-->
                                            <!--    </div>-->

                                            <!--    <button type="button" data-repeater-create class="btn btn-primary">-->
                                            <!--        <i class="icon-plus4"></i> Add new file-->
                                            <!--    </button>-->
                                            <!--</div>-->


                                             <div class="container mt-5">
                                                    <h2>Upload Image</h2>
                                                    <input type="file" id="fileUploader" name="image" class="form-control" value="{{$about->image}}">
                                                     <img src="{{ url('public/abouts/' . $about->image) }}" width="50" height="50" alt="">
                                                </div>

                                              <div class="form-actions right p-3">
                                            <button type="submit" class="btn btn-primary ">
                                                <i class="fa fa-check-square-o"></i> Save
                                            </button>

                                            <button type="reset" class="btn btn-warning mr-1">
                                                <i class="feather icon-x"></i> cancel
                                            </button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </section>





@endsection
