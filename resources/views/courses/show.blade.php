@extends('backpack::layout')

@section('header')
<section class="content-header">
    <h1>
        @lang_u('academico.coursedetails')
    </h1>
</section>
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-title">
                    @lang_u('academico.courses')
                </div>
                <div class="box-tools pull-right">
                    
                    
                </div>
                
            </div>
            
            <div class="box-body">           
                
                <table id="studentsTable" class="table table-striped responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th>{{ trans_choice('academico.students', 1) }}</th>
                            <th>{{ trans_choice('academico.age', 1) }}</th>
                            <th>{{ trans_choice('academico.birthdate', 1) }}</th>
                            <th>{{ trans_choice('academico.email', 1) }}</th>
                            <th>{{ trans_choice('academico.actions', 1) }}</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->student_name }}</td>
                            <td>{{ $student->student_age }}</td>
                            <td>{{ $student->student_birthdate }}</td>
                            <td>{{ $student->student_email }}</td>

                            <td><!-- available actions -->
                                <a href="/students/{{ $student->student_id }}" class='btn btn-secondary'>
                                    <i class='fa fa-briefcase'></i>
                                </a>
   
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection


{{-- todo refactor this --}}
@section('after_scripts')
 <!-- DATA TABLES -->
 <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
 <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet" type="text/css" />

 
 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
 
 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

  <script>
    $(document).ready( function () {
        $('#studentsTable').DataTable(
            {
                "scrollX": true,
                paging: false,
                responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.childRow,
                    type: 'inline'
                }
            },
            columnDefs: [

                { responsivePriority: 1, targets: 0 }
            ]
            }
        );
    } );
</script>
@endsection