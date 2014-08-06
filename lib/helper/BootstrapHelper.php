<?php

/**
 * Returns HTML with a link using Bootstrap button style
 * @param  string $text       Text for the button
 * @param  string $url        URL
 * @param  string $type       Button type: default, primary, success, info, danger, warning (OPTIONAL)
 * @param  string $size       Button size: sm, xs, lg (OPTIONAL)
 * @param  array  $attributes HTML attributes (OPTIONAL)
 * @return string
 */
function bs_btn_link($text, $url, $type='default', $size=null, $attributes=array())
{
  $classes = '';
  $attributes_str = '';
  if (isset($attributes['class'])){
    $classes .= $attributes['class'];
    unset($attributes['class']);
  }
  foreach ($attributes as $key => $value) {
    $attributes_str .= ' '.$key.'="'.$value.'"';
  }
  $template = '<a class="btn btn-%s %s" href="%s" %s>%s</a>';
  return sprintf(
    $template,
    $type,
    ($size)? 'btn-'.$size.' '.$classes:$classes,
    $url,
    $attributes_str,
    $text
    );
}


/**
 * Returns HTML with alert dismissable
 * @param  string  $text    Alert text content
 * @param  string  $type    Alert type: success, info, danger, warning
 * @param  boolean $dismiss Shows the close button
 * @return string
 */
function bs_alert($text, $type='info', $dismiss=false)
{
  $template = '<div class="alert alert-%s %s" role="alert">%s %s</div>';
  $dismiss_str = '<button type="button" class="close" data-dismiss="alert">&times;</button>';
  return sprintf(
    $template,
    $type,
    ($dismiss)?'alert-dismissible':'',
    ($dismiss)?$dismiss_str:'',
    $text
    );
}

