<footer class="footer p-5">
    <div class="footer__content container">
        <div class="footer__content_icons row p-4 mb-5">
            <h1 class="col-12 footer__content_icons-title text-center mb-5">Nossas redes sociais</h1>
            <ion-icon name="logo-instagram" size="large" class="footer__content_icons-icon justify-self-center col m-3">
            </ion-icon>
            <ion-icon name="logo-twitter" size="large" class="footer__content_icons-icon justify-self-center col m-3">
            </ion-icon>
            <ion-icon name="logo-discord" size="large" class="footer__content_icons-icon justify-self-center col m-3">
            </ion-icon>
        </div>
        <div class="footer__content_modal">
            <button type="button" class="btn footer__content_modal_btn-launch d-block m-auto col"
                data-bs-toggle="modal" data-bs-target="#modalFooter">
                <h1 class="mb-0 text-center text-nowrap">Fale conosco</h1>
            </button>

            <div class="modal fade" id="modalFooter" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Desde já, agradecemos pela contribuição</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Seu nome</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Prenome+Sobrenome">
                                <label for="exampleFormControlInput1" class="form-label">Endereço de Email</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="nome@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Sua mensagem</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sair</button>
                            <button type="button" class="btn footer__content_modal_btn-submit">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row footer__content_bottom">
            <img src="public/images/logo-footer.svg" alt="Logo Valorant"
                class="footer__content-logo col-12 footer__content_bottom-logo">
            <p class="col-12 text-center fs-6 footer__content_bottom-txt">Copyright ©2022 All rights reserved | Riot
                Games Brasil</p>
        </div>
</footer>