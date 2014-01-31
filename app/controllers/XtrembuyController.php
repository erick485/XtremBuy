<?php

class XtrembuyController extends BaseController
{
  protected $layout="XtremBuy.Layouts.master";

  public function getIndex(){
      //return $this->layout->content=View::make("XtremBuy.index");

      return Redirect::to('home');
  }
  public function getHome(){
      return $this->layout->content=View::make("XtremBuy.index");
  }
  public function getNoticias(){
      return "Hola Noticias";
  }
  public function postNoticias(){
      return "post de noticias";
  }
}