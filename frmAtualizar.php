<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title> Atualizar Dados </title>
                <meta charset="UTF-8">
	        <!--<meta HTTP-EQUIV="refresh" CONTENT="1">-->
		<!-- Inclus�o do Jquery -->
		<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js" ></script>-->
                <script type="text/javascript" src="js/jquery.min.js"></script>
		<!-- Inclus�o do Jquery Validate -->
		<!--<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.6/jquery.validate.js" ></script>-->
                <script type="text/javascript" src="js/validate.js"></script>
		<!-- Valida��o do foruml�rio -->
		<script type="text/javascript">
			$(document).ready(function(){
						 
			    $('#meu_form').validate({
			   
					rules:{ 
						login:{ 
                                                    required: true,
                                                    remote: 'includes/verificaemail.php'
                                                    },//,
                                                conflogin:{
                                                  required: true,
                                                  equalTo: "#login"
                                                },                                
                                             senha:{ 
                                                 required: true
                                                 },
                                              confsenha:{ 
                                                 required: true,
                                                 equalTo: "#senha"
                                                 },
                                               
                                                    /*código meu*/
                                             termos: "required"
                                        /*fim código meu*/
					},
                                        
                                      
					messages:{
						login:{ 
                                                     required: 'Este Campo &eacute; obrigat&oacute;rio' , 
                                                     remote: '<font color="red">Este Login j&aacute; est&aacute; em uso.</font>'},//,
                                                conflogin:{
                                                       required: 'O campo confirmação de email é obrigat&oacute;rio',
                                                       equalTo: '<font color="red">O campo confirmação de email deve ser identico ao campo email.</font>'
                                                     },
                                                senha:{ 
                                                       required: 'Este Campo &eacute; obrigat&oacute;rio' 
                                                      },
                                                confsenha:
                                                      { 
                                                         required: 'Este Campo &eacute; obrigat&oacute;rio', 
                                                         equalTo:  '<font color="red">O campo confirmação de senha deve ser identico ao campo senha.</font>'
                                                      },
					      
                                             
					});
			
                                    });
			
			
					
					window.onload = function() {
					
                    // $('#login').keypress function(){alert("");});
					  
                       $("#login").keypress(function() {

					     $('div.loader').show();
                     });
									
                       $("#login").focusout(function() {

					     $('div.loader').hide();
                     });									
					 $("#login").keyup(function() {
                       $('div.loader').hide();
                     });
			}
            
	</script>
                
 </head>
<body>
    
   

<form id="meu_form" action="inserir.php" method="post" >
           
		<!--Login:<br />-->
                <h3> Dados Pessoais </h3>     
                <label> Nome completo: </label><br/>
                <input type="text" name="nome" id="nome"/><br/>
                <br/>
                <label> Celular: </label><br/>
                <input type="text" name="celular" size="1" maxlength="2" />       
                <input type="text" name="celular" id="celular" size="8" maxlength="9" /><br/> 
                 
                  
                  <h3> Meu endereço </h3>
               
                <label> CEP: </label> <br/>
                <input type="text" name="cep" id="cep" />
                <br />  
                <label> Endereço: </label> <br/>
                <input type="text" name="endereço" id="endereço" />
                <br />
                <label> Bairro: </label> <br/>
                <input type="text" name="bairro" id="cidade"  />  
                <br /> 
                <label> Cidade: </label> <br/>
                <input type="text" name="cidade" id="cidade"  />  
                <br /> 
                <label> UF: </label> <br/>
                <select>
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="AP">AP</option>
                <option value="AM">AM</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option> 
                <option value="DF">DF</option> 
                <option value="ES">ES</option> 
                <option value="GO">GO</option> 
                <option value="MA">MA</option>
                <option value="MT">MT</option> 
                <option value="MS">MS</option> 
                <option value="MG">MG</option> 
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PR">PR</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RS">RS</option>
                <option value="RO">RO</option> 
                <option value="RR">RR</option>
                <option value="SC">SC</option>
                <option value="SP">SE</option> 
                <option value="SE">SP</option>
                <option value="TO">TO</option>
                </select> 
                       <br />
                  <h3> Tipo de cadastro </h3>
                  <input type="radio" name="tipo" value=""/><label> Usuário </label><br/> 
                  <input type="radio" name="tipo" value=""/> <label> Doador </label><br/>
                  <input type="radio" name="tipo" value=""/><label> Doador e usuário </label><br/> 
                <br/>
                <label>Digite um email válido:</label><br/>
                <input type="email" name="login" id="login" />
		<br />
                  <label>Confirme o  email:</label><br/>
                <input type="email" name="conflogin" id="conflogin" />
		<br />
		Senha:<br />
		<input type="password" name="senha" id="senha"/><br />
                <label>Confirme a Senha:</label><br /> 
                <input type="password" name="confsenha" id="confsenha"/><br />

		<input type="submit" value="Atualizar" onClick="return Validacao()"/>

	</form>
<br/><br/>


		 <div class="loader" style="display: none;"><img src="images/loader.gif" alt="Carregando" /></div>
                 
</body>
</html>