# Tema Techpros
È un tema per Wordpress basato su https://wp.ditsolution.net/techpros/.

# Librerie e plugin esterni
Integrazione tramite wp_enqueue_style in functions.php:
* <a href="https://animate.style/">Animate.css 4.1.1</a>
* <a href="https://getbootstrap.com/">Bootstrap 4.5.2</a> 
* <a href="https://fontawesome.com/">Fontawesome 6.4.2</a>

Integrazione tramite CDN in header.php
* <a href="https://owlcarousel2.github.io/OwlCarousel2/">Owl Carousel 2.3.4</a>


# Cose da sapere
Non è completamente integrato con il CMS, perché la maggior parte delle cose è scritta direttamente su file HTML e le immagini sono presenti negli assets. SE VUOI lascerò alcune righe commentate che potranno essere utili nel sostituire i testi/immagini con quello che vuoi tu, ma dovrai poi installare il famoso plugin <a href="https://wordpress.org/plugins/advanced-custom-fields/">Advanced Custom Fields</a> nel tuo progetto principale.

Potrebbe darti problemi quando usi i dev tools con la visualizzazione responsive, in tal caso:
* Installa e attiva <a href="https://wordpress.org/plugins/wp-super-cache/">WP SuperCache</a>
* Cancella la cache di Wordpress
* Esci dalla modalità responsive
* Ricarica
* Rientra in responsive
Se non funziona, cazzi tuoi.
