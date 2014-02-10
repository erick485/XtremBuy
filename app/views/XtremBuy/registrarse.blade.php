@extends("XtremBuy.Layouts.master")

@section("content")

<div class="container">
    @if(Session::has('mensaje'))
    <br>
    <div class="alert alert-success" style="text-align: center;">
        <strong>{{session::get('mensaje')}}</strong>
    </div>

    @endif
     <h1 class="page-header">Registrate y Comienza a Jugar</h1>


  <form method="post" class="form" action="/registrarse" role="form">
      <h3>Nombre de Usuario y Contraseña</h3>
         <div class="row">
             <div class="col-md-6" id="nom_usuario">
                 <div  class="form-group {{$errors->has('nom_usua')? 'has-error':''}}">
                     <label>Nombre de Usuario</label>
                     <input type="text" name="Nombre_de_Usuario" class="form-control">
                     {{$errors->first("nom_usua",'<p class="mensaje-error">:message</p>')}}

                 </div>
             </div>

         </div>
      <div class="row">
              <div class="col-md-6">
                  <div class="form-group {{$errors->has('contraseña')? 'has-error':''}}">
                      <label>Contraseña</label>
                      <input type="password" name="contraseña" class="form-control" >
                      {{$errors->first("contraseña",'<p class="mensaje-error">:message<p>')}}
                  </div>
              </div>
          <div class="col-md-6">
              <div class="form-group {{$errors->has('confirmar_contraseña')? 'has-error':''}}">
                  <label>Confirmar Contraseña</label>
                  <input type="password" name="confirmar_contraseña" class="form-control">
                  {{$errors->first("confirmar_contraseña",'<p class="mensaje-error">:message</p>')}}
              </div>
          </div>
      </div>
     <h3>Informacion Personal</h3>
      <div class="row">
           <div class="col-md-6">
               <div class="form-group {{$errors->has('nombres')? 'has-error':''}}">
                   <label>Nombres</label>
                   <input type="text" name="nombres" class="form-control">
                   {{$errors->first("nombres",'<p class="mensaje-error">:message</p>')}}
               </div>
           </div>
          <div class="col-md-6">
             <div class="form-group {{$errors->has('apellidos')? 'has-error':''}}">
                 <label>Apellidos</label>
                 <input type="text" name="apellidos" class="form-control">
                 {{$errors->first("apellidos",'<p class="mensaje-error">:message</p>')}}

             </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-6">
              <div class="form-group {{$errors->has('correo')? 'has-error':''}}">
                  <label>Direccion de correo electronico</label>
                  <input type="email" name="Correo" class="form-control">
                  {{$errors->first("correo",'<p class="mensaje-error">:message</p>')}}

              </div>
          </div>
          <div class="col-md-6">
              <div class="form-group">
                  <label>Fecha de Nacimiento</label>
                  <div class="row">
                      <div class="col-md-3">
                          <select name="mes" class="form-control">
                              <option value="01">Enero</option>
                              <option value="02">Febrero</option>
                              <option value="03">Marzo</option>
                              <option value="04">Abril</option>
                              <option value="05">Mayo</option>
                              <option value="06">Junio</option>
                              <option value="07">Julio</option>
                              <option value="08">Agosto</option>
                              <option value="09">Setiembre</option>
                              <option value="10">Octubre</option>
                              <option value="11">Noviembre</option>
                              <option value="12">Diciembre</option>
                          </select>
                      </div>
                       <div class="col-md-3">

                           <select name="dia" class="form-control">
                               <option value="01">1</option><option value="02">2</option><option value="03">3</option><option value="04">4</option><option value="05">5</option><option value="06">6</option><option value="07">7</option>
                               <option value="08">8</option><option value="09">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option>
                               <option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option>
                               <option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option>
                               <option value="30">30</option><option value="31">31</option>
                           </select>
                      </div>
                      <div class="col-md-3">
                          <select name="anio" class="form-control">
                              <option value="1996">1996</option>
                              <option value="1995">1995</option>
                              <option value="1994">1994</option>
                              <option value="1993">1993</option>
                              <option value="1992">1992</option>
                              <option value="1991">1991</option>
                              <option value="1990">1990</option>
                              <option value="1989">1989</option>
                              <option value="1988">1988</option>
                              <option value="1987">1987</option>
                              <option value="1986">1986</option>
                              <option value="1985">1985</option>
                              <option value="1984">1984</option>
                              <option value="1983">1983</option>
                              <option value="1982">1982</option>
                              <option value="1981">1981</option>
                              <option value="1980">1980</option>
                              <option value="1979">1979</option>
                              <option value="1978">1978</option>
                              <option value="1977">1977</option>
                              <option value="1976">1976</option>
                              <option value="1975">1975</option>
                              <option value="1974">1974</option>
                              <option value="1973">1973</option>
                              <option value="1972">1972</option>
                              <option value="1971">1971</option>
                              <option value="1970">1970</option>
                              <option value="1969">1969</option>
                              <option value="1968">1968</option>
                              <option value="1967">1967</option>
                              <option value="1966">1966</option>
                              <option value="1965">1965</option>
                              <option value="1964">1964</option>
                              <option value="1963">1963</option>
                              <option value="1962">1962</option>
                              <option value="1961">1961</option>
                              <option value="1960">1960</option>
                              <option value="1959">1959</option>
                              <option value="1958">1958</option>
                              <option value="1957">1957</option>
                              <option value="1956">1956</option>
                              <option value="1955">1955</option>
                              <option value="1954">1954</option>
                              <option value="1953">1953</option>
                              <option value="1952">1952</option>
                              <option value="1951">1951</option>
                              <option value="1950">1950</option>
                              <option value="1949">1949</option>
                              <option value="1948">1948</option>
                              <option value="1947">1947</option>
                              <option value="1946">1946</option>
                              <option value="1945">1945</option>
                              <option value="1944">1944</option>
                              <option value="1943">1943</option>
                              <option value="1942">1942</option>
                              <option value="1941">1941</option>
                              <option value="1940">1940</option>
                              <option value="1939">1939</option>
                              <option value="1938">1938</option>
                              <option value="1937">1937</option>
                              <option value="1936">1936</option>
                              <option value="1935">1935</option>
                              <option value="1934">1934</option>
                              <option value="1933">1933</option>
                              <option value="1932">1932</option>
                              <option value="1931">1931</option>
                              <option value="1930">1930</option>
                              <option value="1929">1929</option>
                              <option value="1928">1928</option>
                              <option value="1927">1927</option>
                              <option value="1926">1926</option>
                              <option value="1925">1925</option>
                              <option value="1924">1924</option>
                              <option value="1923">1923</option>
                              <option value="1922">1922</option>
                              <option value="1921">1921</option>
                              <option value="1920">1920</option>
                              <option value="1919">1919</option>
                              <option value="1918">1918</option>
                              <option value="1917">1917</option>
                              <option value="1916">1916</option>
                              <option value="1915">1915</option>
                              <option value="1914">1914</option>
                          </select>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-6">
              <div class="form-group {{$errors->has('confirmar_correo')? 'has-error':''}}">
                  <label>Confirmar correo electronico</label>
                  <input type="email" name="confirmar_correo" class="form-control">
                  {{$errors->first("confirmar_correo",'<p class="mensaje-error">:message</p>')}}
              </div>
          </div>
          <div class="col-md-6">
              <div class="form-group">
                  <label>Genero</label>
                  <div class="row">
                  <div class="col-lg-3">
                   <select name="genero" class="form-control">
                       <option value="M">Maculino</option>
                       <option value="F">Femenino</option>
                   </select>
                  </div>
                  </div>
               </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-6">
              <div class="form-group {{$errors->has('dni')? 'has-error':''}}">
                  <label>Numero de DNI</label>
                  <input type="text" name="dni" class="form-control">
                  {{$errors->first("dni",'<p class="mensaje-error">:message</p>')}}
              </div>
          </div>
      </div>
      <br>
      <div class="row">
          <div class="col-md-6">
              <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block" style="margin-left: 54%;">Registrarme</button>

              </div>
          </div>

      </div>
  </form>
</div>

@stop