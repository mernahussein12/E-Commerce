@extends('backend.inc.master')
@section('title' , ' All Approach ')
@section('content')

<!-- Zero configuration table -->
<section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All Approach</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body card-dashboard">
                         <div class="mb-2">
                            <a href="{{ route('Approach.create') }}" class="btn btn-primary">Add Blog Category </a>
                        </div>
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                <th>Arabic Title</th>

                               <!--<th>Arabic Body</th>-->
                               <!--<th>English Body</th>-->
                                <th>Image</th>
                                <th>Operations</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($approachs as $key => $approach)
                                    <tr>

                                           <td>{!! $approach->title_ar !!}</td>
                                           <td>{!! $approach->body_ar !!}</td>
                                           <td><img src="{{ url('public/approachs/' . $approach->image) }}" width="50" height="50" alt=""></td>

                                        <td>
                                               <a href="{{ route('Approach.edit', $approach->id) }}" class="btn btn-sm btn-warning"><i class="feather icon-edit"></i></a>
                                               <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#danger{{  $approach->id }}"> <i class="icon-trash"></i> </button>
                                           </td>
                                    </tr>

                                <!-- Modal -->
                                       <div class="modal fade text-left" id="danger{{  $approach->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
                                           <form action="{{ route('Approach.destroy', $approach->id) }}" method="POST">
                                               @csrf
                                               @method('delete')
                                               <div class="modal-dialog" role="document">
                                                   <div class="modal-content">
                                                       <div class="modal-header bg-danger white">
                                                           <h4 class="modal-title" id="myModalLabel10">Confirm delete!</h4>
                                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                               <span aria-hidden="true">&times;</span>
                                                           </button>
                                                       </div>
                                                       <div class="modal-body">
                                                           <h5>
                                                              Are you sure to delete : this ?
                                                           </h5>
                                                       </div>
                                                       <div class="modal-footer">
                                                           <button type="submit" class="btn btn-outline-danger">Delete</button>
                                                           <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                       </div>
                                                   </div>
                                               </div>
                                           </form>
                                       </div>
                                   </tbody>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Zero configuration table -->





@endsection
