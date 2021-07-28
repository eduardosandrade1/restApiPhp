##############################################################################
#                                   API PHP                                  #
##############################################################################



. git clone https://github.com/eduardosandrade1/restApiPhp.git








antes de tudo, coloque esta pasta (./API/) dentro de uma pasta no servidor

Necessário estar com o seu banco de dados e seu serviço web rodando












1 - Vá no arquivo constants.php e adicione seus dados de conexao




2 - Crie dentro da pasta CLASSES um novo arquivo (.php) com o nome da tabela que deseja usar




3 - Dentro do arquivo criado, abra a TAG PHP e inicie uma classe com o nome igual ao do arquivo que acabou de criar 

    3.1 - PRESTE ATENÇÃO NAS LETRAS MAIUSCULAS E MINUSCULAS, ELAS TAMBÉM CONTAM

    3.2 - Toda classe deve extender uma outra classe ja criada chamada Conexao

    3.3 EX:             class Exemplo extends Conexao { ...





4 - Crie uma publica função com um nome dedicado ao que ela irá fazer 

    4.1 Ex : public function MostrarTodos (assim, quando vejo já sei exatamente o que ela faz)

    4.2 - Caso seja uma função com parametros, passe eles normalmente

    4.3 - dentro de cada função, monte a sua string para enviar para o banco e armazene em uma variável

    4.4 - Facilitando a vida:

        ( CASO SEJA UMA CONSULTA/SELECT ) : USE

            # LEGENDA - $querySql é a variavel com a string para enviar pro banco de dados

                $sql = $this->con->prepare($querySql);
				$sql->execute();

				$resultados = array();

				while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
					$resultados[] = $row;
				}

				if (!$resultados) {
					$resultados = [];
				}

        ( CASO SEJA UM INSERT/PERSISTENCIA ): USE

                # LEGENDA - $querySql é a variavel com a string para enviar pro banco de dados

                $sql = $this->con->prepare($querySql);
				return $sql->execute();

        4.5 - analise sua necessidade e cole dentro da função criada e pronto!
                Faça isso para todas ações que deseja fazer na classe que criou





#############################################
###             testando                  ###
#############################################




para testar, abra no navegador a url da pasta em que colocou a API

    ex: http://localhost/API/

como funciona:

Após o caminho, chame o nome da classe que deseja consultar

Usando a classe de usuarios pronta como exemplo

    ex: http://localhost/API/usuarios/


o proximo passo é chamar a funcao de dentro da classe

    ex: http://localhost/API/usuarios/mostrarTodos


CASO TENHA ATRIBUTOS NA FUNCAO chamada

    os indique nos proximos parametros

        ex: http://localhost/API/usuarios/login/teste/1234


    
    !!!!!!!!!!! IMPORTANTE !!!!!!!!!!!!

    . os parametros da url seguem a ordem dos parametros da função da classe

        . segue como exemplo a função de login deixada na classe de usuarios


        ordem de parametros da função > $login, $senha

        então, passe na rota primeiro o login, depois a senha, como no exemplo:

        ex: http://localhost/API/usuarios/login/teste/1234

        as funções irçao interpretar de acordo com esta sequencia
        



        Valeu guys!

