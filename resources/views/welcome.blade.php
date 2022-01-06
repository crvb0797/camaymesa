<x-app-layout>
    {{-- Sosial se encuentra en la plantilla --}}

    {{-- BANNER --}}
    <div>
        <div id="owl1" class="owl-carousel owl-theme overflow-hidden pt-16">
            {{-- @foreach ($promotions as $promotion)
                <a href="{{ $promotion->link }}" target="_blank">
                    <img class="w-full object-cover object-center" src="{{ Storage::url($promotion->image->url) }}" alt="{{$promotion->name}}">
                </a>
            @endforeach --}}
            <a href="#" target="_blank">
                <img class="w-full object-cover object-center" src="{{ asset('./img/banner2.png') }}">
            </a>
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
            <div id="owl2" class="owl-carousel owl-theme">
                <div class="md:rounded-lg overflow-hidden">
                    <img class="w-full" src="{{ asset('./img/producto.png') }}" />
                    <div class="px-4 py-2 text-left space-y-4 ">
                        <h1 class="text-xl text-text font-bold">Producto #1</h1>
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
                            <p class="text-offer line-through">Precio normal Q10,850</p>
                            <span class="text-primary font-bold">Oferta Q10,000</span>
                        </div>

                        <button class="mt-12 w-full text-center bg-secondary py-2 rounded-lg text-white"><i
                                class="fas fa-plus-circle mr-2"></i> Más
                            información</button>
                    </div>
                </div>

                <div class="md:rounded-lg overflow-hidden">
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
                </div>

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
            <div class="md:rounded-lg overflow-hidden">
                <img class="w-full" src="{{ asset('./img/cama.png') }}" />
                <div class="px-4 py-2 text-left space-y-4 ">
                    <h1 class="text-xl text-text font-bold">Producto #1</h1>
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
                        <span class="text-primary font-bold">Precio Q10,000</span>
                    </div>

                    <button class="mt-12 w-full text-center bg-secondary py-2 rounded-lg text-white"><i
                            class="fas fa-plus-circle mr-2"></i> Más
                        información</button>
                </div>
            </div>

            <div class="md:rounded-lg overflow-hidden">
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
            </div>

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
            <div class="md:rounded-lg overflow-hidden">
                <img class="w-full" src="{{ asset('./img/mueble.png') }}" />
                <div class="px-4 py-2 text-left space-y-4 ">
                    <h1 class="text-xl text-text font-bold">Producto #1</h1>
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
                        <span class="text-primary font-bold">Precio Q10,000</span>
                    </div>

                    <button class="mt-12 w-full text-center bg-secondary py-2 rounded-lg text-white"><i
                            class="fas fa-plus-circle mr-2"></i> Más
                        información</button>
                </div>
            </div>

            <div class="md:rounded-lg overflow-hidden">
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
            </div>

        </div>

    </section>
    {{-- MUEBLES --}}

    {{-- CONTACTO --}}
    <section id="contact">

    </section>
    {{-- CONTACTO --}}

    {{-- MARCAS --}}
    <section>

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
