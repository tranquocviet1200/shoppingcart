@if($newCart != null)
    <div class="select-items">
        <table>
            <tbody>
                @foreach($newCart->products as $item)
                <tr>
                    <td class="si-pic"><img src="assets/img//products/{{$item['productInfo']->img}}" alt=""></td>
                    <td class="si-text">
                        <div class="product-selected">
                            <p>{{number_format($item['productInfo']->price)}} đ x {{$item['quanty']}}</p>
                            <h6>Kabino Bedside Table</h6>
                        </div>
                    </td>
                    <td class="si-close">
                        <i class="ti-close"></i>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="select-total">
        <span>total:</span>
        <h5>{{number_format($newCart->toltalPrice)}} đ</h5>
    </div>
    </div>
@endif