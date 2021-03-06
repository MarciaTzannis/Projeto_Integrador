<?php
    include "head.php";
    include "header.php";
?>

<form id="formulario">

    <div class="container" id="wrap">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form action="r" method="post" accept-charset="utf-8" class="form" role="form">
                    <legend><b>Cadastre-se</b></legend>
                    <h4><em>Match Sports, o melhor jeito de encontrar seu parceiro.</em></h4>

                    <div class="form-row">

                        <div class="form-group col-md-12">
                            <label for="name">Nome Completo</label>
                            <input type="text" class="form-control" id="name" placeholder="name">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Senha</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Confirmar Senha</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="inputAddress">Endereço</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Avenida/Rua">
                        </div>

                        <div class="form-group col-md-5">
                            <label for="inputCity">Cidade</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="inputCEP">CEP</label>
                            <input type="text" class="form-control" id="inputCEP">
                        </div>

                        <div class="form-group col-md-5">
                            <label for="inputEstado">Estado</label>
                            <select name="estado">
                                <option value="estado">Selecione o Estado</option>
                                <option value="ac">Acre</option>
                                <option value="al">Alagoas</option>
                                <option value="am">Amazonas</option>
                                <option value="ap">Amapá</option>
                                <option value="ba">Bahia</option>
                                <option value="ce">Ceará</option>
                                <option value="df">Distrito Federal</option>
                                <option value="es">Espírito Santo</option>
                                <option value="go">Goiás</option>
                                <option value="ma">Maranhão</option>
                                <option value="mt">Mato Grosso</option>
                                <option value="ms">Mato Grosso do Sul</option>
                                <option value="mg">Minas Gerais</option>
                                <option value="pa">Pará</option>
                                <option value="pb">Paraíba</option>
                                <option value="pr">Paraná</option>
                                <option value="pe">Pernambuco</option>
                                <option value="pi">Piauí</option>
                                <option value="rj">Rio de Janeiro</option>
                                <option value="rn">Rio Grande do Norte</option>
                                <option value="ro">Rondônia</option>
                                <option value="rs">Rio Grande do Sul</option>
                                <option value="rr">Roraima</option>
                                <option value="sc">Santa Catarina</option>
                                <option value="se">Sergipe</option>
                                <option value="sp">São Paulo</option>
                                <option value="to">Tocantins</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <label>Data de Nascimento</label>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <select name="day" class="form-control input-lg">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                            </div>


                            <div class="form-group col-md-4">
                                <select name="month" class="form-control input-lg">
                                    <option value="01">Jan</option>
                                    <option value="02">Fev</option>
                                    <option value="03">Mar</option>
                                    <option value="04">Abr</option>
                                    <option value="05">Mai</option>
                                    <option value="06">Jun</option>
                                    <option value="07">Jul</option>
                                    <option value="08">Ago</option>
                                    <option value="09">Set</option>
                                    <option value="10">Out</option>
                                    <option value="11">Nov</option>
                                    <option value="12">Dez </option>
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <select name="year" class="form-control input-lg">
                                    <option value="1935">1935</option>
                                    <option value="1936">1936</option>
                                    <option value="1937">1937</option>
                                    <option value="1938">1938</option>
                                    <option value="1939">1939</option>
                                    <option value="1940">1940</option>
                                    <option value="1941">1941</option>
                                    <option value="1942">1942</option>
                                    <option value="1943">1943</option>
                                    <option value="1944">1944</option>
                                    <option value="1945">1945</option>
                                    <option value="1946">1946</option>
                                    <option value="1947">1947</option>
                                    <option value="1948">1948</option>
                                    <option value="1949">1949</option>
                                    <option value="1950">1950</option>
                                    <option value="1951">1951</option>
                                    <option value="1952">1952</option>
                                    <option value="1953">1953</option>
                                    <option value="1954">1954</option>
                                    <option value="1955">1955</option>
                                    <option value="1956">1956</option>
                                    <option value="1957">1957</option>
                                    <option value="1958">1958</option>
                                    <option value="1959">1959</option>
                                    <option value="1960">1960</option>
                                    <option value="1961">1961</option>
                                    <option value="1962">1962</option>
                                    <option value="1963">1963</option>
                                    <option value="1964">1964</option>
                                    <option value="1965">1965</option>
                                    <option value="1966">1966</option>
                                    <option value="1967">1967</option>
                                    <option value="1968">1968</option>
                                    <option value="1969">1969</option>
                                    <option value="1970">1970</option>
                                    <option value="1971">1971</option>
                                    <option value="1972">1972</option>
                                    <option value="1973">1973</option>
                                    <option value="1974">1974</option>
                                    <option value="1975">1975</option>
                                    <option value="1976">1976</option>
                                    <option value="1977">1977</option>
                                    <option value="1978">1978</option>
                                    <option value="1979">1979</option>
                                    <option value="1980">1980</option>
                                    <option value="1981">1981</option>
                                    <option value="1982">1982</option>
                                    <option value="1983">1983</option>
                                    <option value="1984">1984</option>
                                    <option value="1985">1985</option>
                                    <option value="1986">1986</option>
                                    <option value="1987">1987</option>
                                    <option value="1988">1988</option>
                                    <option value="1989">1989</option>
                                    <option value="1990">1990</option>
                                    <option value="1991">1991</option>
                                    <option value="1992">1992</option>
                                    <option value="1993">1993</option>
                                    <option value="1994">1994</option>
                                    <option value="1995">1995</option>
                                    <option value="1996">1996</option>
                                    <option value="1997">1997</option>
                                    <option value="1998">1998</option>
                                    <option value="1999">1999</option>
                                    <option value="2000">2000</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <label>Sexo : </label> <label class="radio-inline">
                                <input type="radio" name="gender" value="M" id=male /> Male
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="gender" value="F" id=female /> Female
                            </label>
                        </div>

                        <div class="form-group col-md-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">Termos e Condições
                                </label>
                            </div>
                        </div>

                        <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit">
                            Criar minha conta</button>
                </form>
            </div>
        </div>
    </div>
    <form>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 3
                },
                600: {
                    items: 6
                },
                1000: {
                    items: 10
                }
            }
        })
        </script>
        <script src="js/main.js"></script>