@extends('backend.partials.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-12">
                            <div class="card-body">
                                <h5 class="card-title text-primary" style="text-transform: uppercase">Category List</h5>
                                <div class="table-responsive text-nowrap">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Photo</th>
                                                <th>Product Name</th>
                                                <th>Category Name</th>
                                                <th>SubCategory Name</th>
                                                <th>Priority</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            @foreach ($data['blog_list'] as $key => $single_blog)
                                                <tr>
                                                    <td> {{ $key + 1 }} </td>
                                                    <td> <img style="height: 60px;width:60px"
                                                            src="{{ asset($single_blog->photo) }}" alt=""> </td>
                                                    <td>{{ $single_blog->title }}</td>
                                                    <td>{{ $single_blog->priority }}</td>
                                                    <td>{{ date('d M y',strtotime($single_blog->created_at)) }}</td>
                                                    <td>{{ Str::limit($single_blog->description,15) }}</td>


                                                    <td>

                                                        <a href="{{ route('admin.blog.edit',$single_blog->id) }}" class="btn btn-primary text-white">
                                                            <i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                        <a class="btn btn-primary text-white" id="delete"
                                                            data-id="{{ $single_blog->id }}"><i
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
                url: '/admin/blog/delete/' + id,
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
