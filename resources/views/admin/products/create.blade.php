@extends('admin.layouts.master')

@section('title')
    Thêm mới danh sách danh mục sản phẩm
@endsection

@section('content')

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data"
        > @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                </div>

                <div class="mb-3 mt-3">

                    <label for="catalogue_id"  class="form-label">Catalogues:</label>
                    <select id="catalogue_id" name="catalogue_id" class="form-select">
                    @foreach($products as $item)

                                <option id="{{ $item->id }}" name="{{ $item->id }}" value="{{ $item->id }}">{{ $item->name }}</option> <!-- Sửa từ $item->catalogues->name thành $item->catalogue->name -->

                    @endforeach

                    </select>
                </div>


                <div class="mb-3 mt-3">
                    <label for="slug" class="form-label">Slug:</label>
                    <input type="text" class="form-control" id="slug" placeholder="Enter slug" name="slug">
                </div>

                <div class="mb-3 mt-3">
                    <label for="description" class="form-label">Description:</label>
                    <textarea type="text" class="form-control" id="description" placeholder="Enter description"  name="description" ></textarea>
                </div>

                <div class="mb-3 mt-3">
                    <label for="price" class="form-label">Price:</label>
                    <input type="number" class="form-control" id="price"  placeholder="Enter price" name="price">
                </div>

                <div class="mb-3 mt-3">
                    <label for="image" class="form-label">File:</label>
                    <input type="file" class="form-control" id="image" placeholder="Enter image" name="image">
                </div>



            <div class="col-md-6">

                <div class="form-check mb-3">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="1" checked name="is_active" >Is Active
                    </label>
                </div>
            </div>
                </div>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
