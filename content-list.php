<?php 
    global $sw;
    $sw++;
?>

<tr>
    <td id="firsttd"><?php echo $sw; ?></td>
    <td><?php the_time('M j, Y') ?></td>
    <td><?php the_author_posts_link(); ?></td>
    <td><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></td>
</tr>