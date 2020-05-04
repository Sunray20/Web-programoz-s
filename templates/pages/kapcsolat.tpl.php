<main role="main">
    <div class="container marketing">
        <hr class="featurette-divider">
        <div class="row featurette d-flex align-items-center bd-highlight mt-5 mb-5">
            <div class="col-md-10 offset-md-1">
                <form action="?oldal=uzenetmentes" method="post">
                    <div class="card rounded-0">
                        <div class="card-header p-0">
                            <div class="bg-dark text-white text-center py-2">
                                <h3>Kapcsolat</h3>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <svg class="bi bi-person" width="1em" height="1em" viewBox="0 0 16 16"
                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 00.014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 00.022.004zm9.974.056v-.002.002zM8 7a2 2 0 100-4 2 2 0 000 4zm3-2a3 3 0 11-6 0 3 3 0 016 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" name="nev" placeholder="Név"
                                        pattern="[a-zA-ZáÁéÉíÍóÓöÖőŐúÚüÜűŰ ]+" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <svg class="bi bi-envelope" width="1em" height="1em" viewBox="0 0 16 16"
                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M14 3H2a1 1 0 00-1 1v8a1 1 0 001 1h12a1 1 0 001-1V4a1 1 0 00-1-1zM2 2a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2H2z"
                                                    clip-rule="evenodd"></path>
                                                <path fill-rule="evenodd"
                                                    d="M.071 4.243a.5.5 0 01.686-.172L8 8.417l7.243-4.346a.5.5 0 01.514.858L8 9.583.243 4.93a.5.5 0 01-.172-.686z"
                                                    clip-rule="evenodd"></path>
                                                <path
                                                    d="M6.752 8.932l.432-.252-.504-.864-.432.252.504.864zm-6 3.5l6-3.5-.504-.864-6 3.5.504.864zm8.496-3.5l-.432-.252.504-.864.432.252-.504.864zm6 3.5l-6-3.5.504-.864 6 3.5-.504.864z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                    <input type="email" class="form-control" name="email" placeholder="E-mail cím"
                                        required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <svg class="bi bi-chat-square-dots" width="1em" height="1em"
                                                viewBox="0 0 16 16" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M14 1H2a1 1 0 00-1 1v8a1 1 0 001 1h2.5a2 2 0 011.6.8L8 14.333 9.9 11.8a2 2 0 011.6-.8H14a1 1 0 001-1V2a1 1 0 00-1-1zM2 0a2 2 0 00-2 2v8a2 2 0 002 2h2.5a1 1 0 01.8.4l1.9 2.533a1 1 0 001.6 0l1.9-2.533a1 1 0 01.8-.4H14a2 2 0 002-2V2a2 2 0 00-2-2H2z"
                                                    clip-rule="evenodd"></path>
                                                <path
                                                    d="M5 6a1 1 0 11-2 0 1 1 0 012 0zm4 0a1 1 0 11-2 0 1 1 0 012 0zm4 0a1 1 0 11-2 0 1 1 0 012 0z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                    <textarea class="form-control" placeholder="Üzenet..." name="uzenet"
                                        required=""
                                        style="margin-top: 0px; margin-bottom: 0px; height: 147px;"></textarea>
                                </div>
                            </div>

                            <div class="text-center">
                                <input type="submit" name="elkuld" value="Küldés" class="btn btn-dark btn-block rounded-0 py-2">
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <hr class="featurette-divider">
        </div>
        <hr class="featurette-divider">
    </div>

        
</main>