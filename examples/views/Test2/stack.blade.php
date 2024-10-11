---stack style:---<br>
@stack("style")
<br>---stack example1:---<br>
@stack("example1")
<br>---stack example*:---<br>
@stack("example*")
<br>---stack examplenotexist:---<br>
@stack("examplenotexist","notfound")
@push("example1")
alpha
@endpush
@push("example1")
beta
@endpush
@push("example1","gamma")

@foreach($products as $product)
    <div class="blue">{{$product['name']}} ${{$product['price']}}</div>
    @pushonce("style")
        <style>
            .blue {
                background-color: blue;
                color:white;
            }
        </style>
    @endpushonce
@endforeach

