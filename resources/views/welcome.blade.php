<x-app-layout>
    {{-- Sosial se encuentra en la plantilla --}}

    {{-- BANNER --}}
    <div id="home" class="shadow-lg border-b">
        <div id="owl1" class="owl-carousel owl-theme overflow-hidden pt-16">
            @foreach ($promotions as $promotion)
                <a href="{{ $promotion->link }}" target="_blank">
                    <img class="w-full object-cover object-center" src="@if ($promotion->image) {{ Storage::url($promotion->image->url) }} @else {{ asset('img/banner_no_image.jpg') }} @endif"
                        alt="{{ $promotion->name }}">
                </a>
            @endforeach
            {{-- <a href="#" target="_blank">
                <img class="w-full object-cover object-center" src="{{ asset('./img/banner2.png') }}">
            </a> --}}
        </div>
    </div>
    {{-- /BANNER --}}

    {{-- PROMOCIONES --}}
    <section id="promotions" class="my-10 container mx-auto relative">
        <div class="section-title p-2 text-primary mt-8 space-y-2 mb-4">
            <h2 class="text-center text-xl">Aprovecha nuestras</h2>
            <h1 class="text-center text-3xl font-extrabold tracking-wide uppercase">Promociones</h1>
        </div>
        {{-- CARROUSEL --}}
        <div style="container mx-auto">
            <div id="owl2" class="owl-carousel owl-theme marcas">
                @foreach ($offers as $offer)
                    <div class="md:rounded-lg overflow-hidden">
                        <img class="w-full" src="@if ($offer->image) {{ Storage::url($offer->image->url) }} @else {{ asset('img/noimage.png') }} @endif" />

                        <div class="px-4 py-2 text-left space-y-4 ">
                            <h1 class="text-xl text-text font-bold">{{ $offer->name }}</h1>
                            <span class="flex">
                                <p class="text-text font-bold mr-4">Ancho:</p>{{ $offer->width }}
                            </span>

                            <span class="flex">
                                <p class="text-text font-bold mr-4">Largo:</p>{{ $offer->long }}
                            </span>

                            <span class="flex">
                                <p class="text-text font-bold mr-4">Alto:</p>{{ $offer->high }}
                            </span>

                            <span class="flex">
                                <p class="text-text font-bold mr-4">Garantia:</p>{{ $offer->warranty }}
                            </span>

                            <hr />

                            <div class="flex space-x-4">
                                <p class="text-offer line-through">Precio normal Q{{ $offer->price }}</p>
                                <span class="text-primary font-bold">Oferta Q{{ $offer->offer }}</span>
                            </div>

                            <a href="{{ $offer->link }}" target="_blank"
                                class="mt-12 w-full text-center bg-secondary py-2 rounded-lg text-white block"><i
                                    class="fas fa-plus-circle mr-2"></i> Más
                                información</a>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="md:rounded-lg overflow-hidden">
                    <img class="w-full" src="{{ asset('./img/producto.png') }}" />
                    <div class="px-4 py-2 text-left space-y-4 ">
                        <h1 class="text-xl text-text font-bold">Producto #2</h1>
                        <span class="flex">
                            <p class="text-text font-bold mr-4">Ancho:</p>120cm x 20cm
                        </span>

                        <span class="flex">
                            <p class="text-text font-bold mr-4">Largo:</p>15cm x 80cm
                        </span>

                        <span class="flex">
                            <p class="text-text font-bold mr-4">Alto:</p>15cm x 20cm
                        </span>

                        <span class="flex">
                            <p class="text-text font-bold mr-4">Garantia:</p>5 años por desperfecto
                        </span>

                        <hr />

                        <div class="flex space-x-4">
                            <p class="text-offer line-through">Precio normal Q1850</p>
                            <span class="text-primary font-bold">Oferta Q1,200</span>
                        </div>

                        <button class="mt-12 w-full text-center bg-secondary py-2 rounded-lg text-white"><i
                                class="fas fa-plus-circle mr-2"></i> Más
                            información</button>
                    </div>
                </div>

                <div class="md:rounded-lg overflow-hidden">
                    <img class="w-full" src="{{ asset('./img/producto.png') }}" />
                    <div class="px-4 py-2 text-left space-y-4 ">
                        <h1 class="text-xl text-text font-bold">Producto #3</h1>
                        <span class="flex">
                            <p class="text-text font-bold mr-4">Ancho:</p>15cm x 20cm
                        </span>

                        <span class="flex">
                            <p class="text-text font-bold mr-4">Largo:</p>15cm x 20cm
                        </span>

                        <span class="flex">
                            <p class="text-text font-bold mr-4">Alto:</p>15cm x 20cm
                        </span>

                        <span class="flex">
                            <p class="text-text font-bold mr-4">Garantia:</p>3 años por desperfecto
                        </span>

                        <hr />

                        <div class="flex space-x-4">
                            <p class="text-offer line-through">Precio normal Q1850</p>
                            <span class="text-primary font-bold">Oferta Q1,200</span>
                        </div>

                        <button class="mt-12 w-full text-center bg-secondary py-2 rounded-lg text-white"><i
                                class="fas fa-plus-circle mr-2"></i> Más
                            información</button>
                    </div>
                </div>

                <div class="md:rounded-lg overflow-hidden">
                    <img class="w-full" src="{{ asset('./img/producto.png') }}" />
                    <div class="px-4 py-2 text-left space-y-4 ">
                        <h1 class="text-xl text-text font-bold">Producto #4</h1>
                        <span class="flex">
                            <p class="text-text font-bold mr-4">Ancho:</p>15cm x 20cm
                        </span>

                        <span class="flex">
                            <p class="text-text font-bold mr-4">Largo:</p>15cm x 20cm
                        </span>

                        <span class="flex">
                            <p class="text-text font-bold mr-4">Alto:</p>15cm x 20cm
                        </span>

                        <span class="flex">
                            <p class="text-text font-bold mr-4">Garantia:</p>3 años por desperfecto
                        </span>

                        <hr />

                        <div class="flex space-x-4">
                            <p class="text-offer line-through">Precio normal Q1850</p>
                            <span class="text-primary font-bold">Oferta Q1,200</span>
                        </div>

                        <button class="mt-12 w-full text-center bg-secondary py-2 rounded-lg text-white"><i
                                class="fas fa-plus-circle mr-2"></i> Más
                            información</button>
                    </div>
                </div> --}}

            </div>
        </div>


    </section>
    {{-- PROMOCIONES --}}

    {{-- PASOS DE COMPRA --}}
    <section id="guide" class="my-10">
        <div class="container mx-auto">
            <div class="section-title p-2 text-primary space-y-2 mb-4">
                <h2 class="text-center text-xl">¿Quiéres realizar tu compra?</h2>
                <h1 class="text-center text-3xl font-extrabold tracking-wide uppercase">Sigue estos simples pasos
                </h1>
            </div>

            {{-- PASOS --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-14 text-text">
                <div class="bg-white flex flex-col items-center p-8 rounded-lg shadow-xl">
                    <i class="fas fa-bed icono text-6xl text-primary"></i>
                    <h2 class="text-2xl my-4 font-bold text-text">Encuentra tu cama ideal</h2>
                    <p class="text-sm leading-6 tracking-tight text-text">
                        Entra en nuestra página web y encuentra la camas que más se adapte a tus necesidades
                    </p>
                </div>
                <div class="bg-white flex flex-col items-center p-8 rounded-lg shadow-xl">
                    <i class="fas fa-comment-dots icono text-6xl text-primary"></i>
                    <h2 class="text-2xl my-4 font-bold text-text">Contáctanos</h2>
                    <p class="text-sm leading-6 tracking-tight text-text">Cuando tengas elegido el modelo que necesitas
                        ponte
                        en
                        contacto con
                        tu asesor.</p>
                </div>
                <div class="bg-white flex flex-col items-center p-8 rounded-lg shadow-xl">
                    <i class="fas fa-truck icono text-6xl text-primary"></i>
                    <h2 class="text-2xl my-4 font-bold text-text">Realiza tu pedido</h2>
                    <p class="text-sm leading-6 tracking-tight text-text">Recibe tu pedido sin costo alguno y empieza a
                        disfrutar
                        de un buen
                        descanso.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- PASOS DE COMPRA --}}

    {{-- CAMAS --}}
    <section id="beds" class="my-10">
        <div class="section-title p-2 text-primary mt-8 space-y-2 mb-4">
            <h2 class="text-center text-xl">Conoce nuestras</h2>
            <h1 class="text-center text-3xl font-extrabold tracking-wide uppercase">Camas</h1>
        </div>

        {{-- Contenedor de camas --}}
        <div class="sm:grid sm:grid-cols-2 lg:grid-cols-3 gap-4 space-y-4 sm:space-y-0 container mx-auto">
            @foreach ($beds as $bed)
                <div class="md:rounded-lg overflow-hidden">
                    <img class="w-full" src="@if ($bed->image) {{ Storage::url($bed->image->url) }} @else {{ asset('img/noimage.png') }} @endif" />
                    <div class="px-4 py-2 text-left space-y-4 ">
                        <h1 class="text-xl text-text font-bold">{{ $bed->name }}</h1>
                        <span class="flex">
                            <p class="text-text font-bold mr-4">Ancho:</p>{{ $bed->width }}
                        </span>

                        <span class="flex">
                            <p class="text-text font-bold mr-4">Largo:</p>{{ $bed->long }}
                        </span>

                        <span class="flex">
                            <p class="text-text font-bold mr-4">Alto:</p>{{ $bed->high }}
                        </span>

                        <span class="flex">
                            <p class="text-text font-bold mr-4">Garantia:</p>{{ $bed->warranty }}
                        </span>

                        <hr />

                        <div class="flex space-x-4">
                            <span class="text-primary font-bold">Precio Q{{ $bed->price }}</span>
                        </div>

                        <a href="{{ $bed->link }}" target="_blank"
                            class="mt-12 w-full block text-center bg-secondary py-2 rounded-lg text-white"><i
                                class="fas fa-plus-circle mr-2"></i> Más
                            información</a>
                    </div>
                </div>
            @endforeach

            {{-- <div class="md:rounded-lg overflow-hidden">
                <img class="w-full" src="{{ asset('./img/cama.png') }}" />
                <div class="px-4 py-2 text-left space-y-4 ">
                    <h1 class="text-xl text-text font-bold">Producto #2</h1>
                    <span class="flex">
                        <p class="text-text font-bold mr-4">Ancho:</p>15cm x 20cm
                    </span>

                    <span class="flex">
                        <p class="text-text font-bold mr-4">Largo:</p>15cm x 20cm
                    </span>

                    <span class="flex">
                        <p class="text-text font-bold mr-4">Alto:</p>15cm x 20cm
                    </span>

                    <span class="flex">
                        <p class="text-text font-bold mr-4">Garantia:</p>3 años por desperfecto
                    </span>

                    <hr />

                    <div class="flex space-x-4">
                        <span class="text-primary font-bold">Precio Q10,800</span>
                    </div>

                    <button class="mt-12 w-full text-center bg-secondary py-2 rounded-lg text-white"><i
                            class="fas fa-plus-circle mr-2"></i> Más
                        información</button>
                </div>
            </div>

            <div class="md:rounded-lg overflow-hidden">
                <img class="w-full" src="{{ asset('./img/cama.png') }}" />
                <div class="px-4 py-2 text-left space-y-4 ">
                    <h1 class="text-xl text-text font-bold">Producto #3</h1>
                    <span class="flex">
                        <p class="text-text font-bold mr-4">Ancho:</p>15cm x 20cm
                    </span>

                    <span class="flex">
                        <p class="text-text font-bold mr-4">Largo:</p>15cm x 20cm
                    </span>

                    <span class="flex">
                        <p class="text-text font-bold mr-4">Alto:</p>15cm x 20cm
                    </span>

                    <span class="flex">
                        <p class="text-text font-bold mr-4">Garantia:</p>3 años por desperfecto
                    </span>

                    <hr />

                    <div class="flex space-x-4">
                        <span class="text-primary font-bold">Precio Q12,400</span>
                    </div>

                    <button class="mt-12 w-full text-center bg-secondary py-2 rounded-lg text-white"><i
                            class="fas fa-plus-circle mr-2"></i> Más
                        información</button>
                </div>
            </div> --}}

        </div>
    </section>
    {{-- CAMAS --}}

    {{-- MUEBLES --}}
    <section id="forniture" class="my-10">
        <div class="section-title p-2 text-primary mt-8 space-y-2 mb-4">
            <h2 class="text-center text-xl">Conoce nuestros</h2>
            <h1 class="text-center text-3xl font-extrabold tracking-wide uppercase">Muebles</h1>
        </div>

        {{-- Contenedor de muebles --}}
        <div class="sm:grid sm:grid-cols-2 lg:grid-cols-3 gap-4 space-y-4 sm:space-y-0 container mx-auto">
            @foreach ($furniture as $item)
                <div class="md:rounded-lg overflow-hidden">
                    <img class="w-full" src="@if ($item->image) {{ Storage::url($item->image->url) }} @else {{ asset('img/noimage.png') }} @endif" />

                    <div class="px-4 py-2 text-left space-y-4 ">
                        <h1 class="text-xl text-text font-bold">{{ $item->name }}</h1>
                        <span class="flex">
                            <p class="text-text font-bold mr-4">Ancho:</p>{{ $item->width }}
                        </span>

                        <span class="flex">
                            <p class="text-text font-bold mr-4">Largo:</p>{{ $item->long }}
                        </span>

                        <span class="flex">
                            <p class="text-text font-bold mr-4">Alto:</p>{{ $item->high }}
                        </span>

                        <span class="flex">
                            <p class="text-text font-bold mr-4">Garantia:</p>{{ $item->warranty }}
                        </span>

                        <hr />

                        <div class="flex space-x-4">
                            <span class="text-primary font-bold">Precio Q{{ $item->price }}</span>
                        </div>

                        <a href="{{ $item->link }}" target="_blank"
                            class="mt-12 w-full block text-center bg-secondary py-2 rounded-lg text-white"><i
                                class="fas fa-plus-circle mr-2"></i> Más
                            información</a>
                    </div>
                </div>
            @endforeach

            {{-- <div class="md:rounded-lg overflow-hidden">
                <img class="w-full" src="{{ asset('./img/mueble.png') }}" />
                <div class="px-4 py-2 text-left space-y-4 ">
                    <h1 class="text-xl text-text font-bold">Producto #2</h1>
                    <span class="flex">
                        <p class="text-text font-bold mr-4">Ancho:</p>15cm x 20cm
                    </span>

                    <span class="flex">
                        <p class="text-text font-bold mr-4">Largo:</p>15cm x 20cm
                    </span>

                    <span class="flex">
                        <p class="text-text font-bold mr-4">Alto:</p>15cm x 20cm
                    </span>

                    <span class="flex">
                        <p class="text-text font-bold mr-4">Garantia:</p>3 años por desperfecto
                    </span>

                    <hr />

                    <div class="flex space-x-4">
                        <span class="text-primary font-bold">Precio Q10,800</span>
                    </div>

                    <button class="mt-12 w-full text-center bg-secondary py-2 rounded-lg text-white"><i
                            class="fas fa-plus-circle mr-2"></i> Más
                        información</button>
                </div>
            </div>

            <div class="md:rounded-lg overflow-hidden">
                <img class="w-full" src="{{ asset('./img/mueble.png') }}" />
                <div class="px-4 py-2 text-left space-y-4 ">
                    <h1 class="text-xl text-text font-bold">Producto #3</h1>
                    <span class="flex">
                        <p class="text-text font-bold mr-4">Ancho:</p>15cm x 20cm
                    </span>

                    <span class="flex">
                        <p class="text-text font-bold mr-4">Largo:</p>15cm x 20cm
                    </span>

                    <span class="flex">
                        <p class="text-text font-bold mr-4">Alto:</p>15cm x 20cm
                    </span>

                    <span class="flex">
                        <p class="text-text font-bold mr-4">Garantia:</p>3 años por desperfecto
                    </span>

                    <hr />

                    <div class="flex space-x-4">
                        <span class="text-primary font-bold">Precio Q12,400</span>
                    </div>

                    <button class="mt-12 w-full text-center bg-secondary py-2 rounded-lg text-white"><i
                            class="fas fa-plus-circle mr-2"></i> Más
                        información</button>
                </div>
            </div> --}}

        </div>

    </section>
    {{-- MUEBLES --}}

    {{-- CONTACTO --}}
    <section id="contact" class="container mx-auto">
        <div class="section-title p-2 text-primary mt-8 space-y-2 mb-4">
            <h2 class="text-center text-xl">¿Necetsitas ayuda?</h2>
            <h1 class="text-center text-3xl font-extrabold tracking-wide uppercase">Contáctanos</h1>
        </div>


        <div id="contact"
            class="container mx-auto p-6 grid grid-cols-1 md:grid-cols-2 text-text bg-secondary rounded-lg relative">
            <div class="absolute inset-0 z-0 hidden md:block">
                <img class="rotate-180" src="{{ asset('./img/moon.svg') }}" alt="">
            </div>
            {{-- Información de contacto --}}
            <div class="text-white p-6 md:pl-24 z-40">
                <div class="mb-16">
                    <h1 class="font-bold text-3xl">Información de contacto</h1>
                    <ul class="my-6 text-xl space-y-6">
                        <li><i class="fas fa-phone mr-2"></i> +(502) 5598 - 0230</li>
                        <li><i class="fas fa-envelope mr-2"></i> camaymesa@gmail.com</li>
                        <li><i class="far fa-map mr-2"></i> 4ta Ave 8-40 zona 9, Guatemala</li>
                    </ul>
                </div>

                <div class="my-12">
                    <h1 class="font-bold text-3xl">Sigueme en</h1>
                    <div class="w-60 pt-6 flex space-x-8">
                        <a href="#" target="_blank"><i class="text-3xl fab fa-facebook"></i></a>
                        <a href="#" target="_blank"><i class="text-3xl fab fa-instagram"></i></a>
                        <a href="#" target="_blank"><i class="text-3xl fab fa-waze"></i></a>
                    </div>
                </div>
            </div>
            {{-- /Información de contacto --}}

            {{-- Formulario de contacto --}}
            <div class="bg-white rounded-xl p-6  z-20">
                <form method="POST" action="{{-- {{ route('contact_me') }} --}}" class="text-text space-y-6">
                    @csrf
                    <div class="w-full space-y-2">
                        <label class="text-xl font-bold">Nombre</label>
                        <input name="name" class="w-full rounded-xl" type="text" placeholder="Nombre completo">

                        @error('name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="w-full space-y-2">
                            <label class="text-xl font-bold">Número de teléfono</label>
                            <input name="phone" class="w-full rounded-xl" type="text" placeholder="5555 - 5555">
                        </div>
                        <div class="w-full space-y-2">
                            <label class="text-xl font-bold">Correo eléctronico</label>
                            <input name="email" class="w-full rounded-xl" type="text" placeholder="ejemplo@mail.com">

                            @error('email')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="w-full space-y-2">
                        <label class="text-xl font-bold">Mensaje</label>
                        <textarea name="msg" class="w-full rounded-xl" name="" id="" cols="30" rows="10"
                            placeholder="Escribenos tus dudas..."></textarea>

                        @error('msg')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="bg-primary py-2 px-2 text-white rounded-lg float-right"><i
                            class="fas fa-paper-plane mr-2"></i> Enviar mensaje</button>
                </form>
            </div>
            {{-- /Formulario de contacto --}}
        </div>
    </section>
    {{-- CONTACTO --}}

    {{-- MARCAS --}}
    <section class="container mx-auto">
        <div class="section-title p-2 text-primary mt-8 space-y-2 mb-4">
            <h2 class="text-center text-xl">Nuestras</h2>
            <h1 class="text-center text-3xl font-extrabold tracking-wide uppercase">Marcas</h1>
        </div>
        {{-- CARROUSEL --}}
        <div id="owl3" class="owl-carousel owl-theme marcas">
            @foreach ($trademarks as $trademark)
                <div
                    class="w-60 h-auto rounded-lg overflow-hidden shadow-lg hover:shadow-lg transform transition duration-500 hover:scale-105">
                    <div class="">
                        <img class="w-full" src="@if ($trademark->image) {{ Storage::url($trademark->image->url) }} @else {{ asset('img/marca_no_image.jpg') }} @endif" alt="{{ $trademark->name }}">
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    {{-- MARCAS --}}

    {{-- MAPA --}}
    <section id="map" class="my-10 container mx-auto relative">
        <div class="section-title p-2 text-primary mt-8 space-y-2 mb-4">
            <h2 class="text-center text-xl">Encuentranos en el</h2>
            <h1 class="text-center text-3xl font-extrabold tracking-wide uppercase">Mapa</h1>
        </div>

        {{-- MAPA --}}
        <div id="myMap" class="h-80 z-0 md:rounded-xl"></div>
        <div class="hidden md:block absolute w-96 max-w-96 rounded-lg p-8 bg-gray-200 top-32 right-8 shadow-xl">
            <div>
                <h1 class="text-xl mt-2 text-text font-bold text-center">Enuentranos en el mapa</h1>
            </div>
            <div class="flex justify-center my-2">
                <span class="text-sm text-text"><i class="fas fa-map-marker-alt mr-1 fill-current text-red-600"></i>
                    4ta Ave 8-40 zona 9, Guatemala</span>
            </div>
            <div class="flex justify-center">
                <img class="w-72 rounded-lg mt-1" src="https://i.imgur.com/kxhVRvI.png"
                    alt="Edificio camas a domicilio">
            </div>
        </div>
    </section>
    {{-- MAPA --}}

</x-app-layout>
