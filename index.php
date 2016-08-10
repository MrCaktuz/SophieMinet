<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Site professionnel de Sophie Minet neuropsychologue. Il reprend les information les plus importante au sujet de son travail et de ce qu'elle propose à ses patients.">
        <meta name="keywords" content="Sophie, Minet, Neuropsychologue, Ciney, Hamois, Louvière, Schaltin, scéances, bilan, prise en charge, test, évaluation, fonctions intellectuelles, trouble de l'attention, mnésique, enfants, Psychologue">
        <meta name="author" content="Mucht - Mathieu Claessens">
        <link rel="stylesheet" href="./css/styles.css">
        <title>Sophie Minet - Neuropsychloque</title>
    </head>
    <body>
        <header class="header" itemscope itemtype="http://schema.org/Person">
            <h1 class="header__main-title" itemprop="name">Sophie Minet</h1>
            <p class="header__secondary-title" itemprop="jobTitle">Neuropsychologue</p>
            <p class="header__sub-title">Enfants et adolescents</p>
        </header>
        <nav class="main-nav">
            <h2 class="hidden">Navigation principale</h2>
            <input class="main-nav__input" type="checkbox" id="toggle-nav">
    		<label class="main-nav__label" for="toggle-nav"><span>Menu</span></label>
            <ul class="main-nav__list">
                <li class="main-nav__list-elt"><a class="main-nav__link" href="#who">Qui suis-je</a></li>
                <li class="main-nav__list-elt"><a class="main-nav__link" href="#evaluations">&Eacute;valuations</a></li>
                <li class="main-nav__list-elt"><a class="main-nav__link" href="#supported">Prise en charge</a></li>
                <li class="main-nav__list-elt"><a class="main-nav__link" href="#sessions">Séances</a></li>
                <li class="main-nav__list-elt"><a class="main-nav__link" href="#contact">Contact</a></li>
            </ul>
        </nav>
        <section class="section" id="who">
            <h2 class="section__title">Qui suis-je</h2>
            <div class="section__introWrap section__introWrap--who">
                <img class="section__img section__img--who" src="./assets/img/who.jpg" alt="" />
                <p class="section__intro">Licenciée en psychologie, neuropsychologue, je suis passionnée par mon métier. Je me suis formée afin de pouvoir réaliser des séances de rééducation neuropsychologique ainsi que des bilans cognitifs. Dans ce domaine, les connaissances ne cessent d’évoluer c’est pourquoi une formation continue est importante afin de mettre au point de nouvelles stratégies.</p>
                <p class="section__intro">Sachez que je travaille en étroite collaboration avec les différentes personnes qui gravitent autour de l’enfant (parents, instituteurs, logopèdes, neuropédiatres et d'autres paramédicaux) afin d'assurer une prise en charge optimale de l’enfant.</p>
            </div>
        </section>
        <section class="section section--even section-center" id="evaluations">
            <h2 class="section__title section-center__title">&Eacute;valuations</h2>
            <div class="section__introWrap section-center__introWrap">
                <img class="section__img section__img--eval" src="./assets/img/kid.jpg" alt="" />
                <p class="section__intro section-center__intro">L’évaluation en neuropsychologie repose sur une série de tests qui couvrent l’ensemble des fonctions prises en charge par le cerveau (mémoire, attention, fonctions exécutives, praxies et visuo-spatial). L’évaluation a pour but de faire ressortir tant les points forts que les difficultés de l’enfant. Le profil ainsi établi, permet de mettre en place (si nécessaire) une prise en charge adaptée à chaque enfant.</p>
            </div>
            <h3 class="section__list-title">Différentes évaluations</h3>
            <p class="section__list-intro">En fonction de la demande, différentes évaluations peuvent être effectuées :</p>
            <ul class="section__list">
                <li class="section__list-elt">
                    <h4 class="section__list-elt-title">Bilan des fonctions intellectuelles</h4>
                    <p class="section__list-elt-description">Suspiscion de retard de développement ou d’un haut potentiel ; Mise en évidence des forces et des faiblesses de l’enfant dans le cadre d’un bilan d’attention ; Obtention d’un remboursement logopédique.</p>
                </li>
                <li class="section__list-elt">
                    <h4 class="section__list-elt-title">Bilan attentionnel  et mnésique</h4>
                    <p class="section__list-elt-description">Réalisé lors de difficultés ou de trouble de l’apprentissage.</p>
                </li>
                <li class="section__list-elt">
                    <h4 class="section__list-elt-title">Bilan des fonctions visuo-spatiales et praxies</h4>
                    <p class="section__list-elt-description">Réalisé afin de diagnostiquer ou d’exclure une dyspraxie, évalue les capacités visuo-spatiales et sensori-motrices.</p>
                </li>
            </ul>
        </section>
        <section class="section section-center" id="supported">
            <h2 class="section__title  section-center__title">Prise en charge</h2>
            <div class="section__introWrap section-center__introWrap">
                <img class="section__img section__img--sup" src="./assets/img/beachChild.jpg" alt="" />
                <p class="section__intro section-center__intro">Suite à l’évaluation neuropsychologique, une prise en charge peut éventuellement débuter. Le but du suivi est d’améliorer les performances de l’enfant/adolescent, en réalisant un drill des fonctions altérées, en élaborant de nouvelles stratégies et des outils pour contourner les difficultés spécifiques, tout en s’appuyant sur ses points forts. De plus, une collaboration avec les différentes personnes qui entourent l’enfant est importante (instituteurs, parents, logopèdes,…).</p>
                <p class="section__intro section-center__intro">Des séances en méthode de travail peuvent également être proposées aux élèves en difficulté ou à ceux qui souhaitent augmenter leur efficacité (organisation, stratégie de mémorisation, développement de nouveaux outils,… ).</p>
            </div>
            <h3 class="section__list-title">Différentes prises en charge</h3>
            <p class="section__list-intro">Les prises en charge diffèrent en fonction de la demande et des résultats du bilan :</p>
            <ul class="section__list">
                <li class="section__list-elt">
                    <h4 class="section__list-elt-title">Rééducation de l’attention</h4>
                    <p class="section__list-elt-description">Drill des fonctions altérées, mise en place d’outils pour contourner les difficultés.</p>
                </li>
                <li class="section__list-elt">
                    <h4 class="section__list-elt-title">Prise en charge et aménagements pour les difficultés visuo-spatiales et praxiques</h4>
                    <p class="section__list-elt-description">Outils et stratégies afin de contourner les difficultés rencontrées à la maison et à l’école.</p>
                </li>
                <li class="section__list-elt">
                    <h4 class="section__list-elt-title">Méthode de travail</h4>
                    <p class="section__list-elt-description">Psychoéducation sur le fonctionnement de notre cerveau et de la mémoire, mise en place d’outils et de stratégies (organisation, planning, stratégie de mémorisation, mind mapping,…).</p>
                </li>
            </ul>
        </section>
        <section class="section section--even" id="sessions">
            <h2 class="section__title">Les séances</h2>
            <div class="section__introWrap section__introWrap--session">
                <img class="section__img section__img--sessions" src="./assets/img/girl.jpg" alt="" />
                <p class="section__intro">Les séances d’évaluation se réalisent par période d’1h30 ; plusieurs séances sont généralement nécessaires  selon le type d’évaluation. Chaque bilan est suivi d’une remise de conclusions aux parents.</p>
                <p class="section__intro">Les prises en charge neuropsychologiques sont des séances de 45 minutes qui se déroulent  de manière générale au rythme d’une séance par semaine.</p>
            </div>
        </section>
        <section class="section contact clear" id="contact" itemscope itemtype="http://schema.org/Person">
            <h2 class="section__title">Me contacter</h2>
            <div class="contact__wrap">
                <div class="contact__adress">
                    <h3 class="contact__title">Cabinet privé</h3>
                    <p class="contact__adress-line" itemprop="address">3, rue du vieux puits</p>
                    <p class="contact__adress-line" itemprop="address">5364 Schaltin</p>
                </div>
                <div class="contact__adress">
                    <h3 class="contact__title" itemprop="address">Espace Rebond</h3>
                    <p class="contact__adress-line">(le lundi et le samedi matin)</p>
                    <p class="contact__adress-line" itemprop="address">Espage paramédical pluridiciplinaire</p>
                    <p class="contact__adress-line" itemprop="address">60/01, rue du parc</p>
                    <p class="contact__adress-line" itemprop="address">7100 La Louvière</p>
                </div>
                <a href="mailto:sophie_minet@yahoo.be" class="contact__mail" itemprop="email">sophie_minet@yahoo.be</a>
                <p class="contact__phone" itemprop="telephone">+32 495 16 37 16</p>
            </div>
            <form class="contact__form" action="contact.php" method="POST" id="contact-form">
                <?php if ( isset( $_SESSION['errors']['name'] ) ): ?>
                    <div class="contact__error">
                        <?php echo( $_SESSION['errors']['name'] ); ?>
                    </div>
                <?php endif; ?>
                <fieldset class="contact__fieldset">
                    <label class="contact__label" for="inputname">Nom</label>
                    <input required class="contact__input" type="text" name="name" value="<?php isset( $_SESSION['data']['name'] ) ? $_SESSION['data']['name'] : ''; ?>" id="inputname" placeholder="Votre nom ici...">
                </fieldset>
                <?php if ( isset( $_SESSION['errors']['email'] ) ): ?>
                    <div class="contact__error">
                        <?php echo( $_SESSION['errors']['email'] ); ?>
                    </div>
                <?php endif; ?>
                <fieldset class="contact__fieldset">
                    <label class="contact__label" for="inputmail">E-mail</label>
                    <input required class="contact__input" type="email" name="email" value="<?php isset( $_SESSION['data']['email'] ) ? $_SESSION['data']['email'] : ''; ?>" id="inputmail" placeholder="Votre email ici...">
                </fieldset class="contact__fieldset">
                <?php if ( isset( $_SESSION['errors']['message'] ) ): ?>
                    <div class="contact__error">
                        <?php echo( $_SESSION['errors']['message'] ); ?>
                    </div>
                <?php endif; ?>
                <fieldset class="contact__fieldset">
                    <label class="contact__label" for="inputmessage">Message</label>
                    <textarea required class="contact__textarea" name="message" id="inputmessage" rows="5" cols="10" placeholder="Votre message ici..."><?php isset( $_SESSION['data']['name'] ) ? $_SESSION['data']['name'] : ''; ?></textarea>
                </fieldset>
                <?php if ( isset( $_SESSION['success'] ) ): ?>
                    <div class="contact__success">
                        <?php echo( $_SESSION['success'] ); ?>
                    </div>
                <?php endif; ?>
                <button class="contact__submit" type="submit" name="submit">Envoyer</button>
            </form>
        </section>
        <footer class="footer">
            <small class="footer__copy">&copy; Sophie Minet Neuropsycholoque - Site designed by <a class="footer__copy-link" href="http://mathieuclaessens.be">Mathieu Claessens</a></small>
        </footer>
    </body>
</html>
<?php
    unset( $_SESSION['errors'] );
    unset( $_SESSION['success'] );
    unset( $_SESSION['data'] );
?>
