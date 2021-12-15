<div class="c-contactForm">
    <form action="#" class="c-form" id="contactForm">
        <ul class="c-form__fieldsHero --pad10">
            <li class="c-form__field u-fw50">
                <label for="contactForm_nome">Nome</label>
                <input id="contactForm_nome" type="text" name="nome" class="field" required>
            </li>
            <li class="c-form__field u-fw50">
                <label for="contactForm_email">E-mail</label>
                <input id="contactForm_email" type="email" name="email" class="field" required>
            </li>
            <li class="c-form__field u-fw50">
                <label for="contactForm_telefone">Telefone</label>
                <input id="contactForm_telefone" type="tel" class="field foneMask" name="telefone" placeholder="(__) ____-_____" required>
            </li>
            <li class="c-form__field u-fw50">
                <label for="contactForm_assunto">Assunto</label>
                <input id="contactForm_assunto" type="text" name="assunto" class="field" required>
            </li>
            <li class="c-form__field u-fw50 --select --full">
                <div class="selectBox">
                    <label for="contactForm_estado">Estado</label>
                    <select name="estado" id="contactForm_estado" class="field">
                        <option value="">Selecione</option>
                        <option value="ac">Acre</option>
                        <option value="al">Alagoas</option>
                        <option value="ap">Amapá</option>
                        <option value="am">Amazonas</option>
                        <option value="ba">Bahia</option>
                        <option value="ce">Ceará</option>
                        <option value="df">Distrito Federal</option>
                        <option value="es">Espirito Santo</option>
                        <option value="go">Goiás</option>
                        <option value="ma">Maranhão</option>
                        <option value="ms">Mato Grosso do Sul</option>
                        <option value="mt">Mato Grosso</option>
                        <option value="mg">Minas Gerais</option>
                        <option value="pa">Pará</option>
                        <option value="pb">Paraíba</option>
                        <option value="pr">Paraná</option>
                        <option value="pe">Pernambuco</option>
                        <option value="pi">Piauí</option>
                        <option value="rj">Rio de Janeiro</option>
                        <option value="rn">Rio Grande do Norte</option>
                        <option value="rs">Rio Grande do Sul</option>
                        <option value="ro">Rondônia</option>
                        <option value="rr">Roraima</option>
                        <option value="sc">Santa Catarina</option>
                        <option value="sp">São Paulo</option>
                        <option value="se">Sergipe</option>
                        <option value="to">Tocantins</option>
                    </select>
                    <div class="inputBox">
                        <input type="text" placeholder="Selecione" readonly>
                    </div>
                </div>
            </li>
            <li class="c-form__field u-fw50">
                <label for="contactForm_cdade">Cidade</label>
                <input id="contactForm_cdade" type="text" name="cdade" class="field">
            </li>
            <li class="c-form__field u-fw100">
                <label for="contactForm_mensagem">Mensagem</label>
                <textarea id="contactForm_mensagem" name="mensagem" class="field" required></textarea>
            </li>
            <li class="c-form__field u-fw100 --btn">
                <button class="c-btn --primary">Enviar</button>
            </li>
        </ul>
    </form>
</div>
