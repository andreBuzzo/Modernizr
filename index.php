<!DOCTYPE html>

<html class="no-js" lang="pt-br">

	<head>
		<meta charset="utf-8">
			<title>Biblioteca Modernizr - Documentação Traduzida</title>
			<meta name="description" content="Tradução para o português da Biblioteca Modernizr">
			<meta name="keywords" content="Modernizr, Biblioteca Modernizr, Tradução da Modernizr, Modernizr em português, documentação traduzida da biblioteca modernizr">
			<meta name="author" content="André Buzzo">
			<meta name="robots" content="index, follow">
			<meta name="generator" content="Notepad ++">
			<meta name="language" content="pt-br">
			<link rel="stylesheet" href="style.css">
			<!-- #### JAVASCRIPT #### -->
			<script src="modernizr-2.0.6.js"></script>
			<script src="http://apis.google.com/js/plusone.js"></script>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
			<script src="js/s3Slider.js"></script>
			
			<script>
				<!--
				  function alterar(){
					    document.getElementsById(oque)[0].style.backgroundColor = "#FFFFFF";
						document.getElementsById(oque)[0].style.borderColor = "#000000";        
						document.getElementsById(oque)[0].style.borderWidth = 1;  
				  }
				//-->
			</script>
			
	</head>
		
		<body>
		
			<div id="conteudo">
			
			<section id="sectionDocs">
				<h1>Documentação sobre a Biblioteca Modernizr</h1>
					<span class="creditos">Traduzida por André Buzzo em <time pubdate>17/10/2011</time></span>
						<div class="clear"></div>
					
						<article>
						
							<h2>Geral</h2>
							
							<h3 id="oque">O que é a Modernizr?</h3>
								<p>Modernizr é uma pequena biblioteca JavaScript que detecta a disponibilidade de implementações nativas para a nova geração de tecnologia web, isto é, características que se originam das especificações do HTML5 e CSS3. Muitas dessas características já estão implementadas pelo menos nos mais utilizados Browsers (entenda-se dois ou mais!) e o que a Modernizr faz é, simplesmente, lhe informar quais características já são presentes nativamente ou não em cada um desses browser.</p>
								
									<p>Ao contrário do tradicional – porém altamente recomendável – método de fazer uma “UA sniffing”, que por sua vez detecta o browser por si só usando a propriedade <span class="destaque">navigator.userAgent</span>, a Modernizr realiza uma detecção das características que os browsers podem ou não realizar. Além do mais, a mesma engine de renderização pode não necessariamente suportar as mesmas coisas, e em alguns casos, os usuários mudam sua string userAgent para acessar sites mal desenvolvidos que não os deixam realizar determinadas tarefas.</p>
									
										<p>Modernizr foca-se em acabar com a prática do UA Sniffing. Usar um detector de características é mais confiável mecanicamente para estabelecer o que você poderá ou não desenvolver  em determinado browser, e o Modernizr torna-se conveniente para você em vários aspectos:</p>
										
											<ul class="fonteMenor">
												<li>Realiza um teste de mais de 40 características, tudo em alguns milisegundos;</li>
												<li>Cria um objeto em JavaScript (chamado <span class="destaque">Modernizr</span>) que contém os resultados desses testes com propriedades booleanas;</li>
												<li>Ela adiciona classes no elemento <span class="destaque">html</span> explicando precisamente quais características são e não são nativamente suportadas</li>
												<li>Ela disponibiliza um script carregador que você pode resgatar no <a href="https://github.com/Modernizr/Modernizr/wiki/HTML5-Cross-browser-Polyfills" class="linkCorpo">polyfills</a> para implementá-las em navegadores antigos</li>
											</ul>
												
												<p>Sabendo o que a Modernizr oferece a você, você poderá tirar vantagens dos browsers mais atuais  que podem renderizar ou utilizar essas características, e ainda ter um fácil e confiável método para controlar a situação para os navegadores que não podem exibir tais implementos!</p>
						
						
							
								<h3 id="instalando">Instalando a Modernizr</h3>
									
									<p>No topo da página de <a href="http://www.modernizr.com/download/" class="linkCorpo">Download</a>, selecione as características que você pretende utilizar no seu projeto. Dessa maneira, você irá copiar apenas os códigos que necessita, economizando bites no seu script. Clicando em Generate, você obterá sua biblioteca customizada da Modernizr. Se você não sabe exatamente o que deseja usar, baixe a <a href="http://www.modernizr.com/downloads/modernizr-latest.js" class="linkCorpo">Versão para Desenvolvedores</a> que contém a biblioteca completa, porém não comprimida.</p>
									
										<p>Coloque os scripts dentro das tags <code class="destaque">&lt;head&gt;</code> do seu HTML. Para uma melhor performance você deverá inseri-las logo abaixo de seu link para as folhas de estilo. A razão pela qual pedimos para inserir dentro do head se dá por dois motivos: o HTML Shiv (que inicia os elementos do HTML5 no IE) precisa executar a biblioteca antes do início do <code class="destaque">&lt;body&gt;</code>, e se você estiver usando alguma classe no CSS que a Modernizr inclui, você desejaria se precaver contra um FOUC (do inglês FLASH OF UNSTYLED CONTENT).</p>
</p>
							
							
								
									<h3 id="polyfills">Polyfills e a Modernizr</h3>
									
										<p>O nome “Modernizr” pode lhe trazer alguma lembrança, nós admitimos.  A biblioteca lhe permite utilizar os novos elementos seccionados do HTML5 no IE, além disso, ela não “moderniza” nenhuma outra característica! O nome “Modernizr” ainda se encaixa perfeitamente bem nos scripts que proporcionam suporte quando o suporte nativo dos navegadores é defeituoso. De maneira geral, esses scripts são chamados de polyfills.</p>
										
											<p class="creditos">"polyfill (n): uma saída em JavaScript que replica a API padrão para os navegadores mais antigos”</p>
												
												<div class="clear"></div>
											
													<p>Portanto, um websocket polyfill deverá criar um window.WebSocket global com as mesmas propriedades e métodos em uma implementação nativa. Isso significa que você poderá desenvolver para o futuro, com uma API real, e somente carregar suas compatibilidades nos navegadores que não suportam determinada API ou característica.</p>
												
														<p>E uma excelente notícia para você, <a href="https://github.com/Modernizr/Modernizr/wiki/HTML5-Cross-browser-Polyfills" class="linkCorpo">existe uma polyfill por perto em todas as características do HTML5 que o Modernizr pode detectar</a>. U-hú! Sendo assim, na maioria dos casos, você pode usar características do HTML5 ou CSS3 e pode replicar isso em navegadores que não oferecem suporte a elas! Sim, você não só pode utilizar HTML5 nos navegadores atuais, como pode usar nos navegadores antigos também!</p>
													
															<p>Mas isso nos leva a um grande e gordo aviso: <strong>não é só porque você pode usar um polyfill que você deverá usá-lo</strong>! Você deve entregar a melhor experiência para o usuário sempre que possível, que significa que você deve ser rápido! Carregar 5 scripts compatíveis para o IE7 não é a melhor saída quando esse projeto for carregado em um navegador como o Opera ou o Chrome. Não existem regras rápidas, mas tenha em mente que quanto mais scripts você adiciona para uma página, mais impacto haverá na experiência do usuário. E lembre-se: nenhum dos seus visitantes costuma acessar seu site em vários navegadores; mas é normal se o contrário também acontecer.</p>
															
																<p>Agora, para  entender efetivamente  o uso e serviços dos polyfills para todos os tipos de usuários, leia o &hellip;</p>
								
								
										<h3 id="modernizrLoad">Modernizr.(load) tutorial</h3>
										
											<p><span class="destaque">Modernizr.load</span> é um gestor de recursos (CSS e JavaScript) que foi criado para trabalhar especificamente lado-a-lado com a Modernizr. É opcional ao seu desenvolvimento, mas se estiver carregando polyfills, há uma grande chance em se economizar banda e turbinar a performance.</p>
											
												<p>A <span class="destaque">Modernizr.load</span> é geralmente muito fácil de entender, então começaremos com um exemplo básico:</p>
												
													<div class="preCode">
															<code>
																Modernizr.load({
																test: Modernizr.geolocation,
																yep : 'geo.js',
																nope: 'geo-polyfill.js'
																});
															</code>
													</div>
													
														<p>Nesse exemplo, decidimos que deveríamos carregar um script diferente dependendo da geolocalização  suportada pelo navegador ou não. Fazendo isso, você não deixará que alguns usuários façam o donwload de códigos que seu navegador não necessite. Isso aumenta a performance da página e oferece claramente um local para abstrair suas polyfills (ambos ‘geo.js’ e ‘geo-polyfill.js’ podem parecer o mesmo para a aplicação, mesmo que sejam implementadas de maneira diferente).</p>
														
															<p>Há uma grande chance que você não esteja totalmente infeliz com o tempo de download do seu script agora, mas ficará muito feliz em saber que o <span class="destaque">Modernizr.load</span> não atrasa o carregamento de nada, e às vezes, oferece maior velocidade na performance das páginas no carregamento assíncrono e no paralelo. Há várias possibilidades a se considerar nessa área, então sugerimos que você tente algumas coisas para ter certeza de que está extraindo o máximo de performance para sua situação em específico.</p>
															
																<p><span class="destaque">Modernizr.load</span> é leve e simples, mas pode fazer a força de um peso-pesado para você. Abaixo se encontra um exemplo mais complexo da utilização do script, quando seus scripts esbarram em mais de um teste sobre as características do navegador. Uma boa técnica é encapsular múltiplas características para apenas determinado navegador, de maneira que você não acabe rodando muitos scripts de uma única vez. É assim que deveria trabalhar:</p>
																
																	<div class="preCode">
																		<code>
																			<span class="comentarios">// Dá ao Modernizr.load uma string, um objeto, ou um array de strings e objetos</span>
																				Modernizr.load([
																				  <span class="comentarios">// Polyfills presenciais</span>
																				  {
																					<span class="comentarios">// Uma lista lógica das coisas que normalmente precisamos</span>
																					test : Modernizr.fontface && Modernizr.canvas && Modernizr.cssgradients,
																					<span class="comentarios">// Modernizr.load carrega o css e o javascript por padrão</span>
																					nope : ['presentational-polyfill.js', 'presentational.css']
																				  },
																				  <span class="comentarios">// Polyfills funcionais</span>
																				  {
																					<span class="comentarios">// Isso apenas precisa ser verdadeiro</span>
																					test : Modernizr.websockets && window.JSON,
																					<span class="comentarios">// socket-io.js e json2.js</span>
																					nope : 'functional-polyfills.js',
																					<span class="comentarios">// Você pode também fornecer arrays de recursos para carregamento</span>
																					both : [ 'app.js', 'extra.js' ],
																					complete : function () {
																					 <span class="comentarios"> //  Roda isso após tudo nesse grupo ter sido baixado</span>
																					 <span class="comentarios"> //  e o executa, assim como tudo no grupo anterior</span>
																					  myApp.init();
																					}
																				  },
																				 <span class="comentarios"> // Roda o seu script analytics depois que você já deu um ponta-pé no restante</span>
																				  <span class="comentarios">// de sua aplicação.</span>
																				  'post-analytics.js'
																				]);
																		</code>
																	</div>
																	
																		<p>Existem muitas coisas que você pode fazer com a <span class="destaque">Modernizr.load</span>. Ela foi lançada primeiramente standalone como <a href="http://yepnopejs.com/" class="linkCorpo">yepnope.js</a> , mas foi criada especificamente com a Modernizr e com os testes de características em mente. Você pode estudar toda a documentação para o Modernizr.load em <a href="http://yepnopejs.com/" class="linkCorpo">yepnopejs.com</a>.</p>
																		
																			<p>Uma característica bacana da <span class="destaque">Modernizr.load</span> é a dissociação total da carga e execução de scripts. Isso pode não significar muito para você, mas usuários de HTML5 Boilerplate irão se familializar com o a cópia do jQuery fallback do Google CDN. Ele se apresenta mais ou menos assim:</p>
																			
																				<div class="preCode">
																					<code>
																						&lt;script src=&quot;//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.js&quot;&gt;&lt;/script&gt;
																						&lt;script&gt;window.jQuery || document.write('&lt;script src=&quot;js/libs/jquery-1.6.1.min.js&quot;&gt;\x3C&lt;/script&gt;')&lt;/script&gt;																						
																					</code>
																				</div>
																					
																					<p>Ele trabalha tentando carregar o script, e imediatamente após, testando para ver se objetos em jQuery estão disponíveis. Se não estiverem, ele carrega uma cópia local do jQuery como uma reserva.Isso geralmente não é assim tão simpes em “scripts-carregadores”, mas o <span class="destaque">Modernizr.load</span> protege a retaguarda. Você pode simplesmente utilizar a mesma lógica, e a <span class="destaque">Modernizr.load</span> fará a execução na ordem para você:</p>
																					
																						<div class="preCode">
																							<code>
																								Modernizr.load([
																								  {
																									load: '//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.js',
																									complete: function () {
																									  if ( !window.jQuery ) {
																											Modernizr.load('js/libs/jquery-1.6.1.min.js');
																									  }
																									}
																								  },
																								  {
																									<span class="comentarios">// Isso vai aguardar pelo fallback (reserva) carregar e</span>
																									<span class="comentarios">// ser executado se houver a necessidade!</span>
																									load: 'needs-jQuery.js'
																								  }
																								]);
																							</code>
																						</div>
																						
																							<p>Uma nota rápida: Use somente essa técnica como um método para os fallbacks (reservas), pois ele pode afetar a performance por forçar o carregamento de scripts em série ao invés de paralelamente.</p>
																							
																								<p><span class="destaque">Modernizr.load</span> é bem flexível. Você pode carregar seus próprios prefixos e filtros para seus scripts. Para informações avançadas sobre isso, você pode checar a documentação na home page do <a href="http://yepnopejs.com/" class="linkCorpo">yepnopejs.com</a>. Você pode até ir mais longe ao alterar passos inteiros no processo de carregamento e alterá-los usando sua própria lógica. Portanto, comece a usar e economize aqueles preciosos, preciosos bytes.</p>
																								
																									<h3 id="comoFunciona">Como funciona a Modernizr</h3>
																									
																										<p>Para realizar muitos testes, Modernizr faz sua mágica criando um elemento, informando um estilo específico nesse elemento e então o recupera imediatamente. Navegadores que entendem a instrução retornarão algo sensível; navegadores que não entendem irão retornar algo como nada ou “indefinido”.</p>
																										
																											<p>Muitos dos testes na documentação vem com um pequeno código de exemplo para ilustrar como você pode usá-lo em um teste específico em seu fluxo de trabalho. Atualmente, casos de uso chegam de maneiras bem diferentes. Os usos possíveis para o Modernizr são limitados apenas por sua imaginação.</p>
																											
																												<p>Se você estiver realmente interessado em detalhes sobre como o Modernizr trabalha, veja em <a href="http://modernizr.github.com/Modernizr/annotatedsource.html" class="linkCorpo">annotated source code</a> e <a href="https://github.com/Modernizr/Modernizr/issues" class="linkCorpo">dig into the project on github</a>.</p>

																													<h3 id="elementosIE">Elementos HTML5 no IE</h3>
						
																														<p>Modernizr roda através de um loop em JavaScript para habilitar vários elementos do HTML5 (assim como a tag <span class="destaque">abbr</span>) para estilzá-lo no Internet Explorer. Note que isso não quer dizer que faz o IE oferecer suporte para os elementos <span class="destaque">Audio</span> e <span class="destaque">Video</span>, apenas significa que você pode usar <span class="destaque">section</span> ao invés de <span class="destaque">div</span> e estilizá-los com CSS. Você provavelmente desejará inserir esses elementos utilizando <span class="destaque">display:block;</span> veja o <a href="https://github.com/paulirish/html5-boilerplate/blob/362d0b7/css/style.css#L35-37" class="linkCorpo">HTML5 Boilerplate CSS</a> como exemplo. Assim como no Modernizr 1.5, esse script é idêntico ao usado na popular biblioteca html5shim/html5shiv. As duas permitem imprimir em tela elementos do HTML5 nos IE6-8, porém você desejará testar  a performance se o seu CSS apresentar mais de 100kb.</p>
																															
																															<h3 id="browsers">Suporte aos Navegadores</h3>
																															
																																<p>A biblioteca oferece suporte aos seguintes navegadores: IE6+, Firefox 3.5+, Opera 9.6+, Safari 2+, Chrome. Para os dispositivos móveis, oferece suporte ao iOS's mobile Safari, Android's WebKit browser, Opera Mobile, Firefox Mobile e enquanto continuamos fazendo testes, acreditamos que ofercer suporte também para o Blackberry 6+.</p>
						</article>

							<article>
							
								<h2>Características (features) detectadas pela Modernizr</h2>
								
									<h3 id="css3">CSS Features</h3>
									
										<table summary="Essa tabela lista todas as características que a Modernizr testa no CSS 3, e descreve as propriedades dos objetos em JAVASCRIPT, que é também a classname adicionada ao elemento HTML">
											<thead>
												<th scope="column">Característica (Feature)</th>
												<th scope="column"><span class="destaque">Modernizr</span> / Propriedade do objeto JavaScript / Classe do CSS</th>
											</thead>
											<tbody>
												<tr>
													<th>@font-face</th>
													<td>fontface</td>
												</tr>
												<tr>
													<th>background-size</th>
													<td>backgroundsize</td>
												</tr>
												<tr>
													<th>border-image</th>
													<td>borderimage</td>
												</tr>
												<tr>
													<th>border-radius</th>
													<td>borderradius</td>
												</tr>
												<tr>
													<th>box-shadow</th>
													<td>boxshadow</td>
												</tr>
												<tr>
													<th>Flexible Box Model</th>
													<td>flexbox</td>
												</tr>
												<tr>
													<td colspan="2">
														<p>O <a href="http://www.html5rocks.com/en/tutorials/flexbox/quick/" class="linkCorpo">Flexible Box Model (conhecido como flexbox)</a> oferece uma maneira diferenciada de posicionar elementos, que aborda algumas das deficiências do flutuador baseado em layouts.</p>
													</td>
												</tr>
												<tr>
													<td colspan="2">
														<div class="preCodeTable">
															<code>
																<span class="comentariosTable">
																/* Simulated box shadow using borders: */
																</span>
																	.box {
																	   border-bottom: 1px solid #666;
																	   border-right: 1px solid #777;
																	}
																	.boxshadow div.box {
																	   border: none;
																	   -webkit-box-shadow: #666 1px 1px 1px;
																		  -moz-box-shadow: #666 1px 1px 1px;
																				   box-shadow: #666 1px 1px 1px;
																	}
															</code>	
														</div>
													</td>
												</tr>
												<tr>
													<th>hsla()</th><td>hsla</td>
												</tr>
												<tr>
													<td colspan="2">
														<p>Na maioria dos casos você não precisará utilizar as classes rgba e hsla, pois os navegadores fazem a reposição naturalmente:</p>
												</tr>
												<tr>
													<td colspan="2">
														<div class="preCodeTable">
															<code>
																.my_container {  <span class="comentariosTable">/* sem a necessidade de usar .rgba */</span>
																   background-color: #ccc;
																   background-color: rgba(255,255,255, .5);
																}
															</code>
														</div>
													</td>
												</tr>
												<tr>
													<th>Multiple backgrounds</th>
													<td>multiplebgs</td>
												</tr>
												<tr>
													<th>opacity</th>
													<td>opacity</td>
												</tr>
												<tr>
													<th>rgba()</th>
													<td>rgba</td>
												</tr>
												<tr>
													<th>text-shadow</th>
													<td>textshadow</td>
												</tr>
												<tr>
													<td colspan="2">
														<p>O Firefox 3.0 dá um "falso-positivo" para esse teste, mas não se sabe de nenhuma correção ao problema. Todos os IE´s, incluindo o 9, não suporta o text-shadow e assim, falha em "<a href="http://mothereffingtextshadow.com/" class="linkCorpo">entregar prazer</a>".</p>
													</td>
												</tr>
												<tr>
													<td colspan="2">
														<div class="preCodeTable">
															<code>
																.glowy { <span class="comentariosTable">/* letras fantasmas */</span>
																	color: transparent;
																	text-shadow: 0 0 10px black;
																}
																.no-textshadow {
																	color: black;
																}
															</code>
														</div>
													</td>
												</tr>
												<tr>
													<th>CSS Animations</th>
													<td>cssanimations</td>
												</tr>
												<tr>
													<th>CSS Columns</th>
													<td>csscolumns</td>
												</tr>
												<tr>
													<th>CSS Gradients</th>
													<td>cssgradients</td>
												</tr>
												<tr>
													<td colspan="2">
														<p>Como existe um bug no WebKit que causa a necessidade de realizar o download da imagem de background, existe uma melhor maneira de efetuar um combo de imagens com css gradientes, e assim todos têm acesso à mesma experiência sem a necessidade de sobrecarregar a HTTP com algum script extra:</p>
													</td>
												</tr>
												<tr>
													<td colspan="2">
														<div class="preCodeTable">
															<code>
															.no-js .glossy,
															.no-cssgradients .glossy {
																background: url("images/glossybutton.png");
															}

															.cssgradients .glossy {
																background-image: linear-gradient(top, #555, #333);
															}
															</code>
														</div>
													</td>
												</tr>
												<tr>
													<th>CSS Reflections</th>
													<td>cssreflections</td>
												</tr>
												<tr>
													<th>CSS 2D Transforms</th>
													<td>csstransforms</td>
												</tr>
												<tr>
													<th>CSS 3D Transforms</th>
													<td>csstransforms3d</td>
												</tr>
												<tr>
													 <th>CSS Transitions</th>
													 <td>csstransitions</td>
												</tr>
												<tr>
													<td colspan="2">
														<p>As transições, tipicamente, podem ser usadas sem a necessidade de uma característica específica ou uma classe em JavaScript do Modernizr, mas para essas ocasiões, você poderá desejar que seu site se comporte de maneira diferente ao apresentado de acordo com o navegador utilizado. Um bom exemplo da situação é criar um site com uma animação que utilize nativamente o CSS Transitions, e para os navegadores que não suportam essa característica, você poderá manter a animação utilizando-se JavaScript.</p>
															
															<p><a href="http://isotope.metafizzy.co/" class="linkCorpo">Isotope</a> utiliza o recurso da detecção da Modernizr para usar transitions junto com transforms para garantir uma total aceleração de hardware quando possível, e quando necessário, utiliza uma reserva baseada em jQuery animations quando necessário.</p> 
													</td>
												</tr>
											</tbody>
										</table>
										
											<h3 id="html5">HTML5 Features</h3>
											
												<table summary="Essa tabela lista todas as características que a Modernizr testa no HTML 5, e descreve as propriedades dos objetos em JAVASCRIPT, que é também a classname adicionada ao elemento HTML">
													<thead>
														<th scope="column">Característica (Feature)</th>
														<th scope="column"><span class="destaque">Modernizr</span> / Propriedade do objeto JavaScript / Classe do CSS</th>
													</thead>
														<tbody>
															<tr>
																<th>applicationCache</th>
																<td>applicationcache</td>
															</tr>
															<tr>
																<th>Canvas</th>
																<td>canvas</td>
															</tr>
															<tr>
																<td colspan="2">
																	<p>Se no teste a <span class="destaque">Modernizr.canvas</span> retornar como "false", você pode baixar o <a href="https://github.com/Modernizr/Modernizr/wiki/HTML5-Cross-browser-Polyfills" class="linkCorpo">FlashCanvas ou excanvas</a>.</p>
																</td>
															</tr>
															<tr>
																<th>Canvas Text</th>
																<td>canvastext</td>
															</tr>
															<tr>
																<th>Drag and Drop</th>
																<td>draganddrop</td>
															</tr>
															<tr>
																<th>hashchange Event</th>
																<td>hashchange</td>
															</tr>
															<tr>
																<th>History Management</th>
																<td>history</td>
															</tr>
															<tr>
																<th>HTML5 Audio</th>
																<td>audio</td>
															</tr>
															<tr>
																<td colspan="2">
																	<p>Se o suporte à característica de Audio for detectada, a <span class="destaque">Modernizr</span> verifica quais formatos o navegador utilizado pode reproduzir. Atualmente, a <span class="destaque">Modernizr</span> testa as extensões <span class="destaque">ogg</span>, <span class="destaque">mp3</span>, <span class="destaque">wav</span> e <span class="destaque">mp4</span>.</p>
																	
																		<p><strong>Importante</strong>: Os valores para essas propriedades não são verdades booleanas. Ao invés disso, a Modernizr <a href="http://www.whatwg.org/specs/web-apps/current-work/multipage/video.html#mime-types" class="linkCorpo">compara as especificações da HTML5</a> esperando obter retorno de uma string que representa o nível de confiança do navegador que pode executar determinado codec. Esses valores de retorno são strings vazias (resposta negativa), "talvez" ou "provavelmente". A string vazia é "false", em outras palavras: <span class="destaque">Modernizr.audio.ogg = '&nbsp;&nbsp;'</span> e <span class="destaque">'&nbsp;&nbsp;' == false</span>.</p>
																</td>
															</tr>
															<tr>
																<td colspan="2">
																	<div class="preCodeTable">
																		<code>
																			var audio = new Audio();
																			audio.src = Modernizr.audio.ogg ? 'background.ogg' :
																						Modernizr.audio.mp3 ? 'background.mp3' :
																											  'background.m4a';
																			audio.play();
																		</code>
																	</div>
																</td>
															</tr>
															<tr>
																<th>HTML5 Video</th>
																<td>video</td>
															</tr>
															<tr>
																<td colspan="2">
																	<p>Veja o <a href="http://camendesign.com/code/video_for_everybody" class="linkCorpo">Video for Everybody</a> por Kroc Camen, script em JavaScript criado para usar na tag <span class="destaque">video</span> do HTML5 e que proporciona uma gracioso fallback para todos os navegadores. Com a detecção do <span class="destaque">video</span> pela Modernizr, você pode utilizar CSS e JavaScript para estilizar os controles, desde que o navegador ofereça suporte à <span class="destaque">video</span>.</p>
																	
																		<p>Se o suporte a <span class="destaque">video</span> for detectado, a Modernizr avalia qual formato o navegador está apto a reproduzir. Atualmente, a Modernizr verifica as seguintes extensões: <span class="destaque">ogg</span>, <span class="destaque">webm</span> e <span class="destaque">h264</span>.</p>
																		
																			<p>Veja também a nota <strong>Importante</strong> do tópico acima, sobre audio, pois os valores de retorno se aplicam também ao video.</p>
																</td>
															</tr>
															<tr>
																<th>IndexedDB</th>
																<td>indexeddb</td>
															</tr>
															<tr>
																<th colspan="2">Input Attributes</th>
															</tr>
															<tr>
																<td colspan="2">
																	<p>O HTML5 introduziu <a href="http://www.whatwg.org/specs/web-apps/current-work/multipage/the-input-element.html#input-type-attr-summary" class="linkCorpo">diversos novos atributos para os elementos input</a>. A Modernizr testa os seguintes:</p>
																	
																		<p><span class="destaque">autocomplete, autofocus, list, placeholder, max, min, multiple, pattern, required, step</span>.</p>
																		
																			<p>Esses novos atributos pode fazer coisas como: habilitar o auto complemento nativo, imitar o elem.focus() quando a página é carregada, apresentar uma sugestão no campo input do formulário, e realizar a validação client-side.</p>
																			
																				<p>Visite a página <a href="http://miketaylr.com/code/input-type-attr.html" class="linkCorpo">HTML5 input attribute support</a>, de Mike Taylor para ver os atributos em ação!</p>
																</td>
															</tr>
															<tr>
																<th colspan="2">Input Types</th>
															</tr>
															<tr>
																<td colspan="2">
																	<p>O HTML5 introduziu <a href="http://www.whatwg.org/specs/web-apps/current-work/multipage/the-input-element.html#input-type-attr-summary" class="linkCorpo">13 novos valores</a> para a tag do tipo <code class="destaque">&lt;input&gt;</code>. São as seguintes:</p>
																	
																		<p><span class="destaque">search, tel, url, email, datetime, date, month, week, time, datetime-local, number, range, color</span>.</p>
																		
																			<p>Esses novos tipos podem ativar nativamente seletores de datas (datapickers), seletores de cores (colorpickers), validação de URL, e por aí vai. Se o navegador não suportar o tipo informado, ele será renderizado com um campo de texto (text field). Modernizr não consegue verificar que as datas informadas podem se transformar em um seletor de datas, não consegue detectar um conjunto de cores como um seletor de cores, e por aí vai. Ele vai apenas detectar que os dados informados são "limpos" com base na especificação. No caso do Webkit, foi recebida a confirmação de que a "limpeza" não será realizada se não houver algum widget UI em seu devido lugar.</p>
																</td>
															</tr>
															<tr>
																<th>localStorage</th>
																<td>localstorage</td>
															</tr>
															<tr>
																<th>Cross-window Messaging</th>
																<td>postmessage</td>
															</tr>
															<tr>
																<th>sessionStorage</th>
																<td>sessionstorage</td>
															</tr>
															<tr>
																<th>Web Sockets</th>
																<td>websockets</td>
															</tr>
															<tr>
																<th>Web SQL Database</th>
																<td>websqldatabase</td>
															</tr>
															<tr>
																<th>Web Workers</th>
																<td>webworkers</td>
															</tr>
														</tbody>
												</table>
												
													<h3 id="misc">Miscelânia</h3>
													
														<table summary="Essa tabela lista todas as características que a Modernizr testa no HTML 5, e descreve as propriedades dos objetos em JAVASCRIPT, que é também a classname adicionada ao elemento HTML">
															<thead>
																<th scope="column">Característica (Feature)</th>
																<th scope="column"><span class="destaque">Modernizr</span> / Propriedade do objeto JavaScript / Classe do CSS</th>
															</thead>
																<tbody>
																	<tr>
																		<th>Geolocation API</th>
																		<td>geolocation</td>
																	</tr>
																	<tr>
																		<th>Inline SVG</th>
																		<td>inlinesvg</td>
																	</tr>
																	<tr>
																		<th>SMIL</th>
																		<td>smil</td>
																	</tr>
																	<tr>
																		<th>SVG</th>
																		<td>svg</td>
																	</tr>
																	<tr>
																		<th>SVG Clip paths</th>
																		<td>svgclippaths</td>
																	</tr>
																	<tr>
																		<th>Touch Events</th>
																		<td>touch</td>
																	</tr>
																	<tr>
																		<td colspan="2">
																			<p>O teste realizado pela <span class="destaque">Modernizr.touch</span> apenas indica se o navegador suporta eventos sensíveis ao toque, o que não necessariamente significa, um aparelho touchscreen. Por exemplo, o fones Palm Pre/WebOS (touch) não é sensível ao toque e portanto, falha no teste. Adicionalmente, o Chrome (versão Desktop) dizia oferecer suporte ao toque, <a href="http://code.google.com/p/chromium/issues/detail?id=36415" class="linkCorpo">o que recentemente foi retificado</a>. Modernizr também testa para suporte Multitouch via media query, maneira com a qual o Firefox 4 se apresenta para tablets com sistema Windows 7. Para mais informações, veja o <a href="http://modernizr.github.com/Modernizr/touch.html" class="linkCorpo">Modernizr touch tests</a>.</p>
																		</td>
																	</tr>
																	<tr>
																		<td colspan="2">
																			<div class="preCodeTable">
																				<code>
																					if (Modernizr.touch){
																					   <span class="comentariosTable">// relacionar ao touchstart, touchmove, etc e ver `event.streamId`</span>
																					} else {
																					   <span class="comentariosTable">// relacionar a clique normal, movimento do mouse, etc</span>
																					}
																				</code>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<th id="#webgl">WebGL</th><td>webgl</td>
																	</tr>
																	<tr>
																		<td colspan="2">
																			<div class="preCodeTable">
																				<code>
																					if (Modernizr.webgl){
																					   loadAllWebGLScripts(); <span class="comentarios">// webgl ativos podem facilmente ter > 300k</span>
																					} else {
																					   var msg = 'Utilizando um navegador diferente você sentirá toda a experiência proporcionada pela WebGL aqui: \
																								get.webgl.org.';
																					   document.getElementById( '#notice' ).innerHTML = msg;
																					}
																				</code>
																			</div>
																		</td>
																	</tr>
																</tbody>
															</table>
																
																	<div class="clear"></div>
																
																		<p><strong class="informa">TESTES ADICIONAIS PARA VERIFICAR A EXISTÊNCIA VIA PLUGINS</strong></p>
																		
																			<p>Para complementar os testes do Modernizr no modo “core”, muitos outros testes comuns estão disponíveis como Modernizr plugins na pasta <a href="https://github.com/Modernizr/Modernizr/tree/master/feature-detects" class="linkCorpo">/feature-detects/</a> no github. Se você por acaso não encontrou o teste que necessita realizar nessa página, procure nessa pasta ou tente no <a href="https://github.com/Modernizr/Modernizr/issues?labels=port+to+plugin&sort=created&direction=desc&state=open&page=1" class="linkCorpo">issue tracker</a>.</p>
														
																			
																		<p><strong class="informa">MÉTODOS DA Modernizr</strong></p>
																		
																			<p>Existe um par de métodos disponíveis, apresentando algumas funcionalidades que você irá gostar se costuma trabalhar bastante com CSS3 ou com design responsivo.</p>
																			
																				<h3 id="prefix">Modernizr.prefixed()</h3>
																				
																					<p>Método JavaScript<br />
																						<span class="destaque">Modernizr.prefixed(str)</span>
																					</p>
																					
																						<p>Modernizr.prefixed() retorna o prefixo ou não-prefixo da propriedade do nome da variável que você inseriu</p>
																						
																							<div class="preCode">
																								<code>
																									Modernizr.prefixed('boxSizing') <span class="comentarios">// 'MozBoxSizing'</span>
																								</code>
																							</div>
																							
																								<p>As propriedades precisam ser declaradas via DOM-style ou camelCase, ao invés utilizar hífens, como por exemplo, 'box-sizing'</p>
																								
																									<p>Os valores retornados também seguirão variações de camelCase, mas se você precisar mudar o nome e necessitar usar hífens, use isso:</p>
																									
																										<div class="preCode">
																											<code>
																												str.replace(/([A-Z])/g, function(str,m1){ return '-' + m1.toLowerCase(); }).replace(/^ms-/,'-ms-');
																											</code>
																										</div>
																										
																											<p>Se você estiver tentando determinar qual o final do evento para fazer um relacionamento com o próximo, você pode fazer algo assim:</p>
																											
																												<div class="preCode">
																													<code>
																														var transEndEventNames = {
																															'WebkitTransition' : 'webkitTransitionEnd',
																															'MozTransition'    : 'transitionend',
																															'OTransition'      : 'oTransitionEnd',
																															'msTransition'     : 'msTransitionEnd', // maybe?
																															'transition'       : 'transitionEnd'
																														},
																														transEndEventName = transEndEventNames[ Modernizr.prefixed('transition') ];

																														<span class="comentarios">// ... relacionando ao evento transEndEventName ... </span>
																													</code>
																												</div>
																												
																													<h3 id="media">mq() media query testing</h3>
																													
																														<p>Método JavaScript<br />
																															<span class="destaque">Modernizr.mq(str)</span>
																														</p>
																														
																															<p>Modernizr.mq testa uma consulta de mídia (media query), confrontando o atual estado do navegador.</p>
																															
																																<p>Alguns detalhes importantes:</p>
																																
																																	<ul class="fonteMenor">
																																		<li>Se o navegador não suporta media queries de maneira nenhuma (ex. IE´s antigos), o mq() será sempre falso;</li>
																																		<li>Um max-width ou orientation query será avaliada contra o estado atual, que poderá se alterar futuramente;</li>
																																		<li>Você deve especificar o tipo de media, e pensando assim, todos os tipos são bem-vindos:</li>
																																	</ul>
																																		<span>
																																			<div class="preCode">
																																				<code>
																																					Modernizr.mq('only all and (max-width: 400px)')
																																				</code>
																																			</div>
																																		</span>
																																		
																																			<p>Exemplo de uso:</p>
																																			
																																				<div class="preCode">
																																					<code>
																																						Modernizr.mq('only screen and (max-width: 768px)')  <span class="comentarios">// true</span>
																																					</code>
																																				</div>
							</article>
							
								<article>
											
									<h2>Extensibilidade</h2>
									
										<h3 id="addTest">addTest() Plugin API</h3>
																																							
										<p>Método JavaScript<br />
											<span class="destaque">Modernizr.addTest(str, fn)</span><br />
											<span class="destaque">Modernizr.addTest(str, bool)</span><br />
											<span class="destaque">Modernizr.addTest({str: fn, str2: fn2})</span><br />
											<span class="destaque">Modernizr.addTest({str: bool, str2: fn})</span>
										</p>
																																							
											<p>Você talvez queira realizar outros testes que a Modernizr não oferece suporte. Para isso, você pode utilizar a função addTest . Por exemplo, alguns usuários requisitaram testes para o bug do double margin quando se usa float, e suporte para o <span class="destaque">position:fixed</span> nos IE´s. Usando o addTest, você pode adicionar por si mesmo e obter exatamente a mesma API com todos os outros testes suportados.</p>
																																									
												<p>Novas assinaturas foram inseridas nesse método  para aceitar booleanos e objetos no Modernizr 2.</p>
																																									
													<p>Exemplo de uso:</p>
																																										
														<div class="preCode">
															<code>
																<span class="comentarios">// Teste para o suporte ao position:fixed</span>
																	Modernizr.addTest('positionfixed', function () {
																		var test  = document.createElement('div'),
																		control = test.cloneNode(false),
																		fake = false,
																		root = document.body || (function () {
																		fake = true;
																		return document.documentElement.appendChild(document.createElement('body'));
																		}());
				
																			var oldCssText = root.style.cssText;
																			root.style.cssText = 'padding:0;margin:0';
																			test.style.cssText = 'position:fixed;top:42px';
																			root.appendChild(test);
																			root.appendChild(control);
																																														   
																				var ret = test.offsetTop !== control.offsetTop;
																																																																		   root.removeChild(test);
																					root.removeChild(control);
																					root.style.cssText = oldCssText;
																																														   
																						if (fake) {
																							document.documentElement.removeChild(root);
																						}
																																														   
																							return ret;
																		});
															</code>
														</div>
															
															<p>Considerando que o teste acima foi efetuado com sucesso, haverá agora uma classe <span class="destaque">.positionfixed</span> no elemento HTML e <span class="destaque">Modernizr.positionfixed</span> será “true”. IE6, é claro, terá agora uma classe <span class="destaque">.no-positionfixed</span>.</p>
																																												
																<h3 id="testS">testStyles()</h3>
																
																	<p>Método JavaScript<br />
																		<span class="destaque">Modernizr.testStyles(str,fn)</span>
																	</p>
																	
																		<p><span class="destaque">Modernizr.testStyles()</span> permite que você adicione estilos para o documento e teste-os após isso. Um elemento com o ID de “Modernizr” é inserido na página.</p>
																		
																			<div class="preCode">
																				<code>
																					Modernizr.testStyles('#modernizr { width: 9px; color: papayawhip; }', function(elem, rule){
																						Modernizr.addTest('width', elem.offsetWidth == 9);
																					});
																				</code>
																			</div>
																			
																				<h3 id="testP">testeProp()</h3>
																
																					<p>Método JavaScript<br />
																						<span class="destaque">Modernizr.testProp(str)</span>
																					</p>
																					
																						<p><span class="destaque">Modernizr.testProp()</span> investiga onde determinada propriedade de estilo é reconhecida. Note que os nomes das propriedades devem ser fornecidos usando as variáveis camelCase.</p>
																						
																							<div class="preCode">
																								<code>
																									Modernizr.testProp('pointerEvents')  <span class="comentarios">// true </span>
																								</code>
																							</div>
																							
																								<h3 id="testA">testAllProps()</h3>
																
																									<p>Método JavaScript<br />
																										<span class="destaque">Modernizr.testAllProps(str)</span>
																									</p>
																									
																										<p><span class="destaque">Modernizr.testAllProps()</span> investiga onde determinada propriedade de estilo, ou qualquer conjuntos de propriedades de estilos pre-fixados, são reconhecidos. Note que os nomes das propriedades devem ser fornecidos usando as variáveis camelCase.</p>
																										
																											<div class="preCode">
																												<code>
																													Modernizr.testAllProps('boxSizing') <span class="comentarios">// true </span>
																												</code>
																											</div>
																											
																												<h3 id="has">hasEvent()</h3>
																
																													<p>Método JavaScript<br />
																														<span class="destaque">Modernizr.hasEvent(str [,elem])</span>
																													</p>
																													
																														<p><span class="destaque">Modernizr.hasEvent()</span> oferece suporte a um evento informado, e opcionalmente, um elemento para efetuar testes.</p>
																														
																															<div class="preCode">
																																<code>
																																	Modernizr.hasEvent('gesturestart', elem) <span class="comentarios">// true </span>
																																</code>
																															</div>
																															
																																<h3 id="dom">_prefixes &amp; _domPrefixes</h3>
																
																																	<p>Método JavaScript<br />
																																		<span class="destaque">Modernizr._prefixes</span> &nbsp; <span class="destaque">Modernizr._domPrefixes</span>
																																	</p>
																																	
																																		<p>O prefixo do vendor que você precisará testar. Verifique no código fonte do Modernizr ou abaixo para entender como efetivamente usar o <span class="destaque">join()</span> nesses arrays para ordenar os testes para suas propriedades de estilos. </p>
																																		
																																			<div class="preCode">
																																				<code>
																																					Modernizr._prefixes.join('prop' + ':value; ');
																																						<span class="comentarios">/* prop:value; -webkit-prop:value; -moz-prop:value;
																																						   -o-prop:value; -ms-prop:value; -khtml-prop:value; */</span>

																																						'prop:' +  Modernizr._prefixes.join('value; prop:') + 'blah';
																																						<span class="comentarios">/* prop:value; prop:-webkit-value; prop:-moz-value;
																																						   prop:-o-value; prop:-ms-value; prop:-khtml-value; prop:blah; */</span>

																																						'prop:value; ' + Modernizr._domPrefixes.join('Prop' + ':value; ') + ':value';
																																						<span class="comentarios">/* prop:value; WebkitProp:value; MozProp:value;
																																						   OProp:value; msProp:value; Khtml:value */</span>
																																				</code>
																																			</div>
								</article>
								
									<div class="esconde">
										<p>Já acessaram essa documentação:
											<span>
												<img src='http://contador.s12.com.br/img-ZcAB0axa-3.gif' border='0' alt='contador free'><script src='http://contador.s12.com.br/ad.js?id=ZcAB0axa'></script>
											</span>
										</p>
									</div>
			</section>
				<section id="sectionContent">
					<h4>Conteúdos da Documentação</h4>
						<ol>
							<li>Geral
								<ol>
									<li><a href="#oque" onclick="$('html,body').animate({scrollTop: $('#oque').offset().top}, 1000);">O que é a Modernizr?</a></li>
									<li><a href="#instalando" onclick="$('html,body').animate({scrollTop: $('#instalando').offset().top}, 1000);">Instalando a Modernizr</a></li>
									<li><a href="#polyfills" onclick="$('html,body').animate({scrollTop: $('#polyfills').offset().top}, 1000);">Polyfills e a Modernizr</a></li>
									<li><a href="#modernizrLoad" onclick="$('html,body').animate({scrollTop: $('#modernizrLoad').offset().top}, 1000);">Modernizr.(load) tutorial</a></li>
									<li><a href="#comoFunciona" onclick="$('html,body').animate({scrollTop: $('#comoFunciona').offset().top}, 1000);">Como funciona a Modernizr</a></li>
									<li><a href="#elementosIE" onclick="$('html,body').animate({scrollTop: $('#elementosIE').offset().top}, 1000);">Elementos HTML5 no IE</a></li>
									<li><a href="#browsers" onclick="$('html,body').animate({scrollTop: $('#browsers').offset().top}, 1000);">Suporte aos Navegadores</a></li>
								</ol>
							</li>
								<li>Características (features) detectadas pela Modernizr	
									<ol>
										<li><a href="#css3" onclick="$('html,body').animate({scrollTop: $('#css3').offset().top}, 1000);">CSS3 Features</a></li>
										<li><a href="#html5" onclick="$('html,body').animate({scrollTop: $('#html5').offset().top}, 1000);">HTML5 Features</a></li>
										<li><a href="#misc" onclick="$('html,body').animate({scrollTop: $('#misc').offset().top}, 1000);">Miscelânia</a></li>
									</ol>
								</li>
								<li>Extensibilidade
									<ol>
										<li><a href="#addTest" onclick="$('html,body').animate({scrollTop: $('#addTest').offset().top}, 1000);">addTest() Plugin API</a></li>
										<li><a href="#prefix" onclick="$('html,body').animate({scrollTop: $('#prefix').offset().top}, 1000);">Modernizr.prefixed()</a></li>
										<li><a href="#testS" onclick="$('html,body').animate({scrollTop: $('#testS').offset().top}, 1000);">testStyles()</a></li>
										<li><a href="#testP" onclick="$('html,body').animate({scrollTop: $('#testP').offset().top}, 1000);">testeProp()</a></li>
										<li><a href="#testA" onclick="$('html,body').animate({scrollTop: $('#testA').offset().top}, 1000);">testAllProps</a></li>
										<li><a href="#has" onclick="$('html,body').animate({scrollTop: $('#has').offset().top}, 1000);">hasEvent()</a></li>
										<li><a href="#media" onclick="$('html,body').animate({scrollTop: $('#media').offset().top}, 1000);">mq() media query testing</a></li>
										<li><a href="#dom" onclick="$('html,body').animate({scrollTop: $('#dom').offset().top}, 1000);">_prefixes &amp; _domPrefixes</a></li>
									</ol>
						</ol>
						
							<div class="informacoesAdicionais">
								<h5>Informações Adicionais</h5>					
									<span>Traduzido do original: <a href="www.modernizr.com/docs/" class="linkCorpo">Modernizr Documentation</a></span>
										<span>Tradução: <a href="http://www.andrebuzzo.com.br" class="linkCorpo">André Buzzo</a></span><br />
											<span><script src="//platform.twitter.com/widgets.js" type="text/javascript"></script><a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="andrebuzzoweb" data-lang="pt">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></span>
												<span><a href="https://twitter.com/andrebuzzoweb" class="twitter-follow-button" data-show-count="false" data-lang="pt">Siga @andrebuzzoweb</a></span>
													<span><div class="g-plusone"></div></span>
							</div>	
								<div class="clear"></div>
				</section>
				
			</div>
			
				<!-- Start of StatCounter Code -->
					<script type="text/javascript">
					var sc_project=6152009; 
					var sc_invisible=1; 
					var sc_security="625ac620"; 
					</script>
					<script type="text/javascript" src="http://www.statcounter.com/counter/counter.js"></script>
				<!-- End of StatCounter Code --> 	
			
		</body>
</html>