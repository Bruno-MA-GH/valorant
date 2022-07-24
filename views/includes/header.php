<header class="header">
<nav class="navbar navbar-expand-lg header__nav">
  <div class="container-fluid header__nav__container">
    <a class="navbar-brand" href="#"><img src="public/images/valorant-logo.svg" class="header__nav__container-logo" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-3" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./"><h1>Home</h1></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./?page=galeria"><h1>agentes</h1></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./?page=agentes"><h1>galeria</h1></a>
        </li>
        <li class="nav-item">
            <button class="nav-link btn border-0 d-lg-none" id="btn-trigger-modal-header2"><h1>meu perfil</h1></button>
        </li>
      </ul>
    </div>
    <div class="collapse navbar-collapse justify-self-end lg-d-flex align-items-center d-none header__nav__container__profile-badge">
        <p class="p-2 mt-3">Bem vindo, @user</p>
        <div class="vr"></div>
        <button type="button" class="btn border-0" id="btn-trigger-modal-header1"><img class="p-2" src="public/images/person-circle.svg" alt=""></button>
    </div>
  </div>
</nav>
<div class="header__modal-header">
  <nav class="header__modal-header__nav position-absolute">
    <div class="triangle_header position-relative"></div>
    <ul class="p-0 pt-3 pb-3 container">
      <li class="header__modal-header__nav-item p-1">
        <a href="">
          <h1 class="col fs-4"><ion-icon name="person-outline" class="ps-4 pe-2"></ion-icon>Perfil</h1>
        </a>
      </li>
      <li class="header__modal-header__nav-item p-1">
        <a href="">
          <h1 class="col fs-4"><ion-icon name="settings-outline" class="ps-4 pe-2"></ion-icon>Configurações</h1>
        </a>
      </li>
      <li class="header__modal-header__nav-item">
        <button class="btn border-0 p-1 btn-sair">
          <h1 class="col fs-4"><ion-icon name="exit-outline" class="ps-4 pe-2" id="btn-exit-modal-header"></ion-icon>Sair</h1>
        </button>
      </li>
    </ul>
  </nav>
</div>
</header>