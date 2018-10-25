@extends('layoutFeipobol')
@section('formularios')
<div id="estadisticas" >
  <div class="container">
      <h2 class="h1-responsive font-weight-bold text-center ">RESULTADOS FEIPOBOL 2017</h2>
      <div  class="row">
        <div class="col-md-4 wow zoomIn" data-wow-delay="0.2s">
          <h3>Expositores y stands que participaron</h3>
          <table class="table table-hover">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">DETALLE</th>
                  <th scope="col">STANDS</th>
                </tr>
              </thead>
              <tbody>
                  <tr>
                      <th scope="col">Minería</th>
                      <th scope="col">6</th>
                    </tr>
                <tr>
                  <th scope="col">Industria y Construcción</th>
                  <th scope="col">19</th>
                </tr>
                <tr>
                  <td>Servicios y Comercio</td>
                  <td>32</td>
                </tr>
                <tr>
                  <td scope="col">Gastronomía y Bebidas</td>
                  <td scope="col">30 </td>
                </tr>
                <tr>
                    <th scope="col">Vehículos y Motos</th>
                    <th scope="col">6</th>
                  </tr>
                  <tr>
                    <th scope="col">Empresas Publicas y Turísticas</th>
                    <th scope="col">12</th>
                  </tr>
                  <tr>
                    <td>MIMYPES</td>
                    <td>102</td>
                  </tr>
                  <tr>
                    <td>RSE</td>
                    <td>7 </td>
                  </tr>
              </tbody>
              <tfoot class="bg-info">
                  
                  <tr>
                      <td>TOTAL</td>
                      <td>214</td>
                    </tr>
              </tfoot>
          </table>
          <div class="grafico1" id="grafico1"></div>
        </div>
       <div class="col-md-4 wow zoomIn" data-wow-delay="0.2s">
          <h3>Visitantes</h3>
          <table class="table table-hover">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">DETALLE</th>
                  <th scope="col">NUMERO DE PERSONAS</th>
                </tr>
              </thead>
              <tbody>
                  <tr>
                      <th scope="col">Personas que pagaron su boleto</th>
                      <th scope="col">19000</th>
                    </tr>
                <tr>
                  <th scope="col">Invitados</th>
                  <th scope="col">2577</th>
                </tr>
                <tr>
                  <td>Prensa</td>
                  <td>155</td>
                </tr>
                <tr>
                  <td>Niños</td>
                  <td>7526</td>
                </tr>
                <tr>
                  <th scope="col">Expositores</th>
                  <th scope="col">8720</th>
                </tr>
              </tbody>
              <tfoot class="bg-info">
                  
                  <tr>
                      <td>TOTAL</td>
                      <td>37978</td>
                    </tr>
              </tfoot>
          </table>
          <div class="grafico1" id="grafico2"></div>
        </div>
       <div class="col-md-4 wow zoomIn" data-wow-delay="0.2s">
          <h3>Rueda de negocios</h3>
          <table class="table table-hover">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">DETALLE</th>
                  <th scope="col">TOTAL $us.</th>
                </tr>
              </thead>
              <tbody>
                  <tr>
                      <th scope="col">Construcción</th>
                      <th scope="col">33’908,987.79</th>
                    </tr>
                <tr>
                  <th scope="col">Automotor y Comercio</th>
                  <th scope="col">6’540,133.72</th>
                </tr>
                <tr>
                  <td>Servicios y Banca</td>
                  <td>12’892,904.10</td>
                </tr>
                <tr>
                  <td>MIPYMES</td>
                  <td>3’410,145.48</td>
                </tr>
              </tbody>
              <tfoot class="bg-info">
                  
                  <tr>
                      <td>TOTAL</td>
                      <td>56’716,171.09</td>
                    </tr>
              </tfoot>
          </table>
          <div class="grafico1" id="grafico3"></div>
        </div>

      </div>
  </div>
</div>

@endsection
