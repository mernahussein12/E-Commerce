@extends('backend.inc.master')
@section('title' , 'Service category')
@section('content')


<div class="content-overlay"></div>
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title mb-0"> Add Services </h3>
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

                                <form class="form row" action="{{ route('ServiceCategory.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group col-md-12 mb-2">
                                        <label for="donationinput1">Arabic Category Name</label>
                                        <input type="text" class="form-control" placeholder="Arabic Name" name="name_ar">
                                    </div>





                                    <div class="form-group col-12 mb-2">
                                        <label for="body_ar">Arabic Exp Body</label>
                                        <textarea rows="5" class="form-control" name="text_ar" id="body_ar"></textarea>
                                    </div>


                                    <div class="form-group col-12 mb-2">
                                        <label for="inputProductDescription" class="form-label">Arabic Exp</label>
                                        <div id="exp_ar_fields">
                                            <input type="text" class="form-control" name="exp_ar[]" placeholder="Enter experience">
                                        </div>
                                        <button type="button" id="add_exp_ar" class="btn btn-primary mt-2">Add Another</button>
                                    </div>



                                    <div class="form-group col-12 mb-2">
                                        <label for="body_ar">Arabic Body</label>
                                        <textarea rows="5" class="form-control" name="body_ar" id="body_ar"></textarea>
                                    </div>



                                    <div class="form-group col-md-12 mb-2">
                                         <label for="image" class="form-label">front Image</label>
                                          <input type="file" id="image" class="form-control" name="image">
                                           </div>

                                        <div class="form-group col-md-12 mb-2">
                                         <label for="image" class="form-label">Single Image</label>
                                          <input type="file" id="image" class="form-control" name="single_image">
                                           </div>


                                        <div class="form-group col-md-12 mb-2">
                                         <label for="image" class="form-label">Icon Image</label>
                                          <input type="file" id="image" class="form-control" name="icon_image">
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

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById('add_exp_ar').addEventListener('click', function() {
            let input = document.createElement('input');
            input.type = 'text';
            input.name = 'exp_ar[]';
            input.className = 'form-control mt-2';
            input.placeholder = 'Enter experience';
            document.getElementById('exp_ar_fields').appendChild(input);
        });

        document.getElementById('add_exp_en').addEventListener('click', function() {
            let input = document.createElement('input');
            input.type = 'text';
            input.name = 'exp_en[]';
            input.className = 'form-control mt-2';
            input.placeholder = 'Enter experience';
            document.getElementById('exp_en_fields').appendChild(input);
        });
    });
</script>




