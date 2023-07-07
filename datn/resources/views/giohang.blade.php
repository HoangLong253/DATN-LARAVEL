@extends('layouts.app')
@section('content')
    <!-- Content -->
    <!-- Cart -->
    
    <table id="cart" class="table table-bordered">
        <thead>
            <h4 class="title-cart">Giỏ hàng của bạn:</h4>
            <tr>
                <th>Hình ảnh</th>
                <th>Tên sách</th>
                <th>Số lượng</th>
                <th>Giá tiền</th>
            </tr>
        </thead>
        <tbody>
            @php $total = 0 @endphp
            @if (session('cart'))
                @foreach (session('cart') as $id => $details)
                    <tr rowId="{{ $id }}">
                        <td>
                            <div class="row">
                                <div class="col-sm-3 ">
                                    <img class="card-img-top"
                                        src="{{ asset('assets/images/sach/' . $details['loaisach'] . '/' . $details['image']) }}"
                                        class="card-img-top" />
                                </div>
                            </div>
                        </td>
                        <td data-th="Product">
                            <div class="col-sm-9 hidden-xs">
                                {{ $details['name'] }}
                            </div>
                        </td>
                        <td data-th="Qty">
                            <span class="buttons_added">
                                <input class="minus is-form" type="button" value="-" onclick="decreaseCount(event, this)">
                                <input type="number" aria-label="quantity" class="input-qty" value="{{  $details['quantity'] }}" max="10" min="1" name="quantity">
                                <input class="plus is-form" type="button" value="+" onclick="increaseCount(event, this)">
                            </span>
                        </td>
                        <td data-th="Price">
                            {{ number_format($details['price']) }}đ
                        </td>
                        <td class="actions">
                            <a class="btn btn-outline-danger btn-sm delete-product">
                                Xoá
                                <!--<i class="fa fa-trash-o"></i>-->
                            </a>
                        </td>
                    </tr>
                    @php $total += $details['price'] * $details['quantity'] @endphp
                @endforeach
            @else
                <!-- Cart no product -->
                <div class="wrap-cart-no-product">
                    <div class="wrap-content">
                        <form class="form-cart validation-cart" novalidate="" method="post" action=""
                            enctype="multipart/form-data">
                            <div class="wrap-cart">
                                <div class="row">
                                    <i class="fa fa-cart-arrow-down"></i>
                                    <p>Không tồn tại sản phẩm nào trong giỏ hàng !</p>
                                    <a href="{{ route('index') }}" class="empty-cart text-decoration-none w-100">
                                        <span>Về trang chủ</span>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @endif
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5" class="text-right">
                    Tổng tiền: {{number_format($total,0)}}đ
                </td>
            </tr>
            <tr>
                <td colspan="5" class="text-right">
                    <a href="{{ route('index') }}" class="btn btn-primary"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
                    <!--<button class="btn btn-success">Thanh toán</button>-->
                    <a href="{{route('thanhtoan')}}" class="btn btn-success">Thanh toán</a>
                </td>
            </tr>
        </tfoot>
    </table>
@endsection
@section('js')
    <script type="text/javascript">
        $(".edit-cart-info").change(function(e) {
            e.preventDefault();
            var ele = $(this);
            $.ajax({
                url: '{{ route('capnhat.giohang') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("rowId"),
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        });

        $(".delete-product").click(function(e) {
            e.preventDefault();

            var ele = $(this);

            if (confirm("Bạn có chắc chắn?")) {
                $.ajax({
                    url: '{{ route('xoa.giohang') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("rowId")
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        });
  function increaseCount(a, b) {
  var input = b.previousElementSibling;
  var value = parseInt(input.value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  input.value = value;    
  changeHref(value);
}

function decreaseCount(a, b) {
  var input = b.nextElementSibling;
  var value = parseInt(input.value, 10);
  if (value > 1) {
    value = isNaN(value) ? 0 : value;
    value--;
    input.value = value;
    changeHref(value);
  }
}
    </script>
@endsection
