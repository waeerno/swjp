@extends('back.app')

@section('content')
<!-- Basic table -->
<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <table class="datatables-basic table">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>id</th>
                            <th>NO</th>
                            <th>Kode Wilayah</th>
                            <th>Nama Wilayah</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal to add new record -->
    <div class="modal modal-slide-in fade" id="modals-slide-in">
        <div class="modal-dialog sidebar-sm">
            <form class="add-new-record modal-content pt-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                <div class="modal-header mb-1">
                    <h5 class="modal-title" id="exampleModalLabel">New Record</h5>
                </div>
                <div class="modal-body flex-grow-1">
                    <div class="form-group">
                        <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                        <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="John Doe" aria-label="John Doe" />
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="basic-icon-default-post">Post</label>
                        <input type="text" id="basic-icon-default-post" class="form-control dt-post" placeholder="Web Developer" aria-label="Web Developer" />
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="basic-icon-default-email">Email</label>
                        <input type="text" id="basic-icon-default-email" class="form-control dt-email" placeholder="john.doe@example.com" aria-label="john.doe@example.com" />
                        <small class="form-text text-muted"> You can use letters, numbers & periods </small>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="basic-icon-default-date">Joining Date</label>
                        <input type="text" class="form-control dt-date" id="basic-icon-default-date" placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY" />
                    </div>
                    <div class="form-group mb-4">
                        <label class="form-label" for="basic-icon-default-salary">Salary</label>
                        <input type="text" id="basic-icon-default-salary" class="form-control dt-salary" placeholder="$12000" aria-label="$12000" />
                    </div>
                    <button type="button" class="btn btn-primary data-submit mr-1">Submit</button>
                    <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!--/ Basic table -->
@endsection

@push('script')
{{-- <script src="{{ asset('data/table-datatables-basic.js') }}"></script> --}}

