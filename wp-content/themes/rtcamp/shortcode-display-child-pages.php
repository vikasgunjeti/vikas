<?php
function display_child_pages()
{

$pages = get_pages(
    array(
        'parent' => get_option('page_on_front'), // replaces 'depth' => 1,
    )
);

$child_ids = wp_list_pluck($pages, 'ID');
$total_child_ids= sizeof($child_ids);

$string = '<div class="container second">
  <div class="row">
    <div class="child-page-one-third"> <div class="tab-titles">';
for($i=0 ;$i < $total_child_ids;$i++){
   
    if($i==0){
        $string .= '<li class="active"><a href="#Tab'.$child_ids[$i].'">' . get_the_title($child_ids[$i]) . '</a></li> ';
    }
    else
    {
        $string .= '<li><a href="#Tab'.$child_ids[$i].'">' . get_the_title($child_ids[$i]) . '</a></li>' ;
    }
    }

   
$string .= '</div></div> <div class="child-page-two-third container">';

for($k=0; $k < $total_child_ids; $k++)
{
        $pages = get_pages(
            array(
                'parent' => $child_ids[$k], 
            )
        );
        
        $ids = wp_list_pluck($pages, 'ID');
        $total_ids = sizeof($ids);
        if($k==0)
        {
            $string .= '<div class="tab-content" id="Tab'.$child_ids[$k].'" style="display: block;">';
        }
        else
        {
            $string .= '<div class="tab-content" id="Tab'.$child_ids[$k].'">';
        }
         for($j=0 ;$j < $total_ids; $j++)
        {
                $string .= '<div class="single-child-page-div">';
                $url = get_the_post_thumbnail_url($ids[$j], 'medium');
                $sub_page_title = get_the_title($ids[$j]);
                $sub_page_permalink = get_permalink($ids[$j]);
                $excerpt_text = apply_filters('the_excerpt', get_post_field('post_excerpt', $ids[$j]));
                $string .= '<img src=" '. $url .' " /> <a class="featured-post-title" href="'. $sub_page_title .'"> '.$sub_page_title.'</a> <div class="featured-post-excerpt"> '.$excerpt_text.'</div></div>';
        }
        $string .='</div>';
}
$string .= '</div></div></div>';

return $string;

}

?>