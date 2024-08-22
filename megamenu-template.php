<?php

/**
 * Template para o Mega Menu do Plugin
 */
?>

<div class="c-header-container">
  <div class="c-menu">
    <div class="container-menu">
      <a href="https://3cplusnow.com/">
        <div class="c-logo">
          <img
            src="https://3cplusnow.com/wp-content/uploads/2024/01/logo-3C.svg"
            width="70"
            alt="Logo"
            class="default" />
        </div>
        <!--<div class="c-logo">-->
        <!--    <img src="https://3cplusnow.com/wp-content/uploads/2024/05/Group-48095429.svg" width="80" alt="Logo 3C Plus 10 anos"-->
        <!--        class="default">-->

        <!--</div>-->
      </a>

      <!--MENU DESKTOP-->
      <ul class="menu-itens">
        <!-- Produto -->
        <li>
          <div class="menu-link" onclick="toggleSubmenu(event, this)">
            Produto
            <span class="c-icon"><i class="fas fa-angle-down"></i></span>
            <i class="fas fa-angle-up"></i>
          </div>

          <div class="submenu">
            <div class="submenu-container">
              <!-- SUBMENU CONTENT  -->
              <div class="submenu-content">
                <h3>Ferramentas de voz</h3>
                <!-- SUBEMNU ITEM  -->
                <a
                  href="https://3cplusnow.com/discador/"
                  class="submenu-item">

                  <div class="submenu-item_image">
                    <img src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/icon.png'; ?>" alt="Icon" />
                  </div>

                  <div class="submenu-item_content">
                    <div class="item-header">
                      <h4>Discador Automático</h4>
                    </div>
                    <small>
                      Distribua chamadas garantindo mais resultados e menos
                      custos
                    </small>
                  </div>
                </a>
                <!-- END SUBEMNU ITEM  -->
                <!-- SUBEMNU ITEM  -->
                <a
                  href="https://3cplusnow.com/pt/pabx/"
                  class="submenu-item">
                  <div class="submenu-item_image">
                    <img src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/icon-pabx.png'; ?>" alt="Icon" />
                  </div>
                  <div class="submenu-item_content">
                    <div class="item-header">
                      <h4>PABX</h4>
                    </div>
                    <small>
                      Gerencie os ramais internos e externos do seu negócio
                    </small>
                  </div>
                </a>
                <!-- END SUBEMNU ITEM  -->
                <!-- SUBEMNU ITEM  -->
                <a
                  href="https://3cplusnow.com/pt/receptivo/"
                  class="submenu-item">
                  <div class="submenu-item_image">
                    <img src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/icon-receptivo.png'; ?>" alt="Icon" />
                  </div>
                  <div class="submenu-item_content">
                    <div class="item-header">
                      <h4>Receptivo</h4>
                    </div>
                    <small>
                      Reduza o tempo de espera e aumente a eficiência
                      operacional.
                    </small>
                  </div>
                </a>
                <!-- END SUBEMNU ITEM  -->
              </div>
              <!-- END SUBMENU CONTENT  -->
              <!-- SUBMENU CONTENT  -->
              <div class="submenu-content">
                <h3>Contato por texto</h3>
                <!-- SUBEMNU ITEM  -->
                <a
                  href="https://3cplusnow.com/pt/sms/"
                  class="submenu-item">
                  <div class="submenu-item_image">
                    <img src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/icon-sms.png'; ?>" alt="Icon" />
                  </div>
                  <div class="submenu-item_content">
                    <div class="item-header">
                      <h4>SMS</h4>
                    </div>
                    <small>
                      Use para enviar promoções, lembretes e avaliações
                    </small>
                  </div>
                </a>
                <!-- END SUBEMNU ITEM  -->
                <!-- SUBEMNU ITEM  -->
                <a
                  href="https://3cplusnow.com/pt/omnichannel/"
                  class="submenu-item">
                  <div class="submenu-item_image">
                    <img src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/icon-omnichannel.png'; ?>" alt="Icon" />
                  </div>
                  <div class="submenu-item_content">
                    <div class="item-header">
                      <h4>Omnichannel</h4>
                    </div>
                    <small>
                      Tenha WhatsApp, Instagram e outros canais de
                      comunicação unificados
                    </small>
                  </div>
                </a>
                <!-- END SUBEMNU ITEM  -->
                <!-- SUBEMNU ITEM  -->
                <a
                  href="https://3cplusnow.com/pt/chatbot/"
                  class="submenu-item">
                  <div class="submenu-item_image">
                    <img src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/icon-chatbot.png'; ?>" alt="Icon" />
                  </div>
                  <div class="submenu-item_content">
                    <div class="item-header">
                      <h4>Chatbot</h4>
                    </div>
                    <small>
                      Atendimento 24/7: Agente virtual no WhatsApp
                    </small>
                  </div>
                </a>
                <!-- END SUBEMNU ITEM  -->
              </div>
              <!-- END SUBMENU CONTENT  -->
              <!-- SUBMENU CONTENT  -->
              <div class="submenu-content">
                <h3>Gestão do seu negócio</h3>
                <!-- SUBEMNU ITEM  -->

                <!-- END SUBEMNU ITEM  -->
                <!-- SUBEMNU ITEM  -->
                <a
                  href="https://3cplusnow.com/pt/insights-ia/"
                  class="submenu-item">
                  <div class="submenu-item_image">
                    <img src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/icon-ia.png'; ?>" alt="Icon" />
                  </div>
                  <div class="submenu-item_content">
                    <div class="item-header">
                      <h4>Insights IA</h4>
                      <span class="tag-new">Novo</span>
                    </div>

                    <small>
                      Dados de IA para eficiência, capacitação e performance
                      do atendimento
                    </small>
                  </div>
                </a>
                <!-- END SUBEMNU ITEM  -->
              </div>
              <!-- END SUBMENU CONTENT  -->
            </div>
            <div class="submenu-footer">
              <div class="submenu-footer_contact">
                <a class="chevron-link" href="">Contate o suporte <img width="18px" height="18px" src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/chevron.png'; ?>" alt="Icon" /></a>
              </div>
              <div class="submenu-footer_links">
                <a href="">Atualização do produto</a>
                <a href="">Desenvolvedores</a>
              </div>
            </div>
          </div>
        </li>
        <!-- Soluções -->
        <li>
          <div class="menu-link" onclick="toggleSubmenu(event, this)">
            Soluções
            <span class="c-icon"><i class="fas fa-angle-down"></i></span>
            <i class="fas fa-angle-up"></i>
          </div>
          <div class="submenu">
            <div class="submenu-container">
              <!-- SUBMENU CONTENT  -->
              <div class="submenu-content setores recursos">
                <h3>Setores</h3>
                <!-- SUBEMNU ITEM  -->
                <a
                  href="https://3cplusnow.com/pt/vendas/"
                  class="submenu-item">
                  <div class="submenu-item_image">
                    <img src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/icon-vendas.png'; ?>" alt="Icon" />
                  </div>
                  <div class="submenu-item_content">
                    <div class="item-header">
                      <h4>Vendas</h4>
                    </div>
                    <small>
                      Veja como a plataforma da 3C Plus se aplica ao setor
                    </small>
                  </div>
                </a>
                <!-- END SUBEMNU ITEM  -->
                <!-- SUBEMNU ITEM  -->
                <a
                  href="https://3cplusnow.com/pt/cobranca/"
                  class="submenu-item">
                  <div class="submenu-item_image">
                    <img src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/icon-cobranca.png'; ?>" alt="Icon" />
                  </div>
                  <div class="submenu-item_content">
                    <div class="item-header">
                      <h4>Cobrança</h4>
                    </div>
                    <small>
                      Descubra a 3C Plus para times de cobrança
                    </small>
                  </div>
                </a>
                <!-- END SUBEMNU ITEM  -->
                <!-- SUBEMNU ITEM  -->
                <a
                  href="https://3cplusnow.com/pt/atendimento-e-suporte/"
                  class="submenu-item">
                  <div class="submenu-item_image">
                    <img src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/icon-atendimento-suporte.png'; ?>" alt="Icon" />
                  </div>
                  <div class="submenu-item_content">
                    <div class="item-header">
                      <h4>Atendimento e Suporte</h4>
                    </div>
                    <small>
                      Utilize a plataforma 3C Plus para suporte
                    </small>
                  </div>
                </a>
                <!-- END SUBEMNU ITEM  -->
              </div>
              <!-- END SUBMENU CONTENT  -->
              <!-- SUBMENU CONTENT  -->

              <!-- END SUBMENU CONTENT  -->
              <!-- SUBMENU CONTENT  -->
              <div class="submenu-content partner recursos">
                <h3>3C Partner</h3>
                <div class="card">
                  <div class="card-image">
                    <img src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/3c-partners.png'; ?>" alt="Imagem 3c Partners" />
                  </div>
                  <div class="card-title">
                    <h3>
                      Veja como a 3C Plus acelerou rotinas de diversas
                      empresas.
                    </h3>
                  </div>
                  <div class="card-link">
                    <a class="chevron-link" href="#">Seja um parceiro <img src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/chevron.png'; ?>" alt="Icon" /></a>
                  </div>
                </div>
              </div>
              <!-- END SUBMENU CONTENT  -->
            </div>
            <div class="submenu-footer">
              <div class="submenu-footer_contact">
                <a class="chevron-link" href="">Contate o suporte <img src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/chevron.png'; ?>" alt="Icon" /></a>
              </div>
              <!-- <div class="submenu-footer_links">
                <a href="">Atualização do produto</a>
                <a href="">Desenvolvedores</a>
              </div> -->
            </div>
          </div>
        </li>
        <!-- Recursos  -->
        <li>
          <div class="menu-link" onclick="toggleSubmenu(event, this)">
            Recursos
            <span class="c-icon"><i class="fas fa-angle-down"></i></span>
            <i class="fas fa-angle-up"></i>
          </div>
          <div class="submenu">
            <div class="submenu-container">
              <!-- SUBMENU CONTENT  -->
              <div class="submenu-content setores recursos">
                <h3>Recursos</h3>
                <!-- SUBEMNU ITEM  -->
                <a
                  href="https://3cplusnow.com/pt/blog/"
                  class="submenu-item" style="margin-top: 24px">
                  <div class="submenu-item_image">
                    <img src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/icon-blog.png'; ?>" alt="Icon" />
                  </div>
                  <div class="submenu-item_content">
                    <div class="item-header">
                      <h4>Blog da 3C+</h4>
                    </div>
                    <small> Aumente sua produtividade no trabalho </small>
                  </div>
                </a>
                <!-- END SUBEMNU ITEM  -->
                <!-- SUBEMNU ITEM  -->
                <a
                  href="https://3cplusnow.com/pt/materiais-gratuitos/"
                  class="submenu-item">
                  <div class="submenu-item_image">
                    <img src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/icon-aprenda.png'; ?>" alt="Icon" />
                  </div>
                  <div class="submenu-item_content">
                    <div class="item-header">
                      <h4>Aprenda +</h4>
                    </div>
                    <small>
                      Materiais gratuitos para seu crescimento
                    </small>
                  </div>
                </a>
                <!-- END SUBEMNU ITEM  -->
              </div>
              <!-- END SUBMENU CONTENT  -->
              <!-- SUBMENU CONTENT  -->

              <!-- FERRAMENTAS  -->
              <!-- <div class="submenu-content cases">
                <h3>Ferramentas gratuitas</h3>
               
                <div class="card">
                  <div class="ferramentas">
                    <a href="">Gerador de link para o WhatsApp</a>
                    <a href="">Gerador de link para o WhatsApp</a>
                    <a href="">Gerador de link para o WhatsApp</a>
                    <a href="">Gerador de link para o WhatsApp</a>
                  </div>
                  <div class="card-link">
                    <a class="chevron-link" href="#">Ver todas<img width="18" height="18" src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/chevron.png'; ?>" alt="Icon" /></a>
                  </div>
                </div>
              </div> -->

              <!-- END SUBMENU CONTENT  -->
              <!-- SUBMENU CONTENT  -->
              <div class="submenu-content partner recursos">
                <h3>Instituto 3C</h3>
                <div class="card">
                  <div class="card-image">
                    <img src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/instituto-3c.png'; ?>" alt="imagem Instituto 3C" />
                  </div>
                  <div class="card-title">
                    <h3>
                      Conheça o programa que insere jovens de Guarapuava na
                      área de tecnologia.
                    </h3>
                  </div>
                  <div class="card-link">
                    <a class="chevron-link" href="https://instituto3c.com.br/">Saiba mais<img width="18" height="18" src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/chevron.png'; ?>" alt="Icon" /></a>
                  </div>
                </div>
              </div>
              <!-- END SUBMENU CONTENT  -->
            </div>
            <div class="submenu-footer">
              <div class="submenu-footer_contact">
                <a class="chevron-link" href="">Contate o suporte <img width="18px" height="18px" src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/chevron.png'; ?>" alt="Icon" /></a>
              </div>
              <!-- <div class="submenu-footer_links">
                <a href="">Atualização do produto</a>
                <a href="">Desenvolvedores</a>
              </div> -->
            </div>
          </div>
        </li>

        <!-- Preços -->
        <!--<li>-->
        <!--    <a href="#"><span>Preços</span></a>-->
        <!--</li>-->
        <!-- A 3C+ -->
        <li hidden>
          A 3C+
          <span class="c-icon">
            <i class="fa fa-angle-down"></i>
            <i class="fa fa-angle-up"></i>
          </span>
          <div class="submenu">
            <div class="submenu-content">
              <a
                target="_blank"
                class="submenu-link"
                href="https://instituto3c.com.br/">
                <div class="submenu-text">
                  <span>Instituto 3C+</span>
                </div>
              </a>
            </div>

            <div class="submenu-content">
              <a
                class="submenu-link"
                href="https://3cplusnow.com/materiais-gratuitos/">
                <div class="submenu-text">
                  <span>Materiais Gratuitos</span>
                </div>
              </a>
            </div>

            <!--<div class="submenu-content">-->
            <!--    <a class="submenu-link" href="">-->
            <!--        <div class="submenu-text">-->
            <!--            <span>Em Foco</span>-->
            <!--        </div>-->
            <!--    </a>-->
            <!--</div>-->

            <div class="submenu-content">
              <a
                class="submenu-link"
                href="https://3cplusnow.com/quem-somos">
                <div class="submenu-text">
                  <span>Quem Somos</span>
                </div>
              </a>
            </div>

            <!--<div class="submenu-content">-->
            <!--    <a class="submenu-link" href="">-->
            <!--        <div class="submenu-text">-->
            <!--            <span>FAQ</span>-->
            <!--        </div>-->
            <!--    </a>-->
            <!--</div>-->

            <!--<div class="submenu-content">-->
            <!--    <a class="submenu-link" href="">-->
            <!--        <div class="submenu-text">-->
            <!--            <span>Contato</span>-->
            <!--        </div>-->
            <!--    </a>-->
            <!--</div>-->

            <!--<div class="submenu-content">-->
            <!--    <a class="submenu-link" href="">-->
            <!--        <div class="submenu-text">-->
            <!--            <span>Redes Sociais</span>-->
            <!--        </div>-->
            <!--    </a>-->
            <!--</div>-->
          </div>
        </li>
        <!-- Parceiro -->
        <li>
          <a href="https://3cplusnow.com/partner/"><span>Seja um parceiro</span></a>
        </li>
        <!-- Blog -->
        <li>
          <a href="https://3cplusnow.com/blog/"><span>Blog</span></a>
        </li>
      </ul>
    </div>

    <div class="menu-buttons">
      <a target="_blank" href="https://app.3c.plus/" class="login">
        <img src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/icon-entrar.png'; ?>" alt="Icon" />
        Entrar
      </a>
      <a onclick="isFormPresent()" class="demo">
        <div
          style="
                background: #3057f2;
                color: #fff;
                padding: 12px 24px;
                border-radius: 10px;
                font-size: 14px;
              ">
          <span>Fale com um especialista</span>
        </div>
      </a>
      <div class="c-icon-bars">
        <img
          onclick="openMobileMenu()"
          style="width: 24px"
          src="https://3cplusnow.com/wp-content/uploads/2024/02/bars.svg"
          class="fas fa-bars" />
        <img
          onclick="closeMobileMenu()"
          src="https://3cplusnow.com/wp-content/uploads/2024/02/times.svg"
          class="fas fa-times"
          style="display: none; width: 20px" />
      </div>
    </div>

    <!--END MENU DESKTOP-->
  </div>

  <!--Menu Mobile-->
  <div class="c-nav-mobile animate__animated animate__faster">
    <div class="scrollable-content">
      <ul class="menu-mobile">
        <!-- Produto -->
        <li>
          <div class="submenu-mobile-header" onclick="toggleMenu(event)">
            Produtos
            <span class="c-icon">
              <i class="fas fa-angle-down"></i>
              <i class="fas fa-angle-up"></i>
            </span>
          </div>

          <div class="submenu-mobile">
            <!-- SUBMENU INTERNO  VOZ-->
            <div class="submenu-mobile_content">
              <div
                class="submenu-mobile-header_interno"
                onclick="toggleMenu(event)">
                <div class="submenu-mobile_text">
                  <h3>Voz</h3>
                </div>

                <span class="c-icon">
                  <i class="fas fa-angle-down"></i>
                  <i class="fas fa-angle-up"></i>
                </span>
              </div>

              <div class="submenu-container-interno">
                <div class="submenu-item_interno">
                  <img src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/icon.png'; ?>" alt="Icon" />
                  <a href="https://3cplusnow.com/pt/discador/">Discador Automático</a>
                </div>
                <div class="submenu-item_interno">
                  <img src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/icon-pabx.png'; ?>" alt="Icon" />
                  <a href="https://3cplusnow.com/pt/pabx/">PABX</a>
                </div>
                <div class="submenu-item_interno">
                  <img src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/icon-receptivo.png'; ?>" alt="Icon" />
                  <a href="https://3cplusnow.com/pt/receptivo/">Receptivo</a>
                </div>
              </div>
            </div>
            <!-- SUBMENU INTERNO  TEXTO-->
            <div class="submenu-mobile_content">
              <div
                class="submenu-mobile-header_interno"
                onclick="toggleMenu(event)">
                <div class="submenu-mobile_text">
                  <h3>Texto</h3>
                </div>

                <span class="c-icon">
                  <i class="fas fa-angle-down"></i>
                  <i class="fas fa-angle-up"></i>
                </span>
              </div>

              <div class="submenu-container-interno">
                <div class="submenu-item_interno">
                  <img src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/icon-sms.png'; ?>" alt="Icon" />
                  <a href="https://3cplusnow.com/pt/sms/">SMS</a>
                </div>
                <div class="submenu-item_interno">
                  <img src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/icon-omnichannel.png'; ?>" alt="Icon" />
                  <a href="https://3cplusnow.com/pt/omnichannel/">Omnichannel</a>
                </div>
                <div class="submenu-item_interno">
                  <img src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/icon-chatbot.png'; ?>" alt="Icon" />
                  <a href="https://3cplusnow.com/pt/chatbot/">Chatbot</a>
                </div>
              </div>
            </div>
            <!-- SUBMENU INTERNO  GESTÃO-->
            <div class="submenu-mobile_content">
              <div
                class="submenu-mobile-header_interno"
                onclick="toggleMenu(event)">
                <div class="submenu-mobile_text">
                  <h3>Gestão</h3>
                </div>

                <span class="c-icon">
                  <i class="fas fa-angle-down"></i>
                  <i class="fas fa-angle-up"></i>
                </span>
              </div>

              <div class="submenu-container-interno">
                <div class="submenu-item_interno">
                  <img src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/icon-ia.png'; ?>" alt="Icon" />
                  <a href="https://3cplusnow.com/pt/insights-ia/">Insights IA</a>
                </div>
              </div>
            </div>
          </div>
        </li>

        <!-- Soluções -->
        <li>
          <div class="submenu-mobile-header" onclick="toggleMenu(event)">
            Soluções
            <span class="c-icon">
              <i class="fas fa-angle-down"></i>
              <i class="fas fa-angle-up"></i>
            </span>
          </div>

          <div class="submenu-mobile">
            <!-- SUBMENU INTERNO  VOZ-->
            <div class="submenu-mobile_content">
              <div
                class="submenu-container-interno submenu-open"
                style="overflow: visible">
                <div class="submenu-item_interno">
                  <img src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/icon-vendas.png'; ?>" alt="Icon" />
                  <a href="https://3cplusnow.com/pt/vendas/">Vendas</a>
                </div>
                <div class="submenu-item_interno">
                  <img src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/icon-atendimento.png'; ?>" alt="Icon" />
                  <a href="https://3cplusnow.com/pt/atendimento-e-suporte/">Atendimento e Suporte</a>
                </div>
                <div class="submenu-item_interno">
                  <img src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/icon-partners.png'; ?>" alt="Icon" />
                  <a href="https://3cplusnow.com/pt/partner/">3C Partner</a>
                </div>
                <!-- <div class="submenu-item_interno">
                  <img src="
                    <?php //echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/icon-cases.png'; 
                    ?>
                  " alt="Icon" />
                  <a href="https://3cplusnow.com/pt/cases/">Cases</a>
                </div> -->
              </div>
            </div>
          </div>
        </li>
        <!-- Recursos-->
        <li>
          <div class="submenu-mobile-header" onclick="toggleMenu(event)">
            Recursos
            <span class="c-icon">
              <i class="fas fa-angle-down"></i>
              <i class="fas fa-angle-up"></i>
            </span>
          </div>

          <div class="submenu-mobile">
            <!-- SUBMENU INTERNO  VOZ-->
            <div class="submenu-mobile_content">
              <div
                class="submenu-container-interno submenu-open"
                style="overflow: visible">
                <div class="submenu-item_interno">
                  <img src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/icon-blog.png'; ?>" alt="Icon" />
                  <a href="https://3cplusnow.com/pt/blog/">Blog da 3C+</a>
                </div>
                <div class="submenu-item_interno">
                  <img src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/icon-aprenda.png'; ?>" alt="Icon" />
                  <a href="https://3cplusnow.com/pt/materiais-gratuitos/">Aprenda +</a>
                </div>
                <div class="submenu-item_interno">
                  <img src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/icon-instituto.png'; ?>" alt="Icon" />
                  <a href="https://instituto3c.com.br/">Instituto 3C</a>
                </div>
                <!-- <div class="submenu-item_interno">
                  <img src="<?php //echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/icon-ferramentas.png'; 
                            ?>" alt="Icon" />
                  <a href="#">Ferramentas gratuitas</a>
                </div> -->
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <div class="mobile-buttons">
    <div class="menu-buttons-mobile">
      <a
        target="_blank"
        href="https://app.3c.plus/"
        class="login"
        style="color: #3057f2">
        <img src="<?php echo plugin_dir_url(__DIR__) . 'megamenu/' . 'src/assets/icon-entrar.png'; ?>" alt="Icon" />
        Entrar
      </a>
      <a onclick="isFormPresent()" class="demo">
        <div
          style="
                background: #3057f2;
                color: #fff;
                padding: 12px 24px;
                border-radius: 10px;
                font-size: 14px;
              ">
          <span>Fale com um especialista</span>
        </div>
      </a>
    </div>
  </div>
</div>