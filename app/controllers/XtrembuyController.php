<?php

class XtrembuyController extends BaseController
{
  protected $layout="XtremBuy.Layouts.master";
  private $name;
  public function getIndex(){
      //return $this->layout->content=View::make("XtremBuy.index");

      return Redirect::to('/home');
  }
  public function getHome(){
      return $this->layout->content=View::make("XtremBuy.index");
  }

  public function postIngresar(){
    $usuario=Input::get("email");
    $password=Input::get("password");
    $datos=array("correo_elect"=>$usuario,"contrasenia"=>$password);

if(Auth::attempt($datos)){

    return "es valido";
}else{
    return"no es valido";
}

    /*$reglas=array(
       'email'=>'required,exists:usuarios,correo_elect',
       'password'=>'required'
    );
*/

     // return "post de noticias";
  }
  public function getAuthentic($hash){
      $decrypted = Crypt::decrypt($hash);

      $usuario=Usuarios::where("nom_usuario","=",$decrypted)->update(array('estado'=>'1'));

      return Redirect::to('/home');
  }
  public function getRegistrarse(){
      return $this->layout->content=View::make("XtremBuy.registrarse");
  }
   public function postRegistrarse(){
       $inputs=Input::All();

       $reglas=array(
           'Nombre_de_Usuario'=>'required|min:3|unique:usuarios,nom_usuario',
           'contraseña'=>'required|min:5',
           'confirmar_contraseña'=>'required|same:contraseña',
           'nombres'=>'required|min:3',
           "apellidos"=>'required|min:3',
           "Correo"=>'required|email|unique:usuarios,correo_elect',
           "confirmar_correo"=>'required|email|same:Correo',
           "dni"=>'required|numeric|digits:8'

       );
       $mensajes=array(
         'required'=>'Este campo es obligatorio',
         'min'=>'Debe tener como minimo 3 caracteres',
         'email'=>'El formato de correo no es valido',
       );
       $validar=Validator::make($inputs,$reglas,$mensajes);
       if($validar->fails()){

           return Redirect::back()->withErrors($validar);
       }else{

           $fecha_nac=$inputs["anio"]."-".$inputs["mes"]."-".$inputs["dia"];
            $this->name=$inputs["Nombre_de_Usuario"];
           $usuarios=new Usuarios();
           $usuarios->nom_usuario=$inputs["Nombre_de_Usuario"];
           $usuarios->contrasenia=Hash::make($inputs["contraseña"]);
           $usuarios->rep_contrasenia=Hash::make($inputs["confirmar_contraseña"]);
           $usuarios->nombre=$inputs["nombres"];
           $usuarios->apellido=$inputs["apellidos"];
           $usuarios->correo_elect=$inputs["Correo"];
           $usuarios->confir_correo=$inputs["confirmar_correo"];
           $usuarios->genero=$inputs["genero"];
           $usuarios->fecha_nac=$fecha_nac;
           $usuarios->estado="0";

           $usuarios->save();

           Session::flash('mensaje','Se Registro Correctamente por favor revise su correo para confirmar su cuenta');

           Mail::send('XtremBuy.mensaje', array('nombre'=>Input::get('nombres'),'nom_user'=>Input::get('Nombre_de_Usuario')), function($message){
               $message->to(Input::get('Correo'), Input::get('nombres').' '.Input::get('apellidos'))->subject('Bienvenido a XtremBuy! Confirma tu correo y activa tu cuenta!');
           });
          return Redirect::to('registrarse');
       }
   }
}