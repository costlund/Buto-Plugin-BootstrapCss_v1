<?php
class PluginBootstrapCss_v1{
  public static function widget_include(){
    $element = array();
    $element[] = wfDocument::createHtmlElement('link', null, array('href' => '/plugin/bootstrap/css_v1/bootstrap_css.css', 'type' => 'text/css', 'rel' => 'stylesheet'));
    wfDocument::renderElement($element);
  }
}