<!-- File: src/Template/Articles/index.ctp -->





<?php foreach ($headers as $header): ?>

    
         
            
            

    
    
          
        
<?php    
$cakeDescription = 'zogravity';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('zogravity.css') ?>
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="/img/">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div id="main">
        
          <div id ="header">
            <div class="header_menu">
                <div class="zg_logo"><?= $this->Html->image('logo1.png') ?>
                    </div>
                   <div class="bar_mobile"> 
                                    <i class="fa-solid fa-bars js-open-bar"></i>
                        
                                     
                                    <div class="list_menu js-bar">
                                        <i class="fa-solid fa-xmark js-close-bar"></i>
                                        <img src="/img/logo/z0_Gravity_Logo_Couleur.png" alt="" class="none">
                                        <div class="l"><a href=""><?= __('ENTREPRISES') ?></a></div>
                                        <div class="l"><a href=""><?= __('SECTEUR PUBLIC') ?></a></div>
                                        <div class="l"><a href=""><?= __('À PROPOS') ?></a></div>
                                        <div class="l"><a href=""><?= __('CONTACT') ?></a></div>
                                        <div class="l"><a href=""><?= __('BLOG') ?></a></div>
                                        <div class="l none"><a href=""><?= __('login') ?></a>
                                        
        
                                        </div>
                            </div>
                            
                        </div>
            </div>
            <?= $this->Html->script('slider.js') ?>
           </div>  
                       

            
<!-- ====================================================================================================================== -->
<div id="lider" style="background-color:<?= $header['background'] ?>">
    
    
       
                     <div class="header_container" >
                            
                            <?= $this->Html->image($header->img) ?>
                                <div class="item_mute"><i class="fa-solid fa-volume-xmark"></i></div>

                            
                                <div class="container_title">
                                        <h1 class="font_blue" style="color: <?= $header['color'] ?>;">  <?= $header['about']?></h1>
                                
                                
                                <div class="container_about">
                                    <p style="color: <?= $header['color'] ?>;"><?= $header['title']?></p>
                                </div>
                                <div class="container_button">
                                    <a href="" style="color: <?= $header['color'] ?>;"><?= __('Descouvrez zO Gravity') ?></a>
                                </div>
                                <div class="container_item">
                                    <i class="fa-solid fa-circle-play"></i><div class="item_vd"><p style="color: <?= $header['color'] ?>;"><?= __('voir la vidéo') ?></p></div>
                                </div>
                            </div>
                                
                    </div>
    <div class="list_slider">                
             <div class="list_item">
             <?php endforeach; ?> 
                            <?php foreach ($datas as $data): ?>
                    

                    


                                        
                            <div class="slide_box1"></div>
                            <div class="slider_content">
                                <div class="slider_titel"><p><?=$data['title'] ?></p>
                                    <div class="next_pre">
                                            <div class="slider_next next" > <i class="fa-solid fa-angle-left"></i></div>
                                            <div class="slider_pre prev" ><i class="fa-solid fa-angle-right"></i></div>
                                    </div>
                                </div>
                                    <div class="slider_h1"><?= $this->Html->image($data->logo) ?></div>
                                    <div class="slider_about"><?= __($data['about'])?></div>
                                    <div class="slider_note">
                                        <div class="note"><a href=""><?= $data['author']?><?= $data['dress']?></a></div> 
                                        <div class="cycle"><a href="<?= $data['link']?>"><?=__('Lire l’article')?><i class="fa-solid fa-arrow-up-right-from-square"></i></a></div> 
                                    </div>
                                    <div class="slide_box2"></div>
                            
                            
             </div>                               
    
    
    </div>
   
    <!-- ============== -->

    
    
    <div class="list_item">



                          
            <div class="slide_box1"></div>
            <div class="slider_content">
                <div class="slider_titel"><p><?=$data['title']?></p>
                    <div class="next_pre">
                            <div class="slider_next next" > <i class="fa-solid fa-angle-left"></i></div>
                            <div class="slider_pre prev" ><i class="fa-solid fa-angle-right"></i></div>
                    </div>
                </div>
                    <div class="slider_h1"><?= $this->Html->image($data->logo) ?></h1></div>
                    <div class="slider_about"><?= __($data['about'])?></div>
                    <div class="slider_note">
                        <div class="note"><a href=""><?= $data['author']?><?= $data['dress']?></a></div> 
                        <div class="cycle"><a href="<?= $data['link']?>"><?=__('Lire l’article')?><i class="fa-solid fa-arrow-up-right-from-square"></i></a></div> 
                     </div>
                     <div class="slide_box2"></div>
            </div>
            
            
            
                                     
    
    
    </div>

    <!-- ============ -->
     

    <div class="list_item">


                          
            
             <div class="slider_content">
                <div class="slider_titel"><p><?= $data['title'] ?></p>
                    <div class="next_pre">
                            <div class="slider_next next" ><i class="fa-solid fa-angle-left"></i></div>
                            <div class="slider_pre prev" ><i class="fa-solid fa-angle-right"></i></div>
                    </div>
                </div>
                    <div class="slider_h1"><?= $this->Html->image($data->logo) ?></h1></div>
                    <div class="slider_about"><?= __($data['about'])?></div>
                    <div class="slider_note">
                        <div class="note"><a href=""><?= $data['author']?><?= $data['dress']?></a></div> 
                        <div class="cycle"><a href="<?= $data['link']?>"><?=__('Lire l’article')?><i class="fa-solid fa-arrow-up-right-from-square"></i></a></div> 
                     </div>
                     <div class="slide_box2"></div>
            </div>
            
            
            
                                  
    
    
    </div>
