<x-guest-layout>
    <body style="background-color: #FBFBFB;">
        <div style="padding-bottom: 0rem;padding-top: 1rem;; margin-top: -15%;">
            <img src="{{asset('/img/cabecalho_1.png')}}" alt="Orientação" width="100%">
            <div class="container">
                <img src="{{asset('/img/cabecalho_2.png')}}" alt="Orientação" width="100%">
            </div>
        </div>
        <div class="container" style="margin-bottom: 1rem;;">
            <div class="row justify-content-center">
                <!-- covid-19 programa de vacinacao -->
                <div class="col-md-9 style_card_apresentacao">
                    <div class="container" style="padding-top: 10px;;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row" style="text-align: center;">
                                    <div class="col-md-12" style="margin-top: 20px;margin-bottom: 10px;">
                                        <img src="{{asset('/img/logo_vem_vacina.png')}}" alt="Orientação" width="40%">
                                    </div>
                                    <div class="col-md-12 style_card_apresentacao_subtitulo">A plataforma “Vem Vacina Garanhuns” é a ferramenta oficial da Secretaria de Saúde de Garanhuns, desenvolvida em parceria com a Universidade Federal do Agreste de Pernambuco, para cadastro e agendamento da vacinação contra a Covid-19.</div>
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-bottom: 32px;">
                                <div class="row">
                                    <div class="col-md-12 style_card_apresentacao_solicitar_vacina">CONSULTAR AGENDAMENTO</div>
                                    <div class="col-md-12 style_card_apresentacao_solicitar_vacina_subtitulo" style="text-align: justify; padding-bottom: 19px;">Clique para saber se o seu agendamento já foi aprovado ou encontra-se na fila de espera.</div>
                                    <a type="button" class="btn btn-primary style_card_apresentacao_botao" style="color: white;"data-toggle="modal" data-target="#modalChecarAgendamento">CONSULTAR</a>
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-bottom: 32px;">
                                <div class="row">
                                    <div class="col-md-12 style_card_apresentacao_solicitar_vacina">SOLICITAR A VACINAÇÃO</div>
                                    <div class="col-md-12 style_card_apresentacao_solicitar_vacina_subtitulo" style="text-align: justify;">Clique para solicitar e agendar sua vacinação, ou realizar cadastro na fila de espera (é necessário aguardar aprovação da solicitação pela Secretaria de Saúde).</div>
                                    @auth
                                        <a href="{{route('solicitacao.candidato')}}" class="btn btn-success style_card_apresentacao_botao" style="color:white;">QUERO SOLICITAR MINHA VACINA </a>
                                    @else
                                        <a href="{{route('solicitacao.candidato')}}" class="btn btn-success style_card_apresentacao_botao" style="color:white; @if($config->botao_solicitar_agendamento) pointer-events: none; background-color: rgb(107, 224, 107); border-color: rgb(107, 224, 107); @endif" >@if($config->botao_solicitar_agendamento)VAGAS ESGOTADAS! AGUARDE NOVA REMESSA @else QUERO SOLICITAR MINHA VACINA @endif</a>
                                    @endauth
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--pessoas com comorbidades -->
        <div class="container mb-4">
            <div class="row justify-content-center">
                <div class="card_media2" style="margin-top: 1rem;">
                    <div class="card_menor3">
                        <div class="card-header style_card_menor_titulo" style=" border-top-left-radius: 12px; border-top-right-radius: 12px; ">INFORMAÇÕES E FORMULÁRIOS PARA VACINAÇÃO CONTRA A COVID-19</div>
                        <div class="container" style="padding-top: 15px; padding-bottom: 14px;">
                            <section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
                                <div class="container">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                      <div class="panel panel-default">
                                        <div class="panel-heading p-3 mb-3" role="tab" id="heading0"  style="border-radius: 8px;">
                                          <h3 class="panel-title">
                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#anexos3" aria-expanded="true" aria-controls="anexos1">
                                                Documentação necessária para vacinação dos grupos prioritários
                                            </a>
                                          </h3>
                                        </div>
                                        <div id="anexos3" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="heading0">
                                          <div class="panel-body px-3 mb-4">
                                            <p style="text-align: justify">
                                                Relação contendo a documentação necessária, e que deve ser apresentada no ato da vacinação, de acordo com cada grupo prioritário.
                                            </p>
                                            <a href="{{route('baixar.anexo', ['name'=> 'anexo2.pdf'])}}"  class="btn btn-success "  target="_blank" style="color:white;">Baixar Anexo </a>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="panel panel-default">
                                        <div class="panel-heading p-3 mb-3" role="tab" id="heading0"  style="border-radius: 8px;">
                                          <h3 class="panel-title">
                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#anexos2" aria-expanded="true" aria-controls="anexos2">
                                                Formulário com informações para gestantes e puérperas para vacinação contra a covid-19
                                            </a>
                                          </h3>
                                        </div>
                                        <div id="anexos2" class="panel-collapse collapse " role="tabpanel" aria-labelledby="heading0">
                                          <div class="panel-body px-3 mb-4">
                                            <p style="text-align: justify">
                                                Através deste documento, a gestante ou puérpera poderá ter acesso as informações necessárias sobre a vacinação. No mesmo deverão ser preenchidos os dados de identificação, além da autorização para que a vacina seja administrada.
                                            </p>
                                            <a href="{{route('baixar.anexo', ['name'=> 'Termo de Ciência e Consentimento Vacinação contra a Covid - GESTANTE.docx'])}}"  class="btn btn-success "  target="_blank" style="color:white;">Baixar Formulário </a>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="panel panel-default">
                                        <div class="panel-heading p-3 mb-3" role="tab" id="heading0"  style="border-radius: 8px;">
                                          <h3 class="panel-title">
                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#anexos0" aria-expanded="true" aria-controls="anexos0">
                                                Pessoas com comorbidades
                                            </a>
                                          </h3>
                                        </div>
                                        <div id="anexos0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
                                          <div class="panel-body px-3 mb-4">
                                            <p style="text-align: justify">
                                                A comprovação das comorbidades deve ser feita no ato da vacinação. Para isso, a Secretaria Estadual de Saúde produziu um modelo de atestado aonde um profissional de saúde poderá indicar a doença preexistente do paciente. É obrigatório o carimbo, matrícula e/ou registro do conselho de classe do profissional.
                                            </p>
                                            <a href="{{route('baixar.anexo', ['name'=> 'anexo1.pdf'])}}"  class="btn btn-success "  target="_blank" style="color:white;">Baixar anexo </a>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="panel panel-default">
                                        <div class="panel-heading p-3 mb-3" role="tab" id="heading0"  style="border-radius: 8px;">
                                          <h3 class="panel-title">
                                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#anexos1" aria-expanded="true" aria-controls="anexos1">
                                                Nota técnica SIDI 11/2021
                                            </a>
                                          </h3>
                                        </div>
                                        <div id="anexos1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
                                          <div class="panel-body px-3 mb-4">
                                            <p style="text-align: justify">
                                                Trata das orientações da estratégia de vacinação dos grupos de pessoas com comorbidades, pessoas com deficiência permanente, gestantes e puérperas na Campanha Nacional de Vacinação contra a COVID-19, 2021.
                                            </p>
                                            <a href="{{route('baixar.anexo', ['name'=> 'nota.pdf'])}}"  class="btn btn-success "  target="_blank" style="color:white;">Baixar Nota Técnica </a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                              </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" style="text-align: center; margin-top:2rem; margin-bottom: 4rem;">
            <p style="color: #204788; font-weight: bold;">
                <a href="{{route('home.estatisticas')}}">Mais informações</a>
            </p>
        </div>
        
        <!-- rodapé -->
        <div style="background-color:#313561; display: flex; flex-wrap: wrap;">
            <div class="container">
                <div class="row">
                  <div class="col-sm">
                    <div class="row justify-content-center" style="text-align:center; margin-bottom:1rem;margin-top: 1.5rem;">
                        <div class="col-12" style="margin-bottom: 45px; color:#fff;font-weight: 600;font-family: Arial, Helvetica, sans-serif;"><img src="{{asset('img/logo_rede_sociais.png')}}" alt="LMTS" width="20px"> Redes Sociais</div>
                        <a href="https://www.facebook.com/PrefeituradeGaranhuns/" target="_blank"><img src="{{asset('img/facebook.png')}}" alt="LMTS" width="55px"> </a>
                        <a href="https://twitter.com/garanhunspref" target="_blank"><img src="{{asset('img/twitter.png')}}" alt="LMTS" width="55px"> </a>
                        <a href="https://www.instagram.com/prefgaranhuns/" target="_blank"><img src="{{asset('img/instagram.png')}}" alt="LMTS" width="55px"> </a>
                        <a href="https://www.youtube.com/channel/UCHNqCIPyK42cjWUgO85C7Yg" target="_blank"><img src="{{asset('img/youtube.png')}}" alt="LMTS" width="43px" height="43x" style="margin-top: 4.5px;margin-left: 4px;"></a>
                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="form-group justify-content-center" style="text-align:center; margin-bottom:1rem;margin-top: 1.5rem;">
                        <div style="color:#fff;font-weight: 600;font-family: Arial, Helvetica, sans-serif;"><img src="{{asset('img/logo_fale_conosco.png')}}" alt="LMTS" width="15px"> Fale Conosco</div>
                        <div style="color:#fff; font-size: 30px; font-weight: 600; font-family: Arial, Helvetica, sans-serif; margin-top:20px">(87) 3762-1252</div>
                        <div style="color:#fff; font-size: 18px; font-weight: 100; font-family: Arial, Helvetica, sans-serif; margin-top:6px">agendamentovacinacovidgus@gmail.com</div>

                    </div>
                  </div>
                  <div class="col-sm">
                    <div class="form-group justify-content-center" style="text-align:center; margin-bottom:1rem;margin-top: 1.5rem;">
                        <div style="color:#fff;font-weight: 600;font-family: Arial, Helvetica, sans-serif;">Desenvolvido por:</div>
                        <div class="btn-group">
                            <div style="margin-top: 21px;margin-right: 15px;"><a href="http://ufape.edu.br/" target="_blank"><img src="{{asset('img/logo_ufape.png')}}" alt="LMTS" width="165px"> </a></div>
                            <div style="margin-top: 35px;"><a href="http://lmts.uag.ufrpe.br/" target="_blank"><img src="{{asset('img/logo_lmts.png')}}" alt="LMTS" width="140px"> </a></div>
                        </div>
                    </div>
                  </div>
                  <div class="col-sm-12" style="text-align: center; margin-bottom: 2rem;margin-top: 1rem;">
                    <a href="https://garanhuns.pe.gov.br/mapa-do-site/" target="_blank" style="margin-left: 15px;margin-right: 15px; color: #fff;text-decoration:none; ">MAPA DO SITE</a>
                    <a href="https://garanhuns.pe.gov.br/teclas-de-acessibilidade/" target="_blank" style="margin-left: 15px;margin-right: 15px; color: #fff;text-decoration:none; ">TECLAS DE ACESSIBILIDADE</a>
                    <a href="https://garanhuns.pe.gov.br/telefones-uteis/" target="_blank" style="margin-left: 15px;margin-right: 15px; color: #fff;text-decoration:none; ">TELEFONES ÚTEIS</a>

                  </div>
                </div>
              </div>
        </div>

        <!--x rodapé x-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    </body>
    
    <!-- Modal checar agendamento -->
    <div class="modal fade" id="modalChecarAgendamento" tabindex="-1" aria-labelledby="modalChecarAgendamentoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content" style="border-radius: 12px;">
            <div class="modal-header" style="background-color: #FF545A; color: #fff; border-top-left-radius: 12px; border-top-right-radius: 12px; ">
                <h5 class="modal-title" id="modalChecarAgendamentoLabel">CONSULTAR AGENDAMENTO</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form id="consultar_agendamento" action="{{route('agendamento.consultar')}}" method="POST">
                    @csrf
                    <div class="container">
                        <input type="hidden" name="consulta" value="1">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="inputCPF" class="style_titulo_input">CPF <span class="style_titulo_campo">*</span><span class="style_subtitulo_input"> (obrigatório)</span> </label>
                                <input type="text" class="form-control style_input cpf @error('cpf') is-invalid @enderror" id="inputCPF" placeholder="Ex.: 000.000.000-00" name="cpf" value="{{old('cpf')}}">

                                @error('cpf')
                                <div id="validationServer05Feedback" class="invalid-feedback">
                                    <strong>{{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                {{-- <label for="dose" class="style_titulo_input">QUAL A DOSE? <span class="style_subtitulo_input">*(obrigatório)</span></label>
                                <select id="dose" class="form-control style_input @error('dose') is-invalid @enderror" name="dose" required>
                                    <option selected disabled>-- Selecione a dose --</option>
                                    <option @if(old('dose') == $doses[0]) selected @endif value="{{$doses[0]}}">{{$doses[0]}}</option>
                                    <option @if(old('dose') == $doses[1]) selected @endif value="{{$doses[1]}}">{{$doses[1]}}</option>
                                </select>

                                @error('dose')
                                <div id="validationServer05Feedback" class="invalid-feedback">
                                    <strong>{{$message}}</strong>
                                </div>
                                @enderror --}}
                                <label for="inputData" class="style_titulo_input">DATA DE NASCIMENTO <span class="style_titulo_campo">*</span><span class="style_subtitulo_input"> (obrigatório)</span> </label>
                                <input type="date" class="form-control style_input @error('data_de_nascimento') is-invalid @enderror" id="inputData" placeholder="dd/mm/aaaa" pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}" name="data_de_nascimento" value="{{old('data_de_nascimento')}}">

                                @error('data_de_nascimento')
                                <div id="validationServer05Feedback" class="invalid-feedback">
                                    <strong>{{$message}}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">

                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-success" style="width: 100%;" form="consultar_agendamento">Consultar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
    <!-- Fim modal checar agendamento -->
    @if (old('consulta') != null)
        <script>
            $(document).ready(function() {
                $("#modalChecarAgendamento").modal('show');
            });
        </script>
    @endif
   
</x-guest-layout>
