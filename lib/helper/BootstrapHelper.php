<?php

/**
 * Returns a link using Bootstrap button style
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