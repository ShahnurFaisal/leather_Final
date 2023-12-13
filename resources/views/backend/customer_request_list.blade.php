@extends('backend.partials.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-12">
                            <div class="card-body">
                                <h5 class="card-title text-primary" style="text-transform: uppercase">Customer Request List</h5>
                                <div class="table-responsive text-nowrap">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Message</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            @foreach ($data['custo_request_list'] as $key => $single_request)
                                                <tr>
                                                    <td> {{ $key + 1 }} </td>

                                                    <td>{{ $single_request->name }}</td>
                                                    <td>{{ $single_request->email }}</td>
                                                    <td>{{ $single_request->phone }}</td>
                                                    <td>{{ $single_request->message }}</td>


                                                    <td>
                                                        <a class="btn btn-primary text-white" id="delete"
                                                            data-id="{{ $single_request->id }}"><i
                                                                class="bx bx-trash me-1"></i> Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
@push('js')
<script>
    $(document).on('click', '#delete', function() {
        if (confirm('Are You Sure ?')) {
            let id = $(this).data('id');
            let row = $(this).closest('tr');
            $.ajax({
                url: '/admin/customer/request/delete/' + id,
                success: function(data) {
                    var data_object = JSON.parse(data);
                    if (data_object.status == 'SUCCESS') {
                        row.remove();
                        $('#data_table tbody tr').each(function(index){
                            $(this).find('td:first').text(index + 1);
                        });

                        $('#success').html(data_object.message);
                        setTimeout(() => {
                           $('#success').fadeOut('slow')
                        }, 3000);

                    } else {
                        $('#failed').html(data_object.message);
                        setTimeout(() => {
                           $('#failed').fadeOut('slow')
                        }, 3000);
                    }
                }
            });
        }
    });
</script>

@endpush
