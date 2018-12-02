@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12" style="background: url({{ asset('images/m01.jpg') }}) no-repeat left center; background-size: cover;">
            <blockquote class="blockquote text-center" style="padding: 100px 0 100px 0; font-size: 3em;">
                <p class="mb-0" style="color: white;">Dicas e pontos importantes</p>
            </blockquote>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12 col-sm-12" style="padding: 50px 0 50px 0;">
            <h3 class="text-center" style="color: #666;">Aqui você pode visualizar monografias feitas, obter dicas de nossos membros e hospedar seu trabalho!</h3>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10 col-sm-12" style="padding-top: 10px;">
            <div class="card text-center" style=" background: url({{ asset('images/i8.jpg')  }})no-repeat; background-position: center;
                              background-attachment: fixed; width: 100%; height: auto; ">



                 <div class="card-body" style= "background-color: #ffffff; opacity: 0.7; filter: alpha(opacity=70); ">
                    
                    <h4 class="card-title" style ="color: #000000;"><b>Como fazer uma boa monografia?</b></h4><br>


                        <h5 class="card-title" style ="color: #000000;" > <b> 1° Esteja informado </b></h5>
                            <p class="text-justify" style ="color: #000000;"><i><b>
                                Antes de iniciar o seu trabalho, confira  qual é o formato de TCC é solicitado pela sua faculdade, pois ele pode
                                 variar conforme o curso de graduação e a universidade. Existem diversas opções, dentre elas monografia, estudo de 
                                 caso ou até mesmo um projeto experimental.
                            </p></i></b><br>


                        <h5 class="card-title" style ="color: #000000;"> <b> 2° Escolha um bom tema </b></h5>
                            <p class="text-justify" style ="color: #000000;"><i><b>
                            Um fator que conduzirá toda a produção do seu trabalho é a escolha do tema. Saiba que passará um longo período em contato 
                            com o seu trabalho, fazendo pesquisas, leituras e escrevendo sobre o mesmo assunto. O tempo de duração de um TCC também varia 
                            de acordo com a universidade e o curso de graduação, mas geralmente o mesmo tem o período mínimo de seis meses. Por isso, 
                            é primordial que escolha um tema que te empolgue e te motive a continuar firme no projeto.
                            Na escolha de um tema é preciso também levar em consideração fatores internos e externos, como os exemplos abaixo. <br>
                            - Fatores internos:  são as suas preferências pessoais em relação ao tema, como interesse, experiência profissional , vontade 
                            de aprender mais e tempo disponível para a construção do seu TCC. <br>
                            - Fatores externos: estão relacionados à quantidade de produção científica disponível sobre o tema, caso o aluno decida 
                            fazer uma revisão de literatura. Caso ele escolha realizar uma pesquisa de campo, é importante  que o local onde será realizada
                             a pesquisa tenha autorizado previamente essa prática. Outro fator externo de suma importância é o recurso financeiro disponível,
                              pois pode acontecer do tema ser de grande relevância e o aluno ter autorização para realizar a pesquisa em determinado local.
                               Mas se ela exige um orçamento elevado e o aluno não tem recurso, fica mais difícil efetivar a realização do estudo. <br>
                            </p></i></b><br>


                        <h5 class="card-title" style ="color: #000000;"><b> 3° Tenha disciplina </b></h5>
                            <p class="text-justify" style ="color: #000000;"><i><b>
                            Para atender o prazo para entrega do artigo, o aluno precisa ter disciplina e realizar as atividades propostas pelo professor
                             no prazo estabelecido. Isso quer dizer que em cada módulo ele precisa estar em dia com o andamento da redação do seu projeto 
                             de pesquisa e posteriormente com a redação do artigo científico. <br>
                            </p></i><br></b>



                        <h5 class="card-title" style ="color: #000000;">  <b> 4° Fique atento às normas de escrita do TCC</b> </h5>
                            <p class="text-justify" style ="color: #000000;"><i><b>
                                Apesar da importância de todas as diretrizes, as principais regras da ABNT a serem consideradas são as de citação e referências.
                                 Principalmente porque os erros mais comuns de formatação são os relacionados à forma de citar os artigos utilizados na 
                                 fundamentação teórica e discussão. Assim, a melhor maneira de evitá-los seria estar em contato constante com seu orientador 
                                 e principalmente seguir as normas estabelecidas que servem como guia nesse processo. Para facilitar a escrita, é possível utilizar
                                  recursos de formatação que permitem formas mais rápidas e fáceis de produzir o trabalho nas normas corretas, incluindo citações, 
                                  referências e demais elementos de um TCC. Esse é o caso, por exemplo, do site brasileiro Fast Format. Mas é preciso sempre checar 
                                  as adequações separadamente e junto ao seu orientador, que deve ter a palavra final. <br>
                            </p></i><br></b>


                        <h5 class="card-title"style ="color: #000000;"> <b>5° Saiba escolher seu orientador </b></h5>
                            <p class="text-justify"style ="color: #000000;"><i> <b>
                            Um dos principais desafios na hora de começar a produzir o TCC é escolher o orientador. Na hora de eleger o professor que vai te 
                            orientar, evite escolher determinado educador só pelo fato de se simpatizar com ele ou por terem construído um vinculo de amizade 
                            ao longo da sua graduação, pois a afinidade não pode ser seu único critério de escolha.
                            Procure conversar com ex-alunos para saber quais são os professores que dão maior suporte aos estudantes, que são 
                            famosos por estimular a criatividade de seus orientandos e agregar ao trabalho, em vez de só acompanhá-lo. Além disso, 
                            é fundamental optar por um orientador que domine o tema ou o formato de TCC que você escolheu fazer, pois assim terá mais
                             chances de ser bem sucedido em seu trabalho.<br>
                            </p></i></b><br>


                        <h5 class="card-title" style ="color: #000000;"> <b> 6° Tenha cuidado na escolha dos companheiros de trabalho  </b></h5>
                            <p class="text-justify"style ="color: #000000;"><i><b>
                            Outro fator muito importante é escolher corretamente os seus parceiros de trabalho, caso tenha optado por fazer em 
                            dupla ou em grupo. Saiba que nem sempre as pessoas que possuem maior afinidade são as mais indicadas para trabalharem juntas. 
                            Se a universidade permite que o Trabalho de Conclusão de Curso seja feito em parceria, procure escolher bons companheiros, que
                             estejam dispostos a se empenhar da mesma forma que você.
                            O mais indicado é que opte por pessoas que tenham habilidades complementares às suas, de modo que consigam agregar valor ao 
                            trabalho e compartilhar ideias. Caso você seja bom na formulação de pesquisa, por exemplo, mas não leva muito jeito para escrever, 
                            escolha alguém que seja bom de redação e consiga passar as suas ideias para o papel, pois assim formarão uma boa dubla.
                            </p></i></b><br>


                        <h5 class="card-title"style ="color: #000000;"> <b> 7° Crie o hábito de ler constantemente </b> </h5>
                            <p class="text-justify"style ="color: #000000;"><i><b>
                            Outra sugestão muito valiosa é criar o hábito de ler constantemente conteúdos relacionados ao tema do seu projeto. Pode ser 
                            que isso não seja muito motivador, mas uma rica fundamentação teórica é fundamental para fazer um TCC de qualidade.
                            Procure referências nacionais e internacionais, pesquise na biblioteca da sua universidade outros trabalhos sobre o mesmo 
                            tema ou até mesmo na internet. Esteja ciente de que quanto mais dominar o assunto, melhor se sairá na elaboração do projeto e 
                            mais seguro estará na sua apresentação.
                            </p></i> </b><br>


                        <h5 class="card-title"style ="color: #000000;"> <b> 8° Utilize fontes de qualidade e confiáveis  </b></h5>
                            <p class="text-justify"style ="color: #000000;"><i><b> 
                            Muitas vezes, a dificuldade dos alunos em encontrar os artigos relacionados ao seu tema de TCC se dá pelo fato de não 
                            saberem fazer a busca adequadamente. Primeiramente, é importante utilizar o descritor adequado. Após identificar qual descritor 
                            é o mais adequado para a sua pesquisa, o aluno consegue encontrar todos os artigos relacionados ao tema escolhido.
                            </p></i> </b><br>


                        <h5 class="card-title"style ="color: #000000;">  <b> 9° Seja ético e não cometa plágio </b></h5>
                            <p class="text-justify"style ="color: #000000;"><i><b> 
                            Quando falamos de ética e trabalho científico, existem grupos de pesquisa que discutem muito essa temática, que seria 
                            a integridade científica. Esse tema não é só uma questão ética, mas também de formatação e exige cuidado especial do aluno. 
                            Sim, citações escritas de forma incorreta podem ser classificadas como plágio! Para evitar isso, o aluno deve assistir as aulas 
                            metodologia  do curso em que é discutido bastante esse tema, ler o material e/ou entrar em contato com o professor responsável.  <br>
                            </p></i></b><br>


                        <h5 class="card-title"style ="color: #000000;"> <b> 10°  Ensaie </b></h5>
                            <p class="text-justify"style ="color: #000000;"><i><b> 
                            Depois de passar um longo período se dedicando a execução de seu projeto, chega o momento da última etapa do TCC: a apresentação. 
                            É nesse momento que o estudante deve provar à banca de jurados que sabe exatamente do que está falando, pois se preparou muito 
                            para isso. É claro que na hora pode bater certo nervosismo, mas para que isso seja amenizado tome algumas providências com 
                            antecedência.
                            Ensaie muito para esse dia, seja sozinho ou na presença de terceiros, como amigos e familiares. Pergunte se está sendo claro o 
                            suficiente, se tem algo deveria ser abordado com mais precisão. Além disso, cronometre o seu tempo, pois geralmente o aluno tem de 
                            15 a 20 minutos para falar sobre o seu trabalho.
                            </p></i></b><br>



                        <h5 class="card-title"style ="color: #000000;"> <b> 11° Tenha a visão de um profissional</b> </h5>
                            <p class="text-justify"style ="color: #000000;"><i><b> 
                            Por mais que o TCC seja um trabalho desenvolvido na faculdade, tente agir com seriedade ao executá-lo. Encare-o como um projeto 
                            profissional, que pode agregar valor ao seu portfólio e, até mesmo, ser levado adiante depois que estiver formado. Encare-o como 
                            uma chance de desenvolver suas habilidades e de encontrar oportunidades no mercado de trabalho.
                            </p></i></b><br>






                        <br><br>
                        <h5 class="card-title"style ="color: #000000;"> <b> Fontes: </b></h5>
                        <p style ="color: #000000;"> <b> https://www.iespe.com.br/blog/dicas-tcc/ </b></p>
                        <p style ="color: #000000;"> <b> https://educacao.uol.com.br/noticias/2015/04/09/guia-aprenda-como-fazer-um-tcc-incrivel-em-10-passos.htm</b></p>
                        <p style ="color: #000000;"> <b> https://escolaeducacao.com.br/dicas-essenciais-para-fazer-um-bom-tcc/</b></p>
                        <br><br>

                    

                    










                </div>
                </div>
        </div>
    </div>
</div>
@endsection