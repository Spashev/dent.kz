@extends('admin.wrapper.layouts')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1>Create product</h1>
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
                <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="col-md-6 mr-5">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product title</label>
                                <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
                            </div>
                            <div class="form-group">
                                <label>Product description</label>
                                <textarea class="form-control" name="description" rows="3" placeholder="Enter ..."></textarea>
                            </div>
                            <label>Price</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                                </div>
                                <input type="text" name="price" class="form-control">
                                <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="customFile">Custom File</label>
                                <div class="custom-file">
                                <input type="file" name="images[]" multiple class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Category</label>
                                <select name="category[]" class="form-control select2 select2-danger select2-hidden-accessible" multiple data-dropdown-css-class="select2-danger" style="width: 100%;" data-select2-id="12" tabindex="-1" aria-hidden="true">
                                    <option selected="selected" data-select2-id="14"> Select ... </option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Currency">Currency</label>
                                <select id="Currency" name="currency" class="form-control select2 select2-danger select2-hidden-accessible" data-dropdown-css-class="select2-danger" style="width: 100%;" data-select2-id="12" tabindex="-1" aria-hidden="true">
                                    <option selected="selected" data-select2-id="14"> Select ... </option>
                                    <option value="KZT"> KZT </option>
                                    <option value="USD"> USD </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Product count</label>
                                <input type="number" name="count" class="form-control" placeholder="1" step="1" min="0" max="1000">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label><br>
                                <input id="status" type="checkbox" name="status" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                                <button type="submit" class="btn btn-primary float-right">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /.row -->
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
    <script>
        $(function () {      
          $("input[data-bootstrap-switch]").each(function(){
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
          });
        })
    </script>
@endsection