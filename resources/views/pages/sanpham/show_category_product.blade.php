<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link href="{{ asset('public/frontend/css/sanpham.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.3/themes/base/jquery-ui.min.css">
    <title>{{ $this_category_product->category_name }} | Blinkiy</title>
</head>
<body>
    @include('Header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <div class="container-fluid">
        <div class="filter-bar">
            @foreach ($category as $key => $cate)
                @if ($cate->category_id == $this_category_product->category_id)
                    <div class="category">
                        <a class="category-title-4" href="{{ URL::to('/danh-muc-san-pham/' . $cate->category_id) }}">{{ $cate->category_name }}</a>
                    </div>
                @else
                    <div class="category">
                        <a class="category-title-1" href="{{ URL::to('/danh-muc-san-pham/' . $cate->category_id) }}">{{ $cate->category_name }}</a>
                    </div>
                @endif
                <br>
            @endforeach
            <div class="category">
                <a class="category-title-1" href="{{ URL::to('/san-pham') }}">Xem tất cả</a>
            </div>
            <br>
            <hr>
            <!-- Other filter options -->
        </div>
        <!-- Product list -->
        <div class="product-list">
            <form action="{{ URL::to('/tim-kiem') }}" method="get">
                {{ csrf_field() }}
                <div class="search_product">
                    <div class="input-group flex-nowrap">
                        <input type="text" class="form-control search_input_product" placeholder="Tìm kiếm sản phẩm" aria-describedby="addon-wrapping" name="keywords_submit">
                        <input type="submit" name="search_items" class="search_button_product" value="Search" />
                    </div>
                </div>
            </form>
            <div id="products" class="products">
                @foreach ($product as $key => $pro)
                    <div class="product-card">
                        <div class="product-image">
                            <a href="{{ URL::to('/chi-tiet-san-pham/' . $pro->product_id) }}">
                                <img src="{{ URL::to('public/uploads/product/' . $pro->product_image) }}" alt="">
                            </a>
                        </div>
                        <div class="product-info">
                            <a class="product-name" href="{{ URL::to('/chi-tiet-san-pham/' . $pro->product_id) }}">{{ $pro->product_name }}</a>
                            <p class="product-price">{{ number_format($pro->product_price) . ' ' . 'VNĐ' }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="navigator">
                {{ $product->links('pagination::bootstrap-4') }} <!-- Ensure correct pagination method -->
            </div>
        </div>
    </div>
    <script src="{{ asset('public/frontend/js/sanpham.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.3/jquery-ui.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#slider-range").slider({
                orientation: "horizontal",
                range: true,
                min: {{ $min_price_range }},
                max: {{ $max_price_range }},
                values: [{{ $min_price_value }}, {{ $max_price_value }}],
                step: 1000,
                slide: function(event, ui) {
                    $("#amount").val(addPlus(ui.values[0]) + " VNĐ" + " - " + addPlus(ui.values[1]) + " VNĐ");
                    $('#price_from').val(ui.values[0]);
                    $('#price_to').val(ui.values[1]);
                }
            });
            $("#amount").val(addPlus($("#slider-range").slider("values", 0)) + " VNĐ" + " - " + addPlus($("#slider-range").slider("values", 1)) + " VNĐ");
        });

        function addPlus(nStr) {
            nStr += '';
            x = nStr.split(',');
            x1 = x[0];
            x2 = x.length > 1 ? ',' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1)) {
                x1 = x1.replace(rgx, '$1' + ',' + '$2');
            }
            return x1 + x2;
        }
    </script>
</body>
</html>
