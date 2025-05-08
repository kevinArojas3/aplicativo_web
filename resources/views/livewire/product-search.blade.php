<div>
    <!-- Sección de búsqueda -->
    <section class="search-section" id="productos">
        <h2>Busca un producto</h2>
        <form class="search-form" wire:submit.prevent>
            <input type="text" placeholder="Buscar productos..." class="search-input" wire:model.live="query">
             
            <select class="search-select" wire:model.live="category">
                <option value="">Todas las categorías</option> 
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name}}</option>
                @endforeach
               
            </select>
        </form>
    </section>
 <!-- Catálogo de productos -->
    <section class="catalogo">
        <h2>Catálogo de Productos</h2>
        <div class="products">

            <!-- Producto 1 -->

            @foreach ($products as $product)
            <div class="product-card">
                <img src="{{ asset('storage/'.$product->image)}}" alt="{{$product->name}}">
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->description }}</p>
                <p class="price">${{ $product->price }}</p>
            </div>
            @endforeach

        </div>

        <!-- Paginación -->
        <div class="pagination">
            
            {{ $products->links('vendor.pagination.custom') }}


        </div>
    </section>
</div>
