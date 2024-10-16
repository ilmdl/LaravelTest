<div>
    <!-- Be present above all else. - Naval Ravikant -->
    <h1>Your Order</h1>
    @foreach ($yourOrders as $anOrder)
        <!-- <p>{{ $anOrder}}</p> -->
        <p>{{ $anOrder->name}} KSH{{$anOrder->price}} </p>
    @endforeach
    <p>Total: {{ $total }} </p>
    @if ($total > 200)
        <p>Congradulations you qualify for a 10% discount<br>Your new order is: {{ $total *0.9 }}</p>
    @else
        <p>If you spend over KSH {{ 200-$total}} more you would qualify for a 10% discount</p>
    @endif
    <button onclick="{{ route("home") }}">Re-Order</button>
</div>
