@extends("XtremBuy.Layouts.master")

@section("content")
<div class="container">
     <h1 class="page-header">Registrate y Comienza a Jugar</h1>


  <form class="form" role="form">
      <h3>Nombre de Usuario y Contraseña</h3>
         <div class="row">
             <div class="col-md-6">
                 <div class="form-group">
                     <label for="exampleInputEmail1">Nombre de Usuario</label>
                     <input type="email" class="form-control" id="exampleInputEmail1">
                 </div>
             </div>

         </div>
      <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Contraseña</label>
                      <input type="password" class="form-control" id="exampleInputEmail1">
                  </div>
              </div>
          <div class="col-md-6">
              <div class="form-group">
                  <label for="exampleInputEmail1">Confirmar Contraseña</label>
                  <input type="password" class="form-control" id="exampleInputEmail1">
              </div>
          </div>
      </div>
     <h3>Informacion Personal</h3>
      <div class="row">
           <div class="col-md-6">
               <div class="form-group">
                   <label>Nombres</label>
                   <input type="text" class="form-control">
               </div>
           </div>
          <div class="col-md-6">
             <div class="form-group">
                 <label>Apellidos</label>
                 <input type="text" class="form-control">
             </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-6">
              <div class="form-group">
                  <label>Direccion de correo electronico</label>
                  <input type="email" class="form-control">
              </div>
          </div>
          <div class="col-md-6">
              <div class="form-group">
                  <label>Fecha de Nacimiento</label>
                  <div class="row">
                      <div class="col-md-3">
                          <select class="form-control">
                              <option>Enero</option>
                              <option>Febrero</option>
                              <option>Marzo</option>
                              <option>Abril</option>
                              <option>Mayo</option>
                          </select>
                      </div>
                       <div class="col-md-3">

                           <select class="form-control">
                               <option>1</option>
                           </select>
                      </div>
                      <div class="col-md-3">

                          <select class="form-control">
                              <option>1990</option>
                          </select>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-6">
              <div class="form-group">
                  <label>Confirmar correo electronico</label>
                  <input type="email" class="form-control">
              </div>
          </div>
          <div class="col-md-6">
              <div class="form-group">
                  <label>Genero</label>
                  <div class="row">
                  <div class="col-lg-3">
                   <select class="form-control">
                       <option>Maculino</option>
                       <option>Femenino</option>
                   </select>
                  </div>
                  </div>
               </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-6">
              <div class="form-group">
                  <label>Numero de DNI</label>
                  <input type="text" class="form-control">
              </div>
          </div>
      </div>
  </form>
</div>

@stop