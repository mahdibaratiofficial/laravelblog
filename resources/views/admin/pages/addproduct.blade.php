@extends('admin.layouts.master')
@section('title','Add Products')
@section('Content')
<div class="main-panel">
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <h2 class="title">add New Product</h2>
                    <form method="POST" action="/admin/product/insert">
                        @csrf
                        @method('post')
                        <div class="row row-space">
                            <div class="col-6">
                                <div class="input-group">
                                    <input class="input--style-4" type="text" name="product" placeholder="Product Name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <select name="types" class="form-control">
                                        <option value="type1" selected="selected">Choose Type</option>
                                        <option value="type2">Type:2</option>
                                        <option value="type3">Type:3</option>
                                        <option value="type4">Type:4</option>
                                        <option value="type5">Type:5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-6">
                                <div class="input-group">
                                    <input type="file" class="btn btn-info" name="pictures" />
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="input-group p-t-8">
                                    <label class="label">Gender</label>
                                    <div class="p-t-8">
                                        <label class="radio-container">Male
                                            <input type="radio" checked="checked" name="gender" value="male">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender" value="female">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row row-space">
                            <div class="col-3">
                                <div class="input-group">
                                    <select name="size" class="form-control">
                                        <option value="choose" selected="selected">Choose Size</option>
                                        <option value="m">Medium : M</option>
                                        <option value="m">Large : L</option>
                                        <option value="m">X Large : XL</option>
                                        <option value="m">XX Large : XXL</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group">
                                    {{-- <label class="label">Color</label> --}}
                                    <select name="colors" class="form-control">
                                        <option value="Choose" selected="selected">Choose Color</option>
                                        <option value="Blue">Blue</option>
                                        <option value="Red">Red</option>
                                        <option value="Green">Green</option>
                                        <option value="Black">Black</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group">

                                    <input class="input--style-4" type="text" name="count" placeholder="Price">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group">
                                    {{-- <label class="label">Type</label> --}}
                                    <input class="input--style-4" type="text" name="count" placeholder="count">
                                </div>
                            </div>
                        </div>

                </div>

                <div class="row row-space">
                    <div class="input-group">
                        <div class="col-11">
                            <textarea name="product_dec" class="form-control" style="margin: 10px"
                                placeholder="Enter Description"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row row-space">
                    <div class="col-6">
                        <input type="submit" class="btn btn-success" value="Add Product">
                    </div>
                    <div class="col-6">
                        <input type="reset" class="btn btn-danger" value="Cancel">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection