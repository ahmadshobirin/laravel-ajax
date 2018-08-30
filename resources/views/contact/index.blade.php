@extends('layout.app')

{{-- @section('treeview_master','active')
@section('treeview_user','active')
@section('treeview_user_list','active') --}}

@section('title', 'Kontak')
@section('contentheader_title', 'Kontak')

@section('customcss')
    <link rel="stylesheet" href="{{URL::asset('css/datatables.min.css')}}">
    <link href="{{ asset('plugins/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
@stop

@section('main-content')
    <div class="box box-primary">
        <div class="box-body">
            <div class="">
                <a onclick="addForm()" class="btn btn-success btn-md"><i class="fa fa-plus"></i> Tambah Data</a>
            </div>
            <br>
            <table id="contact-table" class="table table-striped table-hover table-responsive">
                <thead>
                    <tr>
                        <th width="30">No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        {{-- <th>Alamat</th> --}}
                        {{-- <th>Telepone</th> --}}
                        <th>Photo</th>
                        <th>Bergabung</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        {{-- modal --}}
        @include('form')
    </div>
@endsection

@section('customscript')
    <script type="text/javascript" src="{{URL::asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('plugins/validator/validator.min.js') }}"></script>

    <script type="text/javascript">
        //core-table
        var table =
        $('#contact-table').DataTable({

           'paging': true,
		   'lengthChange': true,
		   'searching': true,
		   'ordering': true,
		   'info': true,
		   'autoWidth': false,
            'pageLength': 25,

		   "language": {
		       "emptyTable": "Data Kosong",
		       "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
		       "infoEmpty": "Menampilkan 0 sampai 0 dari 0 data",
		       "infoFiltered": "(disaring dari _MAX_ total data)",
		       "search": "Cari:",
		       "lengthMenu": "Tampilkan _MENU_ Data",
		       "zeroRecords": "Tidak Ada Data yang Ditampilkan",
		       "oPaginate": {
		           "sFirst": "Awal",
		           "sLast": "Akhir",
		           "sNext": "Selanjutnya",
		           "sPrevious": "Sebelumnya"
		       },
		   },
		    'aoColumnDefs': [{
		    'bSortable': false,
		    'aTargets': ['nosort']
		  }],

            processing: true,
            serverSide: true,

            ajax: "{{ route('api.contact') }}",
            columns: [
                {data: 'DT_Row_Index', name: 'DT_Row_Index'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'show_photo', name: 'show_photo'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });

        //function
        function addForm() {
            save_method = "add";
            $('input[name=_method]').val('POST');
            $('#modal-form').modal('show');
            $('#modal-form form')[0].reset();
            $('.modal-title').text('Tambah Data');
        }

        function editForm(id) {
            save_method = 'edit';
            $('input[name=_method]').val('PATCH');
            $('#modal-form form')[0].reset();
            $.ajax({
            url: "{{ url('contact') }}" + '/' + id + "/edit",
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('#modal-form').modal('show');
                $('.modal-title').text("Edit Data "+ data.name +" ");

                $('#id').val(data.id);
                $('#name').val(data.name);
                $('#email').val(data.email);
            },
            error : function() {
                alert("Nothing Data");
            }
            });
        }


        function deleteData(id){
          var csrf_token = $('meta[name="csrf-token"]').attr('content');
          swal({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              type: 'warning',
              showCancelButton: true,
              cancelButtonColor: '#d33',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Yes, delete it!'
          }).then(function () {
              $.ajax({
                  url : "{{ url('contact') }}" + '/' + id,
                  type : "POST",
                  data : {'_method' : 'DELETE', '_token' : csrf_token},
                  success : function(data) {
                      table.ajax.reload();
                      swal({
                          title: 'Success!',
                          text: data.message,
                          type: 'success',
                          timer: '1500'
                      })
                  },
                  error : function () {
                      swal({
                          title: 'Oops...',
                          text: data.message,
                          type: 'error',
                          timer: '1500'
                      })
                  }
              });
          });
        }

        $(function(){
            $('#modal-form form').validator().on('submit', function (e) {
                if (!e.isDefaultPrevented()){
                    var id = $('#id').val();
                    if (save_method == 'add') url = "{{ url('contact') }}";
                    else url = "{{ url('contact') . '/' }}" + id;

                    $.ajax({
                        url : url,
                        type : "POST",
                        data: new FormData($("#modal-form form")[0]),
                        contentType: false,
                        processData: false,
                        success : function(data) {
                            $('#modal-form').modal('hide');
                            table.ajax.reload();
                            swal({
                                title: 'Success!',
                                text: data.message,
                                type: 'success',
                                timer: '1500'
                            })
                        },
                        error : function(data){
                            swal({
                                title: 'Oops...',
                                text: data.message,
                                type: 'error',
                                timer: '1500'
                            })
                        }
                    });
                    return false;
                }
            });
        });

        //without-enctype
            //data : $('#modal-form form').serialize(),
        //with-enctype
            // data: new FormData($("#modal-form form")[0]),
    </script>
    <script type="text/javascript">

    </script>
@endsection