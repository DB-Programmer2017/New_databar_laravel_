{{-- Include  --}}
@extends('layouts/main')



{{-- Title Website --}}
@section('title', "{$name} Rugged Keyboard | iKey | DATABAR COMPANY LIMITED")




{{-- Link CSS --}}
@section('link')
<link rel="stylesheet" href="{{URL::asset('css/page-style/ikey/product-detail/main.css')}}">

@endsection

{{-- Body HTML --}}

@section('content')

<div class="container-fluid p-lg-5">
    <div class="row m-xs-auto">
        <div class="flex-half image">
            <nav aria-label="breadcrumb" id="breadcrumb">
                <ol class="breadcrumb" style="background:transparent;">
                    <li class="breadcrumb-item"><a href="{{ route('ikey.index') }}">iKey</a></li>
                    <li class="breadcrumb-item"><a href="{{url()->previous()}}">{{ikey_breadcrumb()}}</a></li>
                    <li class="breadcrumb-item d-flex active" aria-current="page">
                        <h1 class="m-auto" style="font-size:15px;">{{$name}}</h1>
                    </li>
                </ol>
            </nav>
            <figure class="figure-image">
            <img src="{{URL::asset('images/ikey/oil&gas/'.$name.".jpg")}}">
            </figure>
        </div>
        <div class="flex-half content">
            <h1 class="product-name">{{$name}}</h1>
            <h2 class="product-type">Nonincendive Stainless Steel Keyboard</h2>
            <h3 class="description mt-3">Description</h3>
            <p class="p-description">iKey® offers a full line of nonincendive keyboards and pointing devices. The nonincendive DT-1000-NI is a full-size desktop keyboard featuring a stainless steel case and a sealed industrial silicone rubber keypad. It has a Factory Mutual approval of Class I, Division II. These units are ideal for harsh working conditions. Its 24 function keys and 10-key number pad allow for user versatility. The DT-1000-NI is designed to meet NEMA 4X specifications, making it resistant to dust, dirt, water and corrosive liquids. All units come with isolation barrier.</p>
            <div class="feature">
                <h3>Features</h3>
                <ul>
                    <li class="feature-li mb-2">10-Key Numeric Pad</li>    
                    <li class="feature-li mb-2">114-Key Functionality</li>    
                    <li class="feature-li mb-2">24 Function Keys</li>    
                    <li class="feature-li mb-2">PS/2 or USB configurations available. PS/2 ships with bulkhead cable. USB ships with PG7 cable gland.</li>
                </ul>  
            </div>
        </div>
    </div>
</div>

@endsection