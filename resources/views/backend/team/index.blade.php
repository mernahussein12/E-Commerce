@extends('backend.inc.master')
@section('title' , ' All Team ')
@section('content')

<div class="page-wrapper">
    <div class="page-content">

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Dashboard</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"> All Team </li>
                    </ol>
                </nav>
            </div>

        </div>


        <a class="btn btn-outline-primary btn-lg" href="{{ route('Team.create') }}">
            Add Team
         </a>
         <hr/>

         <h6 class="mb-0 text-uppercase"> All Data </h6>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                 <th>Name_ar</th>
                                {{-- <th>Summary_ar</th> --}}
                                {{-- <th>Exp_ar</th_> --}}
                                <th>job_ar</th_>
                                <th>Education_ar</th>
                                <th>Spec_ar</th>
                                <th>Skill_ar</th>
                                <th>Email</th>
                                <th>Address_ar</th>
                                <th>Phone</th>
                                <th>Image</th>
                                <th>Operations</th>

                            </tr>
                        </thead>
                        <tbody>
                        <tfoot>
                            <tr>
                                @foreach ($teams as $key => $team)


                               <td>{!! $team->name_ar !!}</td>

                                {{-- <td>{!! $team->summary_ar !!}</td>

                                <td>{!! $team->exp_ar !!}</td> --}}
                                <td>{!! $team->job_ar !!}</td>
                                <td>{!! $team->education_ar !!}</td>
                                <td>{!! $team->spec_ar !!}</td>
                                <td>{!! $team->skills_ar !!}</td>
                                <td>{!! $team->email !!}</td>
                                <td>{!! $team->address_ar !!}</td>
                                <td>{!! $team->phone !!}</td>

                                <td><img src="{{url('public/teams/' . $team->image) }}" width="50" height="50" alt=""></td>
                                <td>
                                        <a  href="{{ route('Team.edit', $team->id) }}"  class="btn btn-sm btn-warning"><i class="feather icon-edit"></i></a>
                                        <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#danger{{  $team->id }}"> <i class="icon-trash"></i> </button>
                                    </td>
                            </tr>
                                 <div class="modal fade text-left" id="danger{{$team->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
                                    <form action="{{ route('Team.destroy', $team->id) }}" method="POST">
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
                    </table>

                </div>
            </div>
        </div>

    </div>
</div>


@endsection