<script type="text/javascript">
    /**
     * DataTables Basic
     */

    $(function() {
        'use strict';

        var dt_basic_table = $('.datatables-basic')
            , dt_date_table = $('.dt-date'),
            // assetPath = "{{ asset('app-assets/') }}";
            // assetPath = '../../../app-assets/';
            assetPath = 'app-assets/';

        if ($('body').attr('data-framework') === 'laravel') {
            assetPath = $('body').attr('data-asset-path');
        }

        // DataTable with buttons
        // --------------------------------------------------------------------

        if (dt_basic_table.length) {
            var dt_basic = dt_basic_table.DataTable({
                ajax: assetPath + 'data/table-datatable.json'
                , columns: [{
                        data: 'responsive_id'
                    }
                    , {
                        data: 'id'
                    }
                    , {
                        data: 'id'
                    }, // used for sorting so will hide this column
                    {
                        data: 'DT_RowIndex'
                        , name: 'DT_RowIndex'
                    }
                    , {
                        data: 'salary'
                    }
                    , {
                        data: 'full_name'
                    }
                    , {
                        data: ''
                    }
                ]
                , columnDefs: [{
                        // For Responsive
                        className: 'control'
                        , orderable: false
                        , responsivePriority: 2
                        , targets: 0
                    }
                    , {
                        // For Checkboxes
                        targets: 1
                        , orderable: false
                        , responsivePriority: 3
                        , render: function(data, type, full, meta) {
                            return (
                                '<div class="custom-control custom-checkbox"> <input class="custom-control-input dt-checkboxes" type="checkbox" value="" id="checkbox' +
                                data +
                                '" /><label class="custom-control-label" for="checkbox' +
                                data +
                                '"></label></div>'
                            );
                        }
                        , checkboxes: {
                            selectAllRender: '<div class="custom-control custom-checkbox"> <input class="custom-control-input" type="checkbox" value="" id="checkboxSelectAll" /><label class="custom-control-label" for="checkboxSelectAll"></label></div>'
                        }
                    }
                    , {
                        targets: 2
                        , visible: false
                    }
                    , {
                        // Avatar image/badge, Name and post
                        targets: 3
                        , responsivePriority: 4
                        , render: function(data, type, full, meta) {
                            var $kode = 1;

                            return $kode;
                        }
                    }
                    , {
                        responsivePriority: 1
                        , targets: 4
                    }

                    , {
                        // Actions
                        targets: -1
                        , title: 'Actions'
                        , orderable: false
                        , render: function(data, type, full, meta) {
                            return (
                                '<div class="d-inline-flex">' +
                                '<a class="pr-1 dropdown-toggle hide-arrow text-primary" data-toggle="dropdown">' +
                                feather.icons['more-vertical'].toSvg({
                                    class: 'font-small-4'
                                }) +
                                '</a>' +
                                '<div class="dropdown-menu dropdown-menu-right">' +
                                '<a href="javascript:;" class="dropdown-item">' +
                                feather.icons['file-text'].toSvg({
                                    class: 'font-small-4 mr-50'
                                }) +
                                'Details</a>' +
                                '<a href="javascript:;" class="dropdown-item">' +
                                feather.icons['archive'].toSvg({
                                    class: 'font-small-4 mr-50'
                                }) +
                                'Archive</a>' +
                                '<a href="javascript:;" class="dropdown-item delete-record">' +
                                feather.icons['trash-2'].toSvg({
                                    class: 'font-small-4 mr-50'
                                }) +
                                'Delete</a>' +
                                '</div>' +
                                '</div>' +
                                '<a href="uin-suska.ac.id;" class="item-edit">' +
                                feather.icons['edit'].toSvg({
                                    class: 'font-small-4'
                                }) +
                                '</a>'
                            );
                        }
                    }
                ]
                , order: [
                    [2, 'desc']
                ]
                , dom: '<"card-header border-bottom p-1"<"head-label"><"dt-action-buttons text-right"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>'
                , displayLength: 7
                , lengthMenu: [7, 10, 25, 50, 75, 100]
                , buttons: [{
                    text: feather.icons['plus'].toSvg({
                        class: 'mr-50 font-small-4'
                    }) + 'Add New Record'
                    , className: 'create-new btn btn-primary'
                    , attr: {
                        'data-toggle': 'modal'
                        , 'data-target': '#modals-slide-in'
                    }
                    , init: function(api, node, config) {
                        $(node).removeClass('btn-secondary');
                    }
                }]
                , responsive: {
                    details: {
                        display: $.fn.dataTable.Responsive.display.modal({
                            header: function(row) {
                                var data = row.data();
                                return 'Details of ' + data['full_name'];
                            }
                        })
                        , type: 'column'
                        , renderer: function(api, rowIdx, columns) {
                            var data = $.map(columns, function(col, i) {
                                console.log(columns);
                                return col.title !== '' // ? Do not show row in modal popup if title is blank (for check box)
                                    ?
                                    '<tr data-dt-row="' +
                                    col.rowIndex +
                                    '" data-dt-column="' +
                                    col.columnIndex +
                                    '">' +
                                    '<td>' +
                                    col.title +
                                    ':' +
                                    '</td> ' +
                                    '<td>' +
                                    col.data +
                                    '</td>' +
                                    '</tr>' :
                                    '';
                            }).join('');

                            return data ? $('<table class="table"/>').append(data) : false;
                        }
                    }
                }
                , language: {
                    paginate: {
                        // remove previous & next text from pagination
                        previous: '&nbsp;'
                        , next: '&nbsp;'
                    }
                }
            });
            $('div.head-label').html('<h6 class="mb-0">Data Wilayah</h6>');
        }

        // Add New record
        // ? Remove/Update this code as per your requirements ?
        var count = 101;
        $('.data-submit').on('click', function() {
            var $new_name = $('.add-new-record .dt-full-name').val()
                , $new_post = $('.add-new-record .dt-post').val()
                , $new_email = $('.add-new-record .dt-email').val()
                , $new_date = $('.add-new-record .dt-date').val()
                , $new_salary = $('.add-new-record .dt-salary').val();

            if ($new_name != '') {
                dt_basic.row
                    .add({
                        responsive_id: null
                        , id: count
                        , full_name: $new_name
                        , post: $new_post
                        , email: $new_email
                        , start_date: $new_date
                        , salary: '$' + $new_salary
                        , status: 5
                    })
                    .draw();
                count++;
                $('.modal').modal('hide');
            }
        });

        // Delete Record
        $('.datatables-basic tbody').on('click', '.delete-record', function() {
            dt_basic.row($(this).parents('tr')).remove().draw();
        });

    });

</script>

@endpush
