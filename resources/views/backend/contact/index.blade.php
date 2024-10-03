@extends('backend.inc.master')
@section('title', 'All contacts')
@section('content')

 <!-- Scroll - horizontal table -->
 <section id="horizontal">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Scroll - horizontal</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
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
                    <div class="card-body card-dashboard">
                        <div class="mb-2">
                            <a href="{{ route('Contact.create') }}" class="btn btn-primary">Add New Contact </a>
                        </div>                        
                        <table class="table display nowrap table-striped table-bordered scroll-horizontal">
                            <thead>
                                <tr>
                                <th>Title</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Location</th>
                                <th>Facebook</th>
                                <th>Instegram</th>
                                <th>Twitter</th>
                                <th>youtube</th>
                                <th>Operations</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $key => $contact)
                                <tr>
                                   
                                    <td>{!! $contact->title !!}</td>
                                    <td>{!! $contact->email !!}</td>
                                    <td>{!! $contact->phone !!}</td>
                                    <td>{!! $contact->address !!}</td>
                                    <td>{!! $contact->location !!}</td>
                                    <td>{!! $contact->facebook !!}</td>
                                    <td>{!! $contact->instagram	 !!}</td>
                                    <td>{!! $contact->twitter !!}</td>
                                    <td>{!! $contact->youtube !!}</td>
                                    <td>
                                        <a  href="{{ route('Contact.edit', $contact->id) }}" class="btn btn-sm btn-warning"><i class="feather icon-edit"></i></a>
                                        <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#danger{{  $contact->id }}"> <i class="icon-trash"></i> </button>
                                    </td>
                                </tr>
                                 <!-- Modal -->
                                 <div class="modal fade text-left" id="danger{{ $contact->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
                                    <form action="{{ route('Contact.destroy', $contact->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header bg-danger white">
                                                    <h4 class="modal-title" id="myModalLabel10">Confirm</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5>Are you sure to delete this?</h5>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Scroll - horizontal table -->
@endsection
