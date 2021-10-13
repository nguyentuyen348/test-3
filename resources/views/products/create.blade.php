@extends('layouts.store-app')
@section('content')
    <div style="text-align: center">
        <h1>THEM SAN PHAM</h1>
    </div>

    <hr>


    <form class="form-horizontal" action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <fieldset>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_name">Tên sản phẩm</label>
                <div class="col-md-4">
                    <input id="product_name" name="name" placeholder=""
                           class="form-control input-md @error('name') is-valid @enderror" type="text">
                    @error('name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_name_fr">Giá</label>
                <div class="col-md-4">
                    <input id="product_name_fr" name="price" placeholder=""
                           class="form-control input-md @error('price') is-valid @enderror" type="text">
                    @error('price')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="available_quantity">Chọn hình ảnh</label>
                <div class="col-md-4">
                    <input id="image" name="image" placeholder="" class="form-control input-md" type="file">

                </div>
            </div>
            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="product_categorie">Loại sản phẩm</label>
                <div class="col-md-4">
                    <select id="product_categorie" name="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group" style="margin-left: 400px">
                <button type="submit">Lưu</button>
                <a class="btn" href="{{route('products.index')}}">Trang chủ</a>
            </div>
        </fieldset>
    </form>
@endsection
