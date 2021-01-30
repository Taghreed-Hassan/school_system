@extends('layouts.master')
@section('css')

@section('title')
{{ trans('main_trans.stage_list') }}
@stop
@toastr_css
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{ trans('main_trans.stage_list') }}</h4>
        </div>
    </div><br>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->

<div class="row">


  

    <div class="col-12">
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
        
           <h5> 
            <ol class="breadcrumb">
          <li>  <a href="{{ route('dashboard') }}">
            <i class="ti-home"></i>
              {{trans('main_trans.Dashboard')}} </a>
          </li>
          <li class="active"> 
              / {{ trans('main_trans.stage_list') }}
          </li>
            </ol>
           </h5>
          <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
          <div class="heading-elements">
            <ul class="list-inline mb-0">
              <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
              <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
              <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
              <li><a data-action="close"><i class="ft-x"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="card-content collapse show">
          <div class="card-body card-dashboard">
            <button type="button" class="button x-small" data-toggle="modal" data-target="#exampleModal">
                {{ trans('Grades_trans.add_Grade') }}
            </button>
            <br><br>
            <table class="table table-striped table-bordered dom-jQuery-events">
              <thead>
                <tr>
                    <th>#</th>
                    <th>{{trans('Grades_trans.Name')}}</th>
                    <th>{{trans('Grades_trans.Notes')}}</th>
                    <th>{{trans('Grades_trans.Processes')}}</th>
                </tr>
              </thead>
              <tbody>
               
                <?php $i = 0; ?>
                @foreach ($Grades as $Grade)
                    <tr>
                        <?php $i++; ?>
                        <td>{{ $i }}</td>
                        <td>{{ $Grade->name }}</td>
                        <td>{{ $Grade->notes }}</td>
                        <td>
                                   </td>
              
                    </tr>
                    @endforeach
              
              </tbody>
             
            </table>
          </div>
        </div>
      </div>
    </div>



     <!-- add_modal_Grade -->
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                    id="exampleModalLabel">
                    {{ trans('Grades_trans.add_Grade') }}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- add_form -->
                <form  action="{{ route('Grades.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label for="Name"
                                   class="mr-sm-2">{{ trans('Grades_trans.stage_name_ar') }}
                                :</label>
                            <input id="name" type="text" name="name" class="form-control">
                        </div>
                        <div class="col">
                            <label for="Name_en"
                                   class="mr-sm-2">{{ trans('Grades_trans.stage_name_en') }}
                                :</label>
                            <input type="text" class="form-control" name="name_en" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label
                            for="exampleFormControlTextarea1">{{ trans('Grades_trans.Notes_ar') }}
                            :</label>
                        <textarea class="form-control" name="Notes" id="exampleFormControlTextarea1"
                                  rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label
                            for="exampleFormControlTextarea1">{{ trans('Grades_trans.Notes_en') }}
                            :</label>
                        <textarea class="form-control" name="Notes_en" id="exampleFormControlTextarea1"
                                  rows="3"></textarea>
                    </div>
                    <br><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">{{ trans('Grades_trans.Close') }}</button>
                <button type="submit"
                        class="btn btn-success">{{ trans('Grades_trans.submit') }}</button>
            </div>
            </form>

        </div>
    </div>
     </div>
  </div>
<!-- row closed -->
@endsection
@section('js')

@toastr_js
@toastr_render
@endsection
