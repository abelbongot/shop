@extends('layout')    

@section('content')
    <!-- Bottom bar with filter and cart info -->
    <div class="bar">
        <div class="filter">
            <span class="filter__label">Filter: </span>
            <button class="action filter__item filter__item--selected" data-filter="*">All</button>
            <button class="action filter__item" data-filter=".jackets"><i class="icon icon--jacket"></i><span class="action__text">Jackets</span></button>
            <button class="action filter__item" data-filter=".shirts"><i class="icon icon--shirt"></i><span class="action__text">Shirts</span></button>
            <button class="action filter__item" data-filter=".dresses"><i class="icon icon--dress"></i><span class="action__text">Dresses</span></button>
            <button class="action filter__item" data-filter=".trousers"><i class="icon icon--trousers"></i><span class="action__text">Trousers</span></button>
            <button class="action filter__item" data-filter=".shoes"><i class="icon icon--shoe"></i><span class="action__text">Shoes</span></button>
        </div>
        <button class="cart">
            <i class="cart__icon fa fa-shopping-cart"></i>
            <span class="text-hidden">Shopping cart</span>
            <span class="cart__count">0</span>
        </button>
    </div>
    <!-- Main view -->
    <div class="view">
        <!-- Blueprint header -->
        <header class="bp-header cf">
            <span>Glorydel's <span class="bp-icon bp-icon-about" data-content="The Blueprints are a collection of basic and minimal website concepts, components, plugins and layouts with minimal style for easy adaption and usage, or simply for inspiration."></span></span>
            <h1>Product Catalogue <span>powered by <a href="#">Abel's Website Development</span></h1>
        </header>
        <!-- Grid -->
        <section class="grid grid--loading">
            <!-- Loader -->
            <img class="grid__loader" src="images/grid.svg" width="60" alt="Loader image" />
            <!-- Grid sizer for a fluid Isotope (Masonry) layout -->
            <div class="grid__sizer"></div>
            <!-- Grid items -->
            <div class="grid__item shirts">
                <div class="slider">
                    <div class="slider__item"><img src="images/shirt.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shirt.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shirt.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item shoes">
                <div class="slider">
                    <div class="slider__item"><img src="images/shoe.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shoe.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shoe.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item dresses">
                <div class="slider">
                    <div class="slider__item"><img src="images/dress.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/dress.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/dress.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item grid__item--size-a shirts">
                <div class="slider">
                    <div class="slider__item"><img src="images/shirt.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shirt.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shirt.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item trousers">
                <div class="slider">
                    <div class="slider__item"><img src="images/trousers.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/trousers.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/trousers.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item grid__item--size-a jackets">
                <div class="slider">
                    <div class="slider__item"><img src="images/jacket.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/jacket.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/jacket.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item shoes">
                <div class="slider">
                    <div class="slider__item"><img src="images/shoe.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shoe.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shoe.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item shirts">
                <div class="slider">
                    <div class="slider__item"><img src="images/shirt.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shirt.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shirt.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item shoes">
                <div class="slider">
                    <div class="slider__item"><img src="images/shoe.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shoe.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shoe.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item dresses">
                <div class="slider">
                    <div class="slider__item"><img src="images/dress.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/dress.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/dress.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item shirts">
                <div class="slider">
                    <div class="slider__item"><img src="images/shirt.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shirt.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shirt.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item trousers">
                <div class="slider">
                    <div class="slider__item"><img src="images/trousers.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/trousers.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/trousers.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item jackets">
                <div class="slider">
                    <div class="slider__item"><img src="images/jacket.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/jacket.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/jacket.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item shoes">
                <div class="slider">
                    <div class="slider__item"><img src="images/shoe.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shoe.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shoe.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item grid__item--size-a dresses">
                <div class="slider">
                    <div class="slider__item"><img src="images/dress.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/dress.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/dress.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item trousers">
                <div class="slider">
                    <div class="slider__item"><img src="images/trousers.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/trousers.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/trousers.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item shoes">
                <div class="slider">
                    <div class="slider__item"><img src="images/shoe.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shoe.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shoe.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item jackets">
                <div class="slider">
                    <div class="slider__item"><img src="images/jacket.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/jacket.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/jacket.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item shirts">
                <div class="slider">
                    <div class="slider__item"><img src="images/shirt.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shirt.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shirt.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item shoes">
                <div class="slider">
                    <div class="slider__item"><img src="images/shoe.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shoe.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shoe.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item dresses">
                <div class="slider">
                    <div class="slider__item"><img src="images/dress.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/dress.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/dress.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item shirts">
                <div class="slider">
                    <div class="slider__item"><img src="images/shirt.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shirt.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shirt.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item grid__item--size-a trousers">
                <div class="slider">
                    <div class="slider__item"><img src="images/trousers.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/trousers.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/trousers.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item jackets">
                <div class="slider">
                    <div class="slider__item"><img src="images/jacket.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/jacket.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/jacket.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item shoes">
                <div class="slider">
                    <div class="slider__item"><img src="images/shoe.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shoe.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shoe.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item shirts">
                <div class="slider">
                    <div class="slider__item"><img src="images/shirt.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shirt.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shirt.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item shoes">
                <div class="slider">
                    <div class="slider__item"><img src="images/shoe.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shoe.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shoe.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item dresses">
                <div class="slider">
                    <div class="slider__item"><img src="images/dress.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/dress.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/dress.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item shirts">
                <div class="slider">
                    <div class="slider__item"><img src="images/shirt.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shirt.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shirt.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item trousers">
                <div class="slider">
                    <div class="slider__item"><img src="images/trousers.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/trousers.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/trousers.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item jackets">
                <div class="slider">
                    <div class="slider__item"><img src="images/jacket.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/jacket.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/jacket.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item shoes">
                <div class="slider">
                    <div class="slider__item"><img src="images/shoe.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shoe.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shoe.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item grid__item--size-a dresses">
                <div class="slider">
                    <div class="slider__item"><img src="images/dress.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/dress.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/dress.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item trousers">
                <div class="slider">
                    <div class="slider__item"><img src="images/trousers.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/trousers.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/trousers.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item shoes">
                <div class="slider">
                    <div class="slider__item"><img src="images/shoe.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shoe.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/shoe.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
            <div class="grid__item jackets">
                <div class="slider">
                    <div class="slider__item"><img src="images/jacket.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/jacket.png" alt="Dummy" /></div>
                    <div class="slider__item"><img src="images/jacket.png" alt="Dummy" /></div>
                </div>
                <div class="meta">
                    <h3 class="meta__title">Dummy Product</h3>
                    <span class="meta__brand">Dummy Brand</span>
                    <span class="meta__price">$99</span>
                </div>
                <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span class="text-hidden">Add to cart</span></button>
            </div>
        </section>
        <!-- /grid-->
    </div>
    <!-- /view -->
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/flickity.pkgd.min.js"></script>
    <script src="js/main.js"></script>
@stop