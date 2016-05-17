<?php
function annonces_posts_type(){
  $labels_annonces_post_type_array = array(
            'name'                  =>  __('Annonces', 'onceupponawatch'),
            'singular_name'         =>  __('Annonces', 'onceupponawatch'),
            'add_new'               =>  __('Ajouter une astuce', 'onceupponawatch'),
            'add_new_item'          =>  __('Ajouter une astuce', 'onceupponawatch'),
            'edit_item'             =>  __('Editer l\'astuce', 'onceupponawatch'),
            'new_item'              =>  __('Nouvelle astuce', 'onceupponawatch'),
            'view_item'             =>  __('Visualiser l\'astuce', 'onceupponawatch'),
            'search_items'          =>  __('Rechercher une astuce', 'onceupponawatch'),
            'not_found'             =>  __('Aucune astuce', 'onceupponawatch'),
            'not_found_in_trash'    =>  __('Aucune astuce dans la corbeille', 'onceupponawatch'),
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

        $labels_serie = array(
		'name'              => _x('Catégorie', 'taxonomy general name'),
		'singular_name'     => _x('Catégorie', 'taxonomy singular name'),
		'search_items'      => __('Rechercher une catégorie'),
		'all_items'         => __('Toutes les catégories'),
		'edit_item'         => __('Éditer une catégories'),
		'update_item'       => __('Mettre à jour une catégorie'),
		'add_new_item'      => __('Ajouter une catégorie'),
		'new_item_name'     => __('Nouvelle catégorie'),
		'menu_name'         => __('Catégories'),
    	);

    	// register taxonomy
    	register_taxonomy( 'annonces', 'annonces', array(
    		'hierarchical' => true,
    		'labels' => $labels_serie,
    		'query_var' => true,
    		'show_admin_column' => true,
        'rewrite' => 'slug'
    	) );

      }

      add_action('init','annonces_posts_type', 1);
