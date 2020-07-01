@extends('admin.wrapper.layouts')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1>All products</h1>
                </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Product</li>
                </ol>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="card card-default mr-3 mb-3 ml-3 pb-3">
            <div class="card-tools">
                <button type="button" class="btn btn-tool float-right mt-2 mr-2" data-card-widget="remove"><i class="fas fa-times"></i></button>
                <button type="button" class="btn btn-tool float-right mt-2" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
            <div class="card-body" style="display: block;">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                @foreach($products->first()->toArray() as $key => $value)
                                    <th>{{ Str::upper($key)}}</th>
                                @endforeach
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                @foreach($product->toArray() as $key => $tableColum)
                                <td class="text-center">
                                    {!!  
                                    $key == 'status' ? $tableColum == 0 ? '<span class="btn-submit" data-status="'.$product->id.'"><i class="fa fa-times text-danger"></i></span>' : '<span class="btn-submit" data-status="'.$product->id.'"><i class="fa fa-check text-success"></i></span>' : $tableColum 
                                !!}
                                </td>
                                @endforeach
                                <td>
                                    <div class="btn-group">
                                    <a href="{{ route('admin.product.show', $product->id) }}" class="btn btn-md text-info" title="Delete">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-md text-primary" title="Edit">
                                            <i class="fas fa-edit"></i> 
                                        </a>
                                        <a href="{{ route('admin.product.delete', $product->id) }}" class="btn btn-md text-danger" title="Delete">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tfoot>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
            </div>
        </div>
    </div>
    
@endsection

@section('head.link')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endsection

@section('script')
    <script
    src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
    <script type="text/javascript">
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(".btn-submit").click(function(e){
            var el = (this);
            console.log(el);
            var id = el.getAttribute('data-status');
            $.ajax({
                type:'GET',
                url:"{{ route('admin.product.status') }}",
                data:{
                    id: id
                }
            }).then(function(data) {
                if(data.status == 1) {
                    el.childNodes[0].className = 'fa fa-check text-success';
                } else {
                    el.childNodes[0].className = 'fa fa-times text-danger'
                }
            });
        });
    </script>
    <!-- DataTables -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

@endsection