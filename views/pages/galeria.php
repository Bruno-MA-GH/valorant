<section class="galeria">
    <nav class="">
        <div class="nav galeria__nav1 justify-content-center gap-5 mt-5 position-absolute pt-5" id="nav-tab" role="tablist">
            <button class="nav-link text-secondary galeria__nav1-item active" data-rellax-speed="10" id="nav-duelistas-tab" data-bs-toggle="tab" data-bs-target="#nav_duelistas"
                type="button" role="tab" aria-controls="nav-duelistas" aria-selected="true"><h1 class="pt-2">Duelistas</h1></button><div class="vr"></div>
            <button class="nav-link text-secondary galeria__nav1-item" data-rellax-speed="7" id="nav-iniciadores-tab" data-bs-toggle="tab" data-bs-target="#nav_iniciadores"
                type="button" role="tab" aria-controls="nav-iniciadores" aria-selected="false"><h1 class="pt-2">Iniciadores</h1></button><div class="vr"></div>
            <button class="nav-link text-secondary galeria__nav1-item" data-rellax-speed="4" id="nav-sentinelas-tab" data-bs-toggle="tab" data-bs-target="#nav_sentinelas"
                type="button" role="tab" aria-controls="nav-sentinelas" aria-selected="false"><h1 class="pt-2">Sentinelas</h1></button><div class="vr"></div>
            <button class="nav-link text-secondary galeria__nav1-item" data-rellax-speed="2" id="nav-controladores-tab" data-bs-toggle="tab" data-bs-target="#nav_controladores"
                type="button" role="tab" aria-controls="nav-controladores" aria-selected="false"><h1 class="pt-2">Controladores</h1></button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <?php include('galeria_pages/galeria_duelistas.php');?>
        <?php include('galeria_pages/galeria_iniciadores.php');?>
        <?php include('galeria_pages/galeria_sentinelas.php');?>
        <?php include('galeria_pages/galeria_controladores.php');?>
    </div>
</section>