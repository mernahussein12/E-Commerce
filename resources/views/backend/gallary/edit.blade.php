@extends('backend.inc.master')
@section('title' , 'Edit Gallary  ')
@section('content')



 <section id="form-control-repeater">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="file-repeater">Edit Gallary</h4>
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
                                        <form class="form row" action="{{ route('Gallary.update', $gallary->id) }}" method="post" enctype="multipart/form-data">
                                             @csrf
                                            @method('PUT')
                                            <div class="form-group col-md-6 mb-2">
                                            <label for="inputProductTitle" class="form-label"> Arabic Name</label>
                                           <input type="text" class="form-control" placeholder="gallary name" value="{{ $gallary->title_ar }}" name="title_ar">
                                            </div>
                                            <div class="form-group col-md-6 mb-2">
                                                <label for="inputProductTitle" class="form-label"> Arabic Name</label>
                                                <input type="text" class="form-control" placeholder="gallary name" value="{{ $gallary->title_en }}" name="title_en">
                                            </div>
                                            
                                           
                                               <div class="form-group mb-1 col-sm-12 col-md-12">
                                                            <label for="profession">Gallary Category</label>
                                                            <br>
                                                            <select class="form-control" name="category_id" id="profession">
                                                              <option value=""></option>
                                                                @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}" {{ $category->id == $gallary->category_id ? 'selected' : '' }}>
                                                                    {{ $category->name_ar }}
                                                                </option>
                                                            @endforeach
                                                                  </select>
                                                                </div>
    
                                           <div class="form-group col-md-12 mb-2">
                                             <label for="image" class="form-label"> Image</label>
                                             <input type="file" id="image"  value="{{$gallary->image}}" class="form-control" name="image">
                                           <img src="{{ url('public/gallaries/' . $gallary->image) }}" width="50" height="50" alt="">
                                             </div>
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

