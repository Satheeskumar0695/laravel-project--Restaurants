@extends('components.order1')
@section('content')
<div class="col-md-6 middle-section">
    <div class="row">
        @foreach ($menu_items as $menu_item)
            <div class="col-md-3 food-item img">
                <img src="{{ asset($menu_item->image) }}" alt="{{ $menu_item->product_name }}" class="img-fluid" style="height:100px;">
                <a href="{{ route('menuitem', ['product_name' => $menu_item->product_name]) }}" class="btn btn-primary bt mt-3 mx-auto d-block">{{ $menu_item->product_name }}</a>

           </div>
        @endforeach
    </div>
</div>

@yield('payment')
@endsection

{{-- @extends('components.menu_items') --}}
