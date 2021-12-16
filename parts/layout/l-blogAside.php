<aside class="l-blogAside">
    <div class="l-blogAside__widget">
        <div class="c-blogWidget --primary --newsletter">
            <div class="c-blogWidget__head">
                <h3>Newsletter</h3>
                <hr>
            </div>
            <div class="c-blogWidget__content">
                <form action="#" class="c-form" id="newsletter">
                    <ul class="c-form__fieldsHero --pad5 u-jcfe">
                        <li class="c-form__field u-fw100">
                            <input id="newsletter_nome" type="text" name="newsletter_nome" class="field" placeholder="Nome">
                        </li>
                        <li class="c-form__field u-fw100">
                            <input id="newsletter_email" type="text" name="newsletter_email" class="field" placeholder="E-mail">
                        </li>
                        <li class="c-form__field u-fw50 --btn">
                            <button class="c-btn --secondary">Assinar</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
    <div class="l-blogAside__widget">
        <div class="c-blogWidget --search">
            <div class="c-blogWidget__head">
                <h3>Pesquisar</h3>
                <hr>
            </div>
            <div class="c-blogWidget__content">
                <form action="#" class="c-form" id="searchBlog">
                    <ul class="c-form__fieldsHero --pad5 u-jcfe">
                        <li class="c-form__field u-fw100">
                            <input id="searchBlog" type="search" name="searchBlog" class="field" placeholder="Pesquisar">
                        </li>
                        <li class="c-form__field u-fw33 --btn">
                            <button class="c-btn --primary">Buscar</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
    <div class="l-blogAside__widget">
        <div class="c-blogWidget --categories">
            <div class="c-blogWidget__head">
                <h3>Categorias</h3>
                <hr>
            </div>
            <div class="c-blogWidget__content">
                <div class="c-smartMenu --gray --vertical --click">
                    <ul>
                        <li><a href="#">Categoria 1</a></li>
                        <li><a href="#">Categoria 2</a></li>
                        <li><a href="#">Categoria 3</a></li>
                        <li><a href="#">Categoria 4</a></li>
                        <li>
                            <a href="#">Categoria 5</a>
                            <ul>
                                <li><a href="#">Categoria 1</a></li>
                                <li><a href="#">Categoria 2</a></li>
                                <li><a href="#">Categoria 3</a></li>
                                <li><a href="#">Categoria 4</a></li>
                                <li><a href="#">Categoria 5</a></li>
                                <li><a href="#">Categoria 6</a></li>
                                <li><a href="#">Categoria 7</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Categoria 6</a></li>
                        <li><a href="#">Categoria 7</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="l-blogAside__widget">
        <div class="c-blogWidget --populares">
            <div class="c-blogWidget__head">
                <h3>Populares</h3>
                <hr>
            </div>
            <div class="c-blogWidget__content">
                <ul>
                    <li><?php include('parts/components/c-cardBlogResume.php');?></li>
                    <li><?php include('parts/components/c-cardBlogResume.php');?></li>
                    <li><?php include('parts/components/c-cardBlogResume.php');?></li>
                </ul>
            </div>
        </div>
    </div>
</aside>