</div>
<?php endforeach; ?> 
   
    <script>
    $(document).ready(function(){
    $('.list_slider').slick({
    prevArrow: $('.prev'),
    nextArrow: $('.next'),
    }

    );
    });;
    </script>

</div>

   
         

     <!-- ========================================================================================================================================    -->
<?php foreach ($pours as $pour): ?>
        <div id="content">
            <div class="content_pfc">
                <div class="content_pfc_titel"><?= $pour['logo'] ?></div>
                <div class="content_pfc_text">
                <h4 style="color:#fff";> <?= $pour['about'] ?>  </h4></div>
            </div>
            <div class="content_layout">
                <div class="content_layot_text">
                    <div class="fr"><h1 style="color:#fff"><?= $pour['Notre_engagement'] ?></h1></div>
                    <div class="p"><p><?= $pour['about_notre'] ?></p></div>
                    <div class="last"><h1><?= $pour['note'] ?></h1></div>
                    
                </div>
                <div class="content_layout_inset"><?= $this->Html->image('mo.png') ?></div>
                <div class="content_layot_img"><?= $this->Html->image($pour['layout_img']) ?></div>
            </div>
            <div class="content_about">
                <div class="content_about_title"><?= $pour['title2'] ?></div>
                <div class="content_about_text"><?= $pour['about2'] ?>
                </div>
                <div class="conteant_about_button"><i class="fa-solid fa-play"></i> <a href="<?= $pour['link'] ?>"><?= $pour['bnt'] ?></a></div>
            </div>
            <div class="content_app">
            <?= $this->Html->image('app.jpg') ?>
            </div>   
                                                                           
        </div>



        <div id="news">
            <div class="news1">
                <div class="news_vous_title"><?= __('Vous êtes…') ?></div>
                <div class="news_vous">
                
                    <div class="news_vous_go">
                        <div class="vous_go_item"><i class="fa-solid fa-file-signature" style="color:#049BF7 ;"></i></div>
                        <div class="vous_go_about"><h2><?= __('Une entreprise') ?></h2><p> <?= __('Jouez collectif :<br>') ?> <?= __('fédérez vos équipes autour dun objectif commun.') ?></p></div>
                        <div class="vous_go_button"><a href="" style="color: #fff; text-decoration: none;"><?= __('3,2,1… Go !') ?></a></div>
                    </div>
                    <div class="news_vous_comment">
                        <div class="vous_comment_item"><i class="fa-solid fa-hospital" style="color:#FF7D66 ;"></i></div>
                        <div class="vous_comment_about"><h2><?= __('Une collectivité') ?></h2><p><?= __('Rassemblez les acteurs de <br>votre projet via un logiciel commun !') ?></p></div>
                        <div class="vous_comment_button"><a href="" style="color: #fff; text-decoration: none;"><?= __('Découvrez comment') ?></a></div>
                    </div>
                    <div class="news_vous_commemcons">
                        <div class="vous_commemcons_item"><i class="fa-solid fa-map-location-dot" style="color:#FFD051 ;"></i></div>
                        <div class="vous_commemcons_about"><h2><?= __('Un promeneur') ?></h2><p><?= __('égaré Bienvenue !<br> Installez-vous et laissez-vous guider.') ?></p></div>
                        <div class="vous_commemcons_button"><a href="" style="color: #fff; text-decoration: none;"><?= __('Commençons par ici') ?></a></div>
                    </div>
                </div>
            </div>
            <div class="news_nos">
                <div class="nos_title"><h1><?= __('Nos articles') ?></h1></div>
                <div class="nos_content">
                    <div class="conten_nos1">
                        <div class="conten_nos1_img"><?= $this->Html->image('new2.jpg') ?></div>
                        <div class="conten_nos1_caption"><?= __('Comment choisir<br> votre logiciel de<br> gestion de projet') ?></div>
                        
                        <div class="conten_nos1_time">
                            <div class="conten_nos1_note"><?= __('ENTREPRISES') ?></div>15 min
                        </div>
                        <div class="conten_nos1_about"><?= __('Bien choisir son logiciel de
                             gestion de projet ou son outil de gestion de projet est une question cruciale pour les entreprises.') ?></div>
                        <div class="conten1 nos_btn"><a href=""><?= __('Lire l’article') ?></a></div>
                    </div>
                    <div class="conten_nos2">
                        <div class="conten_nos2_img"><?= $this->Html->image('news3.jpg') ?></div>
                        <div class="conten_nos2_char">
                            <div class="conten_nos2_caption"><?= __('Logiciel de gestion de projet secteur public') ?></div>
                            
                            <div class="conten_nos2_time">
                                <div class="conten_nos2_note"><?= __('SECTEUR PUBLIC') ?></div>10 min
                            </div>
                            <div class="conten_nos2_about"><?= __('z0 Gravity est un logiciel de gestion de projet développé avec et pour des collectivités territoriales. Grâce à son interface simple et son tableau de bord embarqué, ce logiciel de gestion de projet secteur public permet de répondre efficacement aux contraintes de temps et de budget des collectivités territoriales.') ?></div>
                            <div class="conten2 nos_btn"><a href=""><?= __('Lire l’article') ?></a></div>
                        </div>
                    </div>
                    <div class="conten_nos4">
                        <div class="conten_nos4_img"></div>
                        <div class="conten_nos4_caption"><?= __('Logiciel de gestion de projet en ligne SaaS') ?></div>
                        
                        <div class="conten_nos4_time">
                            <div class="conten_nos4_note"><?= __('PMO') ?></div>8 min
                            
                        </div>
                        <div class="conten_nos4_about"><?= __('La gestion d’un projet implique en réalité de réaliser une succession de tâches très différentes pour l’entreprise et qu’il faut, bien souvent, mener de front : planification, répartition des ressources, des tâches, activités de reporting, suivi de l’avancée des projets, de la consommation des budgets, etc.') ?></div>
                        <div class="conten4 nos_btn"><a href=""><?= __('Lire l’article') ?></a></div>
                    </div>

                    <div class="conten_nos3">
                        <div class="conten_nos3_img"></div>
                        <div class="conten_nos3_caption"><?= __('7 conseils clés pour bien s’équiper d’un outil de gestion de projet') ?></div>
                        
                        <div class="conten_nos3_time">
                            <div class="conten_nos3_note"><?= __('CLIENT') ?></div>12 min
                        </div>
                        <div class="conten_nos3_about"><?= __('Vous avez décidé qu’il était temps d’investir dans un outil de gestion de projet pour votre entreprise ? Vous souhaitez gagner en productivité et en efficacité dans la gestion de vos affaires courantes et, par la même occasion, en faire profiter tous les services ? C’est une très bonne idée.') ?></div>
                        <div class="conten3 nos_btn"><a href=""><?= __('Lire l’article') ?></a></div>
                    </div>
                </div>
                <div class="button_content1 button"><a href=""><?= __('Voir tous les articles') ?></a></div>
                <div class="conten_titlel_last">
                    <h1><?= __('Assez parlé de nous.') ?></h1>
                      <p><?= __('Parlez-nous de vous !') ?></p>
                </div>
                <div class="button_content2 button"><a href=""><?= __('On discute !') ?></a></div>
            </div>
        </div>


        <div id="footer">
            <div class="footer_menu">
                <div class="footer_logo">
                    <div class="logo_img"><img src="https://www.z0gravity.com/storage-z0G/2019/05/z0_Gravity_Logo_BlancBleu-1.svg" alt=""></div>
                    <div class="logo_slogan"><?= __('Ensemble, on va plus loin.') ?></div>
                </div>
                <div class="footer_list">
                    <ul>
                        <li><?= __('Entreprises') ?></li>
                        <li><?= __('Collectivités') ?></li>
                        <li><?= __('À propos') ?></li>
                        <li><?= __('Contact') ?></li>
                        <li><?= __('Blog') ?></li>
                    </ul>
                </div>
                <div class="footr_infor">
                    <div class="infor_img">
                        <div class="information"><?= __('SUIVEZ-NOUS') ?></div>
                        <div class="img_info"><i class="fa-brands fa-facebook-f"></i>
                                              <i class="fa-brands fa-twitter"></i>
                                              <i class="fa-brands fa-vimeo-v"></i>
                        </div>
                    </div>
                    <div class="setting button "><button href="" class="js-open-model"><i class="fa-solid fa-earth-asia"> </i><?= __('changer de région') ?></button></div>
                </div>
            </div>
            <div class="footer_last">
                
                    <a><?= __('© 2019 Globalsi SAS') ?></a>
                     <a><?= __('Plan du site') ?></a>
                    <a><?= __('Contactez-nous') ?></a>
                    <a><?= __('Mentions légale') ?></a>
            </div>
    </div>
        <div class="model js-model">
            <div class="set_changer">
                <div class="chenger_tille">
                    <h2><?= __('Changer de région') ?></h2>
                    <i class="fa-solid fa-xmark js-close-model" style="cursor: pointer;"></i>
                </div>
                <div class="chenger_about">
                    <?= __('Si vous sélectionnez une autre région,
                     la langue et le contenu de z0gravity.com changeront.') ?>
                </div>
                <div class="langue">
                      
                                                            <?php
                                      

                                        echo $this->Form->create(NULL,array('url'=>'/locale'));
                                        echo $this->Form->radio("locale",
                                            [
                                                ['value'=>'en_US','text'=>'English'],
                                                ['value'=>'es','text'=>'spanish'],
                                                ['value'=>'vi','text'=>'VietNam'],
                                                
                                                
                                            ]
                                        );
                                        echo $this->Form->button('Change Language');
                                        echo $this->Form->end();
                                        ?>
                    <!-- <ul>
                    <div class="ul">
                        <li>Deutsch </li>     
                        <li>English </li>
                        <li>Español </li>
                    </div>
                    <div class="ul">
                        <li>Français </li>
                        <li>Nederlands</li>
                        <li>Polski </li>
                        
                    </div>
                    <div class="ul">
                        <li>Русский</li>
                        <li>Bokmål</li>
                        <li>Ελληνικά </li>
                    </div>
                    <div class="ul">
                        <li>Português </li>
                        <li>日本語</li>
                        <li>繁體中文</li>
                    </div>
                    </ul>
                </div>
            </div> -->

        </div>
        <?= $this->Html->script('changer.js') ?>
        <!-- <script>
                const openMdal = document.querySelector('.js-open-model')
                const settingChanger = document.querySelector('.js-model')
                const closeMdal = document.querySelector('.js-close-model')
                function showChanger(){
                    settingChanger.classList.add('open')
                }
                function hideChanger(){
                    settingChanger.classList.remove('open')
                }
                openMdal.addEventListener('click', showChanger)
                closeMdal.addEventListener('click', hideChanger)

        </script> -->
  
</body>
</html>

<?php endforeach; ?> 