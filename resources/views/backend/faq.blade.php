@extends('backend.partials.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-12">

                            <div class="card-body">
                                <h5 class="card-title text-primary" style="text-transform: uppercase">Faqs</h5>
                                <div class="mb-3">
                                    @if (session('success'))
                                        <div class="alert slert-success timeout" style="color: green">
                                            {{ session('success') }}</div>
                                    @elseif (session('error'))
                                        <div class="alert slert-danger timeout">{{ session('error') }}</div>
                                    @endif
                                    <form method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-md-12">
                                            <div class="row">


                                                <div class=" mb-3 col-12">
                                                    <label class=" col-form-label" for="basic-default-name">Question
                                                        *</label>
                                                    <div class="">
                                                        <input type="text" style="width: 100%" class="form-control"
                                                            name="question" id="basic-default-name"
                                                            placeholder="Enter Question" required />

                                                    </div>
                                                </div>
                                                <div class=" mb-3 col-12">
                                                    <label class=" col-form-label" for="basic-default-name">Answer *</label>
                                                    <div class="">
                                                        <input type="text" style="width: 100%" class="form-control"
                                                            name="answer" id="basic-default-name"
                                                            placeholder="Enter Answer" required />
                                                    </div>
                                                </div>



                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-12 text-center">
                                                <button type="submit" class="btn btn-primary">Add</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="table-responsive ">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>SL</th>

                                                <th style="width: 350px">Question</th>
                                                <th style="width: 350px">Answer</th>


                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            @foreach ($data['faqs'] as $key => $single_faq)
                                                <tr>
                                                    <td> {{ $key + 1 }} </td>
                                                    <td>{{ $single_faq->question }}</td><br>
                                                    <td>{{ $single_faq->answer }}</td>

                                                    <td>

                                                        <a class="btn btn-primary text-white text-nowrap" id="delete"
                                                            data-id="{{ $single_faq->id }}"><i class="bx bx-trash me-1"></i>
                                                            Delete</a>
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
                    url: '/admin/faqs/delete/' + id,
                    success: function(data) {
                        var data_object = JSON.parse(data);
                        if (data_object.status == 'SUCCESS') {
                            row.remove();
                            $('#data_table tbody tr').each(function(index) {
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
    <script>
        setTimeout(() => {
            $('.timeout').fadeOut('slow')
        }, 3000);
    </script>
@endpush
