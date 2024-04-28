<x-template>

    <x-slot:title>Tienda::</x-slot>

    <section class="tienda container-fluid container-md pb-3" id="tienda">
        <h2 class="titulo-seccion w-75 w-lg-100 text-uppercase text-center my-2 mx-auto px-2">Tienda</h2>
        <p class="fs-5 w-75 mx-auto">En nuestra tienda encontrarás todo lo <em>necesario para tu entrenamiento</em>. Podrás encontrar paquetes de clases, toda la ropa necesaria (<span lang="ja">keikogi, Obi, Hakamas</span>) de diversos tamaños y calidad, y también podrás encontrar los equipos necesarios (<span lang="ja">Katana, Bokken</span>)</p>
        <div class="productos pb-3 formularioLogica">
            <article>
                <div class="categoria pt-2 pe-2">
                    <h3 class="titulo-seccion w-75 w-lg-100 text-uppercase text-center my-2 mx-auto px-2"></h3>
                </div>
                <div class="categoria pt-2 pe-2 bg-light">

                </div>
            </article>

            <article id="productos">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 my-2 container mx-auto">

                </div>
            </article>
        </div>
    </section>
</x-template>
