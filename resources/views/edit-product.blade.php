@section("title")
    Edit Product
@endsection
{{--@section("title","Abuot Us") có thể đổi dùng ntn --}}

@extends("layout")
@section("main")
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Product</li>
                    </ol>
                </div>
            </div>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Quick Example</h3>
                </div>
                <form role="form">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="id1">ID</label>
                            <input type="text" class="form-control" id="id1" placeholder="ID">
                        </div>
                        <div class="form-group">
                            <label for="name1">Name</label>
                            <input type="text" class="form-control" id="name1" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="price1">Price</label>
                            <input type="text" class="form-control" id="price1" placeholder="Price">
                        </div>
                        <div class="form-group">
                            <label for="unit1">Unit</label>
                            <input type="text" class="form-control" id="unit1" placeholder="Unit">
                        </div>
                        <div class="form-group">
                            <label for="name1">Name</label>
                            <input type="text" class="form-control" id="name1" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="description1">Description</label>
                            <textarea class="form-control" id="description1" placeholder="Description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image1">Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image1">
                                    <label class="custom-file-label" for="image1">Image</label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

