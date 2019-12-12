<?php
global $post;
$post_slug = $post->post_name;
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/css/style.css">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'superscommesse' ); ?></a>
            <header class="header">
                <div class="header-top">
                    <div class="header-top__left"><a href="#">il gioco è vietato ai minori di anni 18 - <b>può causare dipendenza</b></a></div>
                    <div class="header-top__right"><a class="button-header button-header--default" href="https://www.superscommesse.it/login.html">Accedi</a><a class="button-header button-header--green" href="https://www.superscommesse.it/registrazione_fast.html">Registrati</a></div>
                </div>
                <div class="header-middle"><span class="mobile-menu-button"><i></i><i></i></span>
                    <div class="header-logo"><a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="198" height="44" viewBox="0 0 235 50" fill="none">
                                <path d="M13.2 12.7751C11.8 12.2751 10.8 11.9751 10.2 11.7751C9.6 11.6751 9 11.5751 8.4 11.5751C7.2 11.5751 6.1 11.8751 5.3 12.4751C4.3 13.1751 3.8 14.1751 3.8 15.3751C3.8 16.4751 4.2 17.1751 5 17.7751C5.3 17.9751 5.7 18.1751 6 18.2751C6.3 18.3751 7.2 18.5751 8.6 18.9751C10.8 19.4751 12.5 20.3751 13.5 21.4751C14.6 22.6751 15.2 24.1751 15.2 25.8751C15.2 28.0751 14.4 29.8751 12.8 31.3751C11.2 32.8751 9.2 33.5751 6.6 33.5751C4.9 33.5751 2.8 33.1751 0.299999 32.3751V28.2751C2.9 29.3751 4.9 29.9751 6.4 29.9751C7.9 29.9751 9 29.5751 9.9 28.8751C10.8 28.1751 11.3 27.2751 11.3 26.0751C11.3 24.9751 10.9 24.2751 10.2 23.7751C9.7 23.4751 8.7 23.0751 7.1 22.6751C5.7 22.3751 4.6 21.9751 3.9 21.6751C3.2 21.3751 2.6 20.9751 2 20.4751C1.4 19.8751 0.9 19.1751 0.5 18.3751C0.1 17.4751 0 16.5751 0 15.5751C0 14.0751 0.399999 12.6751 1.3 11.3751C2.8 9.1751 5.1 7.9751 8.2 7.9751C9.9 7.9751 11.6 8.2751 13.2 8.7751V12.7751Z" fill="#2D282F"></path>
                                <path d="M17.9999 17.2751H21.5999V24.8751C21.5999 26.4751 21.7999 27.6751 22.1999 28.3751C22.3999 28.7751 22.7999 29.0751 23.1999 29.2751C23.6999 29.4751 24.0999 29.6751 24.5999 29.6751C25.0999 29.6751 25.4999 29.5751 25.9999 29.2751C26.4999 29.0751 26.7999 28.6751 26.9999 28.3751C27.3999 27.7751 27.5999 26.6751 27.5999 25.1751V17.3751H31.1999V26.1751C31.1999 28.0751 30.6999 29.5751 29.6999 30.7751C29.0999 31.5751 28.2999 32.0751 27.3999 32.5751C26.4999 32.9751 25.4999 33.1751 24.4999 33.1751C22.3999 33.1751 20.6999 32.3751 19.3999 30.8751C18.7999 30.1751 18.3999 29.5751 18.1999 28.7751C17.9999 28.0751 17.8999 27.0751 17.8999 25.8751V17.2751H17.9999Z" fill="#2D282F"></path>
                                <path d="M34.7 41.6751V26.5751C34.7 24.9751 34.8 23.7751 35 22.9751C35.2 22.1751 35.5 21.3751 36 20.5751C36.8 19.3751 37.8 18.4751 39.2 17.7751C40.3 17.1751 41.5 16.9751 42.7 16.9751C44.9 16.9751 46.8 17.7751 48.4 19.3751C50 20.9751 50.8 22.8751 50.8 25.0751C50.8 26.7751 50.3 28.3751 49.3 29.7751C48.4 31.0751 47.0999 31.9751 45.5999 32.5751C44.6999 32.8751 43.8 33.0751 42.9 33.0751C41.3 33.0751 39.8 32.5751 38.3 31.4751V41.6751H34.7ZM42.7 20.5751C41.4 20.5751 40.4 21.0751 39.5 21.9751C38.7 22.8751 38.3 23.8751 38.3 25.0751C38.3 26.4751 38.8 27.6751 39.7 28.4751C40.5 29.2751 41.5 29.5751 42.7 29.5751C44.1 29.5751 45.2999 29.0751 46.0999 28.0751C46.7999 27.1751 47.2 26.1751 47.2 25.0751C47.2 23.6751 46.6999 22.5751 45.5999 21.6751C44.7999 20.9751 43.8 20.5751 42.7 20.5751Z" fill="#2D282F"></path>
                                <path d="M68.4 27.8751C68 28.8751 67.5 29.7751 66.9 30.4751C66.1 31.2751 65.2 31.9751 64.2 32.4751C63.1 32.9751 62.1 33.1751 61 33.1751C58.9 33.1751 57.1 32.4751 55.6 30.9751C53.9 29.3751 53 27.3751 53 25.0751C53 23.9751 53.2 22.7751 53.7 21.7751C54.2 20.6751 54.9 19.7751 55.8 18.9751C57.3 17.6751 59 16.9751 61 16.9751C63.2 16.9751 65.1 17.7751 66.7 19.3751C67.3 19.9751 67.8 20.7751 68.2 21.5751C68.6 22.3751 68.8 23.0751 68.8 23.7751C68.8 24.6751 68.5 25.4751 67.8 25.9751C67.5 26.2751 67.1 26.3751 66.7 26.4751C66.3 26.5751 65.7 26.5751 64.8 26.5751H56.8C57.1 27.4751 57.7 28.1751 58.4 28.7751C59.2 29.2751 60.1 29.5751 61 29.5751C62.5 29.5751 63.7 28.9751 64.6 27.8751H68.4ZM65.1 23.3751C64.8 22.4751 64.3 21.8751 63.5 21.2751C62.7 20.7751 61.9 20.4751 60.9 20.4751C59.9 20.4751 59.1 20.7751 58.3 21.2751C57.6 21.7751 57 22.4751 56.6 23.3751H65.1Z" fill="#2D282F"></path>
                                <path d="M75.1 32.9751H71.5V23.7751C71.5 21.5751 72.1 19.8751 73.3 18.7751C74.4 17.6751 75.9 17.175 77.7 17.175C77.9 17.175 78.2 17.175 78.6 17.175V20.675C77.3 20.775 76.4 21.075 75.9 21.675C75.4 22.275 75.2 23.2751 75.2 24.7751V32.9751H75.1Z" fill="#2D282F"></path>
                                <path d="M93.2 12.7751C91.8 12.2751 90.8 11.9751 90.2 11.7751C89.6 11.6751 89 11.5751 88.4 11.5751C87.2 11.5751 86.1 11.8751 85.3 12.4751C84.3 13.1751 83.8 14.1751 83.8 15.3751C83.8 16.4751 84.2 17.1751 85 17.7751C85.3 17.9751 85.7 18.1751 86 18.2751C86.3 18.3751 87.2 18.5751 88.6 18.9751C90.8 19.4751 92.5 20.3751 93.5 21.4751C94.6 22.6751 95.2 24.1751 95.2 25.8751C95.2 28.0751 94.4 29.8751 92.8 31.3751C91.2 32.8751 89.2 33.5751 86.6 33.5751C84.9 33.5751 82.8 33.1751 80.3 32.3751V28.2751C82.9 29.3751 84.9 29.9751 86.4 29.9751C87.9 29.9751 89 29.5751 89.9 28.8751C90.8 28.1751 91.3 27.2751 91.3 26.0751C91.3 24.9751 90.9 24.2751 90.2 23.7751C89.7 23.4751 88.7 23.0751 87.1 22.6751C85.7 22.3751 84.6 21.9751 83.9 21.6751C83.2 21.3751 82.6 20.9751 82 20.4751C81.4 19.8751 80.9 19.1751 80.5 18.3751C80.1 17.4751 80 16.5751 80 15.5751C80 14.0751 80.4 12.6751 81.3 11.3751C82.8 9.1751 85.1 7.9751 88.2 7.9751C89.9 7.9751 91.6 8.2751 93.2 8.7751V12.7751Z" fill="#2D282F"></path>
                                <path d="M108 32.9751H107.2C105.5 32.9751 104.3 32.9751 103.8 32.8751C103.3 32.7751 102.7 32.6751 102 32.3751C100.5 31.7751 99.3001 30.7751 98.3001 29.2751C97.5001 28.0751 97.1001 26.6751 97.1001 25.1751C97.1001 23.0751 97.8001 21.2751 99.1001 19.7751C100.5 18.2751 102.3 17.3751 104.5 17.2751C104.8 17.2751 105.7 17.2751 107.2 17.2751H107.9V20.7751C105.9 20.7751 104.6 20.8751 103.9 21.0751C103 21.2751 102.3 21.6751 101.8 22.3751C101.1 23.1751 100.7 24.1751 100.7 25.2751C100.7 26.5751 101.2 27.6751 102.2 28.4751C102.7 28.8751 103.2 29.1751 103.8 29.2751C104.4 29.3751 105.3 29.4751 106.4 29.4751C106.9 29.4751 107.4 29.4751 107.9 29.4751V32.9751H108Z" fill="#2D282F"></path>
                                <path class="circle-animation" d="M117.9 16.9751C120.1 16.9751 122 17.7751 123.6 19.3751C125.2 20.9751 126 22.8751 126 25.1751C126 26.5751 125.6 27.9751 124.8 29.2751C124 30.4751 122.9 31.4751 121.6 32.1751C120.4 32.7751 119.1 33.0751 117.8 33.0751C115.5 33.0751 113.5 32.2751 111.9 30.5751C110.4 28.9751 109.6 27.1751 109.6 24.9751C109.6 22.3751 110.6 20.2751 112.7 18.6751C114.3 17.5751 115.9 17.0751 117.9 16.9751ZM117.9 20.5751C116.6 20.5751 115.4 21.0751 114.5 22.0751C113.7 22.8751 113.4 23.8751 113.4 25.0751C113.4 26.3751 113.9 27.4751 114.8 28.3751C115.7 29.1751 116.7 29.5751 117.9 29.5751C119.3 29.5751 120.4 29.0751 121.4 27.9751C122.1 27.1751 122.5 26.1751 122.5 25.0751C122.5 23.6751 122 22.5751 121 21.6751C120 20.9751 119 20.5751 117.9 20.5751Z" fill="#F08927"></path>
                                <path d="M147.9 32.9752H144.3V23.4752C144.3 21.5752 143.6 20.5752 142.3 20.5752C141.6 20.5752 141.1 20.7752 140.7 21.2752C140.3 21.7752 140.2 22.4752 140.2 23.3752V32.9752H136.6V23.4752C136.6 21.5752 135.9 20.5752 134.5 20.5752C133.1 20.5752 132.4 21.4752 132.4 23.2752V32.9752H128.9V23.6752C128.9 22.5752 129 21.7752 129.1 21.2752C129.2 20.6752 129.5 20.1752 129.8 19.5752C130.8 17.8752 132.4 17.0752 134.5 17.0752C136 17.0752 137.3 17.5752 138.4 18.5752C139.3 17.5752 140.6 17.0752 142.3 17.0752C143.6 17.0752 144.7 17.4752 145.7 18.1752C146.5 18.7752 147.1 19.4752 147.4 20.2752C147.7 21.0752 147.9 22.1752 147.9 23.5752V32.9752Z" fill="#2D282F"></path>
                                <path d="M170.9 32.9752H167.3V23.4752C167.3 21.5752 166.6 20.5752 165.3 20.5752C164.6 20.5752 164.1 20.7752 163.7 21.2752C163.3 21.7752 163.2 22.4752 163.2 23.3752V32.9752H159.6V23.4752C159.6 21.5752 158.9 20.5752 157.5 20.5752C156.1 20.5752 155.4 21.4752 155.4 23.2752V32.9752H151.8V23.6752C151.8 22.5752 151.9 21.7752 152 21.2752C152.1 20.6752 152.4 20.1752 152.7 19.5752C153.7 17.8752 155.3 17.0752 157.4 17.0752C158.9 17.0752 160.2 17.5752 161.3 18.5752C162.2 17.5752 163.5 17.0752 165.2 17.0752C166.5 17.0752 167.6 17.4752 168.6 18.1752C169.4 18.7752 170 19.4752 170.3 20.2752C170.6 21.0752 170.8 22.1752 170.8 23.5752V32.9752H170.9Z" fill="#2D282F"></path>
                                <path d="M189.4 27.8751C189 28.8751 188.5 29.7751 187.9 30.4751C187.1 31.2751 186.2 31.9751 185.2 32.4751C184.1 32.9751 183.1 33.1751 182 33.1751C179.9 33.1751 178.1 32.4751 176.6 30.9751C174.9 29.3751 174 27.3751 174 25.0751C174 23.9751 174.2 22.7751 174.7 21.7751C175.2 20.6751 175.9 19.7751 176.8 18.9751C178.3 17.6751 180 16.9751 182 16.9751C184.2 16.9751 186.1 17.7751 187.7 19.3751C188.3 19.9751 188.8 20.7751 189.2 21.5751C189.6 22.3751 189.8 23.0751 189.8 23.7751C189.8 24.6751 189.5 25.4751 188.8 25.9751C188.5 26.2751 188.1 26.3751 187.7 26.4751C187.3 26.5751 186.7 26.5751 185.8 26.5751H177.8C178.1 27.4751 178.7 28.1751 179.4 28.7751C180.2 29.2751 181.1 29.5751 182 29.5751C183.5 29.5751 184.7 28.9751 185.6 27.8751H189.4ZM186.1 23.3751C185.8 22.4751 185.3 21.8751 184.5 21.2751C183.7 20.7751 182.9 20.4751 181.9 20.4751C180.9 20.4751 180.1 20.7751 179.3 21.2751C178.6 21.7751 178 22.4751 177.6 23.3751H186.1Z" fill="#2D282F"></path>
                                <path d="M201.7 21.275C200.4 20.475 199.1 20.075 197.7 20.075C197 20.075 196.4 20.175 195.9 20.475C195.5 20.775 195.3 21.175 195.3 21.675C195.3 22.175 195.6 22.475 196.1 22.675C196.4 22.775 197.2 23.075 198.6 23.475C199.9 23.875 200.8 24.275 201.3 24.775C202.2 25.575 202.6 26.675 202.6 27.975C202.6 29.675 201.9 31.075 200.6 32.075C199.6 32.775 198.3 33.175 196.7 33.175C195.2 33.175 193.6 32.875 192 32.275V28.575C193.9 29.475 195.5 29.875 196.8 29.875C198.3 29.875 199.1 29.375 199.1 28.275C199.1 27.775 198.9 27.475 198.6 27.275C198.3 27.075 197.6 26.775 196.4 26.475C194.7 25.975 193.6 25.475 192.9 24.775C192.1 23.975 191.7 22.975 191.7 21.875C191.7 20.375 192.3 19.075 193.6 18.075C194.6 17.275 195.9 16.875 197.5 16.875C198.7 16.875 200.1 17.175 201.6 17.675V21.275H201.7Z" fill="#2D282F"></path>
                                <path d="M215.1 21.275C213.8 20.475 212.5 20.075 211.1 20.075C210.4 20.075 209.8 20.175 209.3 20.475C208.9 20.775 208.7 21.175 208.7 21.675C208.7 22.175 209 22.475 209.5 22.675C209.8 22.775 210.6 23.075 212 23.475C213.3 23.875 214.2 24.275 214.7 24.775C215.6 25.575 216 26.675 216 27.975C216 29.675 215.3 31.075 214 32.075C213 32.775 211.7 33.175 210.1 33.175C208.6 33.175 207 32.875 205.4 32.275V28.575C207.3 29.475 208.9 29.875 210.2 29.875C211.7 29.875 212.5 29.375 212.5 28.275C212.5 27.775 212.3 27.475 212 27.275C211.7 27.075 211 26.775 209.8 26.475C208.1 25.975 207 25.475 206.3 24.775C205.5 23.975 205.1 22.975 205.1 21.875C205.1 20.375 205.7 19.075 207 18.075C208 17.275 209.3 16.875 210.9 16.875C212.1 16.875 213.5 17.175 215 17.675V21.275H215.1Z" fill="#2D282F"></path>
                                <path d="M233.8 27.8751C233.4 28.8751 232.9 29.7751 232.3 30.4751C231.5 31.2751 230.6 31.9751 229.6 32.4751C228.5 32.9751 227.5 33.1751 226.4 33.1751C224.3 33.1751 222.5 32.4751 221 30.9751C219.3 29.3751 218.4 27.3751 218.4 25.0751C218.4 23.9751 218.6 22.7751 219.1 21.7751C219.6 20.6751 220.3 19.7751 221.2 18.9751C222.7 17.6751 224.4 16.9751 226.4 16.9751C228.6 16.9751 230.5 17.7751 232.1 19.3751C232.7 19.9751 233.2 20.7751 233.6 21.5751C234 22.3751 234.2 23.0751 234.2 23.7751C234.2 24.6751 233.9 25.4751 233.2 25.9751C232.9 26.2751 232.5 26.3751 232.1 26.4751C231.7 26.5751 231.1 26.5751 230.2 26.5751H222.2C222.5 27.4751 223.1 28.1751 223.8 28.7751C224.6 29.2751 225.5 29.5751 226.4 29.5751C227.9 29.5751 229.1 28.9751 230 27.8751H233.8ZM230.6 23.3751C230.3 22.4751 229.8 21.8751 229 21.2751C228.2 20.7751 227.4 20.4751 226.4 20.4751C225.4 20.4751 224.6 20.7751 223.8 21.2751C223.1 21.7751 222.5 22.4751 222.1 23.3751H230.6Z" fill="#2D282F"></path>
                                <g class="left-str" transform="translate(0,0)">
                                    <path class="dot1-animation" d="M103.5 35.575H98.6C97.9 35.575 97.3 36.175 97.3 36.875C97.3 37.575 97.9 38.1749 98.6 38.1749C98.6 38.1749 100.9 38.1749 102.3 38.1749C102.3 39.5749 102.3 41.975 102.3 41.975C102.3 42.675 102.9 43.275 103.6 43.275C104.3 43.275 104.9 42.675 104.9 41.975V36.875C104.9 36.575 104.8 36.175 104.5 35.975C104.2 35.675 103.8 35.575 103.5 35.575Z" fill="#7E7E80"></path>
                                    <path class="dot2-animation" d="M99.9999 42.175C99.4999 42.675 98.7 42.675 98.2 42.175C97.7 41.675 97.7 40.875 98.2 40.375C98.7 39.875 99.4999 39.875 99.9999 40.375C100.5 40.875 100.5 41.675 99.9999 42.175Z" fill="#7E7E80"></path>
                                    <path class="dot3-animation" d="M96.8 45.4751C96.3 45.9751 95.5 45.9751 95 45.4751C94.5 44.9751 94.5 44.175 95 43.675C95.5 43.175 96.3 43.175 96.8 43.675C97.3 44.175 97.3 44.9751 96.8 45.4751Z" fill="#7E7E80"></path>
                                    <path class="dot4-animation" d="M93.4999 48.675C92.9999 49.175 92.2 49.175 91.7 48.675C91.2 48.175 91.2 47.375 91.7 46.875C92.2 46.375 92.9999 46.375 93.4999 46.875C93.9999 47.375 93.9999 48.175 93.4999 48.675Z" fill="#7E7E80"></path>
                                </g>
                                <g class="right-str" transform="translate(0,0)">
                                    <path class="dot1-animation" d="M132.4 7.175V12.275C132.4 12.575 132.5 12.975 132.8 13.175C133 13.375 133.4 13.575 133.7 13.575H138.6C139.3 13.575 139.9 12.975 139.9 12.275C139.9 11.575 139.3 10.975 138.6 10.975C138.6 10.975 136.3 10.975 134.9 10.975C134.9 9.575 134.9 7.175 134.9 7.175C134.9 6.475 134.3 5.875 133.6 5.875C132.9 5.875 132.4 6.475 132.4 7.175Z" fill="#7E7E80"></path>
                                    <path class="dot2-animation" d="M137.1 6.875C137.6 6.375 138.4 6.375 138.9 6.875C139.4 7.375 139.4 8.175 138.9 8.675C138.4 9.175 137.6 9.175 137.1 8.675C136.6 8.175 136.6 7.375 137.1 6.875Z" fill="#7E7E80"></path>
                                    <path class="dot3-animation" d="M140.4 3.57495C140.9 3.07495 141.7 3.07495 142.2 3.57495C142.7 4.07495 142.7 4.87495 142.2 5.37495C141.7 5.87495 140.9 5.87495 140.4 5.37495C139.9 4.87495 139.9 4.07495 140.4 3.57495Z" fill="#7E7E80"></path>
                                    <path class="dot4-animation" d="M143.6 0.375C144.1 -0.125 144.9 -0.125 145.4 0.375C145.9 0.875 145.9 1.675 145.4 2.175C144.9 2.675 144.1 2.675 143.6 2.175C143.2 1.675 143.2 0.875 143.6 0.375Z" fill="#7E7E80"></path>
                                </g>
                                <path class="down-line-animation" d="M117.8 39.975C114 39.975 110.3 38.575 107.4 36.075L106.6 37.075C109.7 39.775 113.7 41.275 117.9 41.275C122 41.275 126 39.775 129.2 37.075L128.4 36.075C125.3 38.675 121.6 39.975 117.8 39.975Z" fill="#7E7E80"></path>
                                <path class="top-line-animation" d="M104.8 13.075L105.8 13.875C108.8 10.375 113.2 8.27496 117.9 8.27496C122.5 8.27496 126.9 10.275 130 13.875L131 13.075C127.7 9.27495 123 7.07495 118 7.07495C112.8 7.07495 108 9.27495 104.8 13.075Z" fill="#7E7E80"></path>
                                <path d="M119.5 25.0751C119.5 25.9751 118.8 26.6751 117.9 26.6751C117 26.6751 116.3 25.9751 116.3 25.0751C116.3 24.1751 117 23.4751 117.9 23.4751C118.7 23.4751 119.5 24.1751 119.5 25.0751Z" fill="#2D282F"></path>
                            </svg></a></div>
                    <div class="header-navigation">
                        <div class="header-navigation-backdrop"></div>
                        <div class="close-mobile-navigation"></div>
                        <div class="header-navigation-container">
                            <div class="header-navigation-header">
                                <div class="header-avatar"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/avatar.png" alt=""></div>
                                <div class="header-button"><a class="button-header button-header--green" href="https://www.superscommesse.it/registrazione_fast.html">Registrati</a><a class="button-header button-header--default" href="https://www.superscommesse.it/login.html">Accedi</a></div>
                            </div>
                            <div class="header-navigation-ovewflow">
                                <ul id="navigation">
                                    <?php
                                    wp_nav_menu([
		                                    'theme_location'  => 'header_menu',
		                                    'container'       => false,
		                                    'menu_id'         => '',
		                                    'items_wrap'      => '%3$s',
	                                    ]
                                    );
                                    ?>
                                </ul>
                            </div>
                            <div class="header-navigation-footer"><a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg" alt=""></a></div>
                        </div>
                        <div class="header-navigation-footer"><a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg" alt=""></a></div>
                    </div>
                </div><span class="mobile-filter-button"></span>
            </div>
            <!-- .header-bottom-->
            <script>
                document.querySelector('.mobile-menu-button').addEventListener('click', function(){
                    document.querySelector('.header-navigation').classList.add('visible');
                    return false;
                });
                document.querySelector('.close-mobile-navigation').addEventListener('click', function(){
                    document.querySelector('.header-navigation').classList.remove('visible');
                    return false;
                });
                document.querySelector('.header-navigation-backdrop').addEventListener('click', function(){
                    document.querySelector('.header-navigation').classList.remove('visible');
                    return false;
                });
            </script>
        </header>

	<div id="content" class="site-content">
