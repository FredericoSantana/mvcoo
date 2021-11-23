<?php
/**
 * ##############
 * ### STRING ###
 * ##############
 */

/**
 * @param string $string
 * @return string
 */
function str_slug(string $string): string
{
  $string = filter_var(mb_strtolower($string), FILTER_SANITIZE_STRIPPED);
  $formats = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]/?;:.,\\\'<>°ºª';
  $replace = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                 ';

  return str_replace(["-----", "----", "---", "--"], "-", str_replace(" ", "-",
    trim(strtr(utf8_decode($string), utf8_decode($formats), $replace))));
}

function str_studly_case(string $string): string
{
  $string = str_slug($string);
  return str_replace(" ", "",
    mb_convert_case(str_replace("-", " ", $string), MB_CASE_TITLE)
  );
}

function str_camel_case(string $string): string
{
  return lcfirst(str_studly_case($string));
}