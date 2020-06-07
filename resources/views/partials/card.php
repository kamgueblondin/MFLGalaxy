<div class="special left-sidebar-widget">
    <div class="columnblock-title">@lang("Favoris")</div>
    <ul class="row ">
        @foreach($produits->where('promotion',true)->shuffle()->take(4) as $produit)
            <li class="product-layout">
                <div class="product-list col-xs-4">
                    <div class="product-thumb">
                        <div class="image product-imageblock"> <a href="{{ route('produit.detail',['id' => $produit->id]) }}">
                                <img class="img-responsive" title="iPod Classic" width="60px" height="80px" alt="iPod Classic" src="{{ asset('storage/'.$produit->image) }}">
                                <img class="img-responsive" title="iPod Classic" width="60px" height="80px" alt="iPod Classic" src="{{ asset('storage/'.$produit->image) }}">
                            </a> </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="caption product-detail">
                        <h4 class="product-name"><a title="Casual Shirt With Ruffle Hem" href="#">{{ $produit->nom }}</a></h4>
                        <p class="price product-price"> <span class="price-new text-success">{{ convertPrice($produit->prix) }} {{ session('devise')->code }} </span></p>
                        <div class="addto-cart"><a href="{{ route('produit.detail',['id' => $produit->id]) }}" class="btn-theme">@lang("Voir l'Article")</a></div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div>