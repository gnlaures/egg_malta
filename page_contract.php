<?php
$lHeaderInner = array(
    'extraClass' => '',
    'h1' => 'Contratar',
    'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elras eu diam eget felis mattis posuere sit amet a mectr.');
include('parts/layout/l-headerInner.php');
?>

<main class="l-page --inner --contract" data-aos="fade-up">
    <section class="s-defaultSection s-contract">
        <div class="s-defaultSection__content">
            <div class="u-container">
                <p>Para contratar nossos serviços preencha os itens abaixo informando seus dados e o serviço que você deseja contratar.</p>
                <div class="c-formContract">
                    <form action="#" class="c-form" id="formContract">
                        <ul class="c-form__fieldsHero --pad10">
                            <li class="c-form__field u-fw50">
                                <label for="formContract_nome">Nome *</label>
                                <input id="formContract_nome" type="text" name="nome" class="field" required>
                            </li>
                            <li class="c-form__field u-fw50">
                                <label for="formContract_email">E-mail *</label>
                                <input id="formContract_email" type="email" name="email" class="field" required>
                            </li>
                            <li class="c-form__field u-fw50">
                                <label for="formContract_telefone">Telefone *</label>
                                <input id="formContract_telefone" type="tel" class="field foneMask" name="telefone" required>
                            </li>
                            <li class="c-form__field u-fw50">
                                <label for="formId_cpf">CNPJ</label>
                                <input id="formId_cpf" type="text" class="field" name="cnpj">
                            </li>
                            <li class="c-form__field u-fw50">
                                <label for="formContract_empresa">Empresa</label>
                                <input id="formContract_empresa" type="text" name="empresa" class="field">
                            </li>
                            <li class="c-form__field u-fw50">
                                <label for="formContract_site">Website</label>
                                <input id="formContract_site" type="text" name="site" class="field">
                            </li>
                            <li class="c-form__field u-fw100">
                            <li class="c-form__field u-fw100 --check --checkbox">
                                <span class="fakeLabel">Serviços *</span>
                                <ul class="checkHero u-dflex u-wrap">
                                    <li>
                                        <label for="formId_option1">Google Ads</label>
                                        <input type="checkbox" id="formId_option1">
                                    </li>
                                    <li>
                                        <label for="formId_option4">Links Patrocinados</label>
                                        <input type="checkbox" id="formId_option4">
                                    </li>
                                    <li>
                                        <label for="formId_option2">Facebook Ads</label>
                                        <input type="checkbox" id="formId_option2">
                                    </li>
                                    <li>
                                        <label for="formId_option3">Instagram Ads</label>
                                        <input type="checkbox" id="formId_option3">
                                    </li>
                                    <li>
                                        <label for="formId_option5">Gestão de mídias sociais</label>
                                        <input type="checkbox" id="formId_option5">
                                    </li>
                                    <li>
                                        <label for="formId_option6">Marketing Digital</label>
                                        <input type="checkbox" id="formId_option6">
                                    </li>
                                </ul>
                            </li>
                            </li>
                            <li class="c-form__field u-fw100">
                                <label for="formContract_mensagem">Mensagem Adicional</label>
                                <textarea id="formContract_mensagem" name="mensagem" class="field" required></textarea>
                            </li>
                            <li class="c-form__field u-fw100 --btn">
                                <button class="c-btn --primary">Contratar Serviços</button>
                            </li>
                        </ul>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <?php include("parts/sections/s-services.php");?>
    <?php include("parts/sections/s-needHelp.php");?>
</main>
<?php include("parts/sections/s-clients.php");?>
