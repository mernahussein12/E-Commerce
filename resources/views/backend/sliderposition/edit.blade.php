

@extends('backend.inc.master')
@section('title' , ' Edit Slider category ')
@section('content')

<div class="content-overlay"></div>
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title mb-0"> Add Slider category </h3>
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
                                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
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

                                        <form class="form row"action="{{ route('SliderPosition.update', $category->id) }}"  method="post" enctype="multipart/form-data">
                                                @csrf
                                                  @method('put')
                                            
                                            <div class="form-group col-md-6 mb-2">
                                                <label for="donationinput1"> Arabic Name</label>
                                                <input type="text" class="form-control" placeholder="Arabic Name"  value="{{$category->name_ar}}" name="name_ar">
                                            </div>
                                            <div class="form-group col-md-6 mb-2">
                                                <label for="donationinput1"> English Name</label>
                                                <input type="text" class="form-control" placeholder="English Name"  value="{{$category->name_en}}" name="name_en">
                                            </div>
                                            
                                         <div class="form-group col-md-12 mb-2">
                                             <label for="image" class="form-label">Image</label>
                                             <input type="file" id="image"  value="{{$category->image}}" class="form-control" name="image">
                                           <img src="{{ url('public/images/' . $category->image) }}" width="50" height="50" alt="">
                                             </div>
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