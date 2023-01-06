@extends('includes.app')
@section('stylesheet')
<style>
    .append,
    .close {
        font-size: 25px;
        height: 45px;
        width: 45px;
    }

    .main-heading h2 {
        font-weight: 700;
        text-transform: uppercase;
        padding: 15px;
        border-bottom: 2px solid;

    }

    .container-fluid {
        box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
    }

    .products-btn {
        text-align: right;
    }
</style>
@endsection
@section('content')
<section class="form-sec m-3 py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="main-heading my-4">
                    <h2 class="text-center">
                        Add Products From here
                    </h2>
                </div>
            </div>
        </div>
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
        @endif
        <div class="row">
            <div class="col">
                <form action="/save" method="post" enctype="multipart/form-data" class="form-group card p-3">
                    @csrf
                    <div class="form-group d-flex border p-2">
                        <input type="file" name="image[]" id="image" placeholder="Select file"
                            class="form-control h-25 mx-1"  required />
                        <input type="text" name="title[]" id="title" class="form-control h-25 mx-1"
                            placeholder="Enter Product Name"  required />
                        <textarea name="desc[]" id="desc" placeholder="Enter description here"
                            class="form-control h-25 mx-1" required ></textarea>
                        <input type="text" name="price[]" id="price" class="form-control h-25 mx-1"
                            placeholder="Enter price here" required />
                        <input type="number" name="qty[]" id="qty" class="form-control h-25 mx-1"
                            placeholder="Quantity" required />
                        <input type="date" name="date[]" id="date" data-date-inline-picker="true"
                            class="form-control h-25 mx-1" placeholder="Date" required />
                        <button type="button" class="btn btn-danger btn-sm append p-1">+</button>
                    </div>
                    <div class="appendDiv"></div>
                    <div class="submit text-right ">
                        <input type="submit" value="Save" class="btn btn-success my-3" />
                    </div>
                </form>
            </div>
        </div>
        <div class="products-btn">
            <a href="products" class="btn btn-info my-3">View Products</a>
        </div>

    </div>
</section>
@endsection
@section('javascript')
<script>
    $(document).ready(function () {
        $('.append').click(function () {
            var html = '<div class="form-group d-flex closeDiv border p-2 mt-3">';
            html += '<input type="file" name="image[]" id="image" placeholder="Select file" class="form-control h-25 mx-1" />';
            html += '<input type="text" name="title[]" id="title" class="form-control h-25 mx-1" placeholder="Enter Product Name" />';
            html += '<textarea name="desc[]" id="desc" placeholder="Enter description here" class="form-control h-25 mx-1"></textarea>';
            html += '<input type="text" name="price[]" id="price" class="form-control h-25 mx-1" placeholder="Enter price here" />'
            html += '<input type="number" name="qty[]" id="qty" class="form-control h-25 mx-1" placeholder="Quantity" />';
            html += '<input type="date" name="date[]" id="date" data-date-inline-picker="true" class="form-control h-25 mx-1" placeholder="Date" />'
            html += '<button type="button" class="btn btn-warning btn-sm p-1 close">-</button></div>'
            $('.appendDiv').append(html);
        });

    });
    $('body').on('click', '.close', function () {
        $(this).parent().remove();
    });
</script>


@endsection