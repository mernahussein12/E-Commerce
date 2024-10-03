@extends('backend.inc.master')
@section('title' , 'Edit Approach  ')
@section('content')


 <section id="form-control-repeater">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="file-repeater">Edit Approach </h4>
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
                                        <form class="form row" action="{{ route('Approach.update', $approach->id) }}" method="post" enctype="multipart/form-data">
                                             @csrf
                                              @method('PUT')
                                            <div class="form-group col-md-6 mb-2">
                                            <label for="inputProductTitle" class="form-label">Title Arabic </label>
                                           <input type="text" class="form-control" placeholder="about title" name="title_ar" value="{{ $approach->title_ar }}">
                                            </div>


                                            <div class="form-group col-12 mb-2">
                                            <label for="body_ar" class="form-label">Arabic Body</label>
                                            <textarea class="form-control" name="body_ar" id="body_ar" rows="5">{{ $approach->body_ar }}</textarea>
                                        </div>
                                       

                                             <div class="container mt-5">
                                                    <h2>Upload Image</h2>
                                                    <input type="file" id="fileUploader" name="image" class="form-control" value="{{$approach->image}}">
                                                     <img src="{{ url('public/approachs/' . $approach->image) }}" width="50" height="50" alt="">
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

