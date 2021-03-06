<legend>New Product</legend>
<div class="row">
    @foreach($recent_product as $row)
        <div class="col-sm-4 col- col-md-3 col-xs-6">
            <div class="thumbnail">
                <a href="{{ url('/product/detail/'.$row->id_product) }}">
                    <img class="img-responsive img-rounded" src="{!! asset('storage/app/public/product/thumb/'.
                            (App\Picture::whereId_product($row->id_product)->count()>0?
                            App\Picture::whereId_product($row->id_product)->firstorFail()->filename:
                            'default.png'
                            )

                            ) !!}"
                         alt="{{  $breadcrumb }}"/>
                </a>

                <div class="caption">
                    <h3>{{ substr($row->product_name,0,10) }}</h3>

                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-12">
                              @if($row->dicount_perc>0)
                                <h4>{{ $row->discount_perc }}% OFF &nbsp;IDR <s>{{ number_format($row->new_price,0,',','.') }}</s></h4>
                              @endif
                                <p class="price">IDR {{ number_format($row->price,0,',','.') }}</p>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-danger btn-block"><span class="fa fa-list"></span> Add to
                                    Wishlist
                                </button>
                                <button class="btn btn-primary btn-block"><span
                                            class="fa fa-shopping-cart fa-lg"></span> Buy
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    @endforeach
</div>
{{--
<script type="text/javascript" src="{!! asset('public/admin/plugins/jQuery/jQuery-2.1.4.min.js') !!}"></script>
<script>

    function addToCart(id_product) {
        $('#on_order').html();
    }
    ;
</script>
--}}
