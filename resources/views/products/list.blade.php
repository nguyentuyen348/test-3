@extends('layouts.store-app')
@section('content')
    <div style="text-align: center">
        <h1>DANH SACH SAN PHAM MOI NHAT</h1>
    </div>
    <form action="{{route('products.search')}}" method="get">
        <div class="input-group" style="display: flex">
            <div class="form-outline">
                <input type="search" name="search" id="form1" class="form-control"/>
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-search">search</i>
            </button>
        </div>
    </form>
    <div style="margin-top: 10px">
        <a class="btn btn-success" href="{{route('products.create')}}">Thêm mới</a>
    </div>
    <hr>

    <div class="row">
        @if($products)
            @foreach($products as $product)

                <div class="col-lg-3 col-md-6 offset-md-0 offset-sm-1 col-sm-10 offset-sm-1 my-lg-0 my-2"
                     style="margin: 20px 20px 0 0;border: 1px solid orange;border-radius: 1em;text-align: center;">
                    <div>
                        <a onclick="confirm('are you sure ?')" style="margin-top: 5px;float: right;color: red"
                           href="{{route('products.delete',$product->id)}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-x-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path
                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </a>
                        <a style="margin-top: 5px;float: right" href="{{route('products.edit',$product->id)}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-brush" viewBox="0 0 16 16">
                                <path
                                    d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.067 6.067 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.118 8.118 0 0 1-3.078.132 3.659 3.659 0 0 1-.562-.135 1.382 1.382 0 0 1-.466-.247.714.714 0 0 1-.204-.288.622.622 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896.126.007.243.025.348.048.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04zM4.705 11.912a1.23 1.23 0 0 0-.419-.1c-.246-.013-.573.05-.879.479-.197.275-.355.532-.5.777l-.105.177c-.106.181-.213.362-.32.528a3.39 3.39 0 0 1-.76.861c.69.112 1.736.111 2.657-.12.559-.139.843-.569.993-1.06a3.122 3.122 0 0 0 .126-.75l-.793-.792zm1.44.026c.12-.04.277-.1.458-.183a5.068 5.068 0 0 0 1.535-1.1c1.9-1.996 4.412-5.57 6.052-8.631-2.59 1.927-5.566 4.66-7.302 6.792-.442.543-.795 1.243-1.042 1.826-.121.288-.214.54-.275.72v.001l.575.575zm-4.973 3.04.007-.005a.031.031 0 0 1-.007.004zm3.582-3.043.002.001h-.002z"/>
                            </svg>
                        </a>

                    </div>
                    <div class="card">


                        <div class="h6 font-weight-bold">
                            <h4 style="color: orangered"> {{$product->name}} </h4>

                        </div>

                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between">
                                <div class="d-flex flex-column">
                                    <img class="card-img-top" width="150px" src="{{asset('storage/'.$product->image)}}">
                                    <div class="text-muted"><h4 style="color: orangered">Giá: {{$product->price}}</h4>
                                    </div>
                                </div>
                                <div class="btn"><span class="far fa-heart"></span></div>

                            </div>
                        </div>
                        <a style="margin-bottom: 10px" class="btn btn-success"
                           href="{{route('products.detail',$product->id)}}">xem</a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
