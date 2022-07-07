<div class="product__item">
    <a href="{{route('product',$product)}}">
        <div class="product__item__pic set-bg" data-setbg="/img/products/{{$product->media_folder}}/{{$product->preview}}">
            @if($product->mark)
                <span class="label">{{$product->mark}}</span>
            @endif
        </div>
    </a>
    <div class="product__item__text">
        <h6>{{$product->name}}</h6>
        <a href="{{route('product',$product)}}" class="add-cart">ogled izdelka</a>
        <h5>€{{$product->price}}</h5>
        <div class="product__color__select">
            @foreach(explode(',',$product->color) as $key=>$color)
                <label class="{{$color}}" for="pc-{{$key}}">
                    <input type="radio" id="pc-{{$key}}">
                </label>
            @endforeach
        </div>
    </div>
</div>
