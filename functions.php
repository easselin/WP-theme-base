<?php
function get_ID_by_slug($page_slug) {
    //$page = get_page_by_path($page_slug);
    global $wpdb;
    $my_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '{$page_slug}'");

    if ($my_id) {
        return $my_id;
    } else {
        return null;
    }
}

function is_child_of($pageID) { 
	global $post; 
	if( is_page() && ($post->post_parent==$pageID) ) {
    return true;
	} else { 
    return false; 
	}
}

// Get the current category id
function get_current_category_id() {
  if(is_category()) {
    $currentCategoryName = single_cat_title("", false);
    $categories = get_the_category();
    foreach($categories as $category){
        if($category->cat_name == $currentCategoryName){
            //$currentCategory = $category;
            $currentCategoryId = $category->cat_ID;
            //$currentCategorySlug = $category->category_nicename;
        }
    }
    return $currentCategoryId;
  } else {
    return -1;
  }
}

// Get the current category id
function get_current_category_parent_id() {
  if(is_category()) {
    $currentCategoryName = single_cat_title("", false);
    $categories = get_the_category();
    foreach($categories as $category){
        if($category->cat_name == $currentCategoryName){
            $currentCategory = $category;
            $parentCategoryId = $category->category_parent;
        }
    }
    return $parentCategoryId;
  } else {
    return -1;
  }
}

function get_cat_id_by_slug($slug) {
  $catId = get_term_by( 'slug', $slug, 'category' );
  return $catId->term_id;
}

// in category template, test if queried category is child of another category
function cat_is_child_of($catId) {
	global $post; 
	return ( cat_is_ancestor_of( $catId,  get_current_category_id() ) );
}

?>