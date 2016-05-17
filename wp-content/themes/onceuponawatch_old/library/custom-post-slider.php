<?php
function annonces_posts_type(){
  $labels_annonces_post_type_array = array(
            'name'                  =>  __('Annonces', 'onceupponawatch'),
            'singular_name'         =>  __('Annonces', 'onceupponawatch'),
            'add_new'               =>  __('Ajouter une annonce', 'onceupponawatch'),
            'add_new_item'          =>  __('Ajouter une annonce', 'onceupponawatch'),
            'edit_item'             =>  __('Editer l\'annonce', 'onceupponawatch'),
            'new_item'              =>  __('Nouvelle annonce', 'onceupponawatch'),
            'view_item'             =>  __('Visualiser l\'annonce', 'onceupponawatch'),
            'search_items'          =>  __('Rechercher une annonce', 'onceupponawatch'),
            'not_found'             =>  __('Aucune annonce', 'onceupponawatch'),
            'not_found_in_trash'    =>  __('Aucune annonce dans la corbeille', 'onceupponawatch'),
            'parent_item_colon'     =>  __('--', 'onceupponawatch'),
            'menu_name'             =>  __('Annonces', 'onceupponawatch')
        );
        $supports_annonces_post_type_array = array(
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'comments',
            'revisions'
        );
        $rewrite_annonces_post_type_array = array(
            'slug'          =>  _x('annonces', 'Pour les collections', 'foundationpress'),
            'with_front'    =>  false,
            'feeds'         =>  true,
            'pages'         =>  true
        );
        $args_annonces_post_type_array = array(
            'labels'                =>  $labels_annonces_post_type_array,
            'description'           =>  __('Contenu complet Projets', 'onceupponawatch'),
            'public'                =>  true,
            'publicly_queryable'    =>  true,
            'menu_position'         =>  50,
            'menu_icon'             =>  'dashicons-megaphone',
            'capability_type'       =>  'post',
            'supports'              =>  $supports_annonces_post_type_array,
            'rewrite'               =>  $rewrite_annonces_post_type_array,
            'show_in_nav_menus'     =>  true,
            'hierarchical'          =>  true,
            'has_archive'           =>  true
        );
        register_post_type('annonces', $args_annonces_post_type_array);

      }

      add_action('init','annonces_posts_type', 1);
