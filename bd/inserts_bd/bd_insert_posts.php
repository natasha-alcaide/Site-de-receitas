<?php

// Receita

$receita = "<h2>Ingredientes:</h2>
<ul>
    <li>1 baguete pequena</li>
    <li>1 dente de alho</li>
    <li>2 tomates grandes</li>
    <li>2 ramos de manjericão</li>
    <li>2 colheres de sopa de azeite</li>
    <li>Sal a gosto</li>
    <li>Pimenta</li>
    <li>Pimenta-do-reino a gosto</li>
</ul>
<h2>Modo de preparo:</h2>
<ol>
    <li>Corte a baguete em fatias, coloque-as em uma assadeira e leve-a ao forno pré-aquecido a 180º graus por cerca de 10 minutos ou até que fiquem crocantes.</li>
    <li>Lave os tomates, corte-os ao meio e retire as sementes.</li>
    <li>Corte os tomates em cubinhos.</li>
    <li>Em uma tigela, coloque os tomates cortados, as folhas de manjericão, o azeite, o sal, a pimenta, e misture delicadamente.</li>
    <li>Descasque o dente de alho.</li>
    <li>Esfregue o dente de alho nas torradas de baguete e adicione uma porção de tomate temperado.</li>
    <li>Repita o processo até que todas as torradas estejam cobertas com o tomate temperado.</li>
    <li>Sirva em seguida.</li>
</ol>";

$post_title = "Brusqueta";
$post_author = "admin";
$post_category_id = 1;
$post_status = "published";
$post_image = "admin/images/brusqueta-de-tomate.png";
$post_tag = "receita";
$post_content = $receita;

$query = "INSERT INTO Posts(post_category_id, post_title, post_author, post_date, post_image, post_content, post_tag, post_status)";
$query .= "VALUES({$post_category_id},'{$post_title}','{$post_author}',now(),'{$post_image}','{$post_content}','{$post_tag}','{$post_status}')";

$create_post_query = mysqli_query($connection, $query);

// Receita

$receita = "<h2>Ingredientes:</h2>
<ul>
  <li>250 gramas de tapioca granulada</li>
  <li>375 gramas de queijo coalho</li>
  <li>500 ml de leite integral</li>
  <li>Sal, pimenta do reino, orégano a gosto</li>
  <li>Óleo o quanto baste para fritar os dadinhos em imersão</li>
</ul>
<h2>Modo de preparo:</h2>
<ol>
  <li>Com um ralador, rale o queijo coalho bem fino e reserve em um recipiente</li>
  <li>Em uma panela, ferva bem o leite, em fogo médio. Quando ele chegar ao ponto de subir espuma, desligue o fogo</li>
  <li>Na tigela com o queijo, acrescente a tapioca. Tempere com sal, pimenta e orégano e misture bem para a massa pegar o sabor</li>
  <li>Adicione o leite fervente na mistura e mexa sem parar, com o auxílio de um fouet, até incorporar, por cerca de 3 minutos</li>
  <li>Despeje a mistura em uma forma de 20x25 cm forrada com filme plástico sobrando nas bordas. Deixe descansar por 10 minutos</li>
  <li>Retire o conteúdo do recipiente agora já encorpado e corte em cubinhos</li>
  <li>Em uma frigideira ou panela com bastante óleo quente, deixe os dadinhos mergulhados até dourar, sem mexer. Retire-os com uma espátula e seque o excesso de óleo com um papel toalha</li>
  <li>Sirva quente</li>
</ol>";

$post_title = "Dadinho de Tapioca";
$post_author = "user";
$post_category_id = 1;
$post_status = "published";
$post_image = "admin/images/dadinho-de-tapioca.png";
$post_tag = "receita";
$post_content = $receita;

$query = "INSERT INTO Posts(post_category_id, post_title, post_author, post_date, post_image, post_content, post_tag, post_status)";
$query .= "VALUES({$post_category_id},'{$post_title}','{$post_author}',now(),'{$post_image}','{$post_content}','{$post_tag}','{$post_status}')";

$create_post_query = mysqli_query($connection, $query);

// Receita

$receita = "<h3>Ingredientes:</h3>
<ul>
    <li>500 gramas de peito de frango desfiado</li>
    <li>1 cenoura média ralada</li>
    <li>1 tomate</li>
    <li>1 tomate picado sem sementes</li>
    <li>½ cebola roxa picada</li>
    <li>½ xícara de chá de azeitonas picadas</li>
    <li>Salsinha picada a gosto</li>
    <li>1 xícara de chá de maionese</li>
    <li>3 colheres de sopa de azeite de oliva</li>
    <li>Sal e pimenta do reino a gosto</li>
</ul>
<h3>Modo de Preparo:</h3>
<ol>
    <li>Em uma tigela grande, adicione o peito de frango desfiado.</li>
    <li>Acrescente a cenoura ralada, os tomates picados, a cebola picada, as azeitonas picadas e a salsinha.</li>
    <li>Misture bem os ingredientes.</li>
    <li>Adicione a maionese e o azeite de oliva e misture novamente.</li>
    <li>Tempere com sal e pimenta do reino a gosto e misture novamente.</li>
    <li>Sirva o salpicão de frango gelado, decorado com salsinha e regado com um fio de azeite.</li>
</ol>";

$post_title = "Patê de frango com cenoura ";
$post_author = "admin";
$post_category_id = 1;
$post_status = "published";
$post_image = "admin/images/pate-de-frango-com-cenoura.png";
$post_tag = "receita";
$post_content = $receita;

$query = "INSERT INTO Posts(post_category_id, post_title, post_author, post_date, post_image, post_content, post_tag, post_status)";
$query .= "VALUES({$post_category_id},'{$post_title}','{$post_author}',now(),'{$post_image}','{$post_content}','{$post_tag}','{$post_status}')";

$create_post_query = mysqli_query($connection, $query);

// Receita

$receita = "<h2>Ingredientes</h2>
<ul>
    <li>1 kg de carne de acém cortada em cubos grandes</li>
    <li>2 colheres (sopa) de óleo de milho</li>
    <li>2 colheres (sopa) de cebola granulada</li>
    <li>2 cubos de caldo natural</li>
    <li>colorau a gosto</li>
    <li>cheiro-verde desidratado a gosto</li>
    <li>água até cobrir a carne</li>
    <li>5 batatas médias descascadas e cortadas ao meio</li>
</ul>

<h2>Modo de Preparo</h2>
<ol>
    <li>Em uma panela de pressão coloque o óleo e a cebola, deixe até que ela fique bem moreninha.</li>
    <li>Junte a carne cortada em cubos médios, deixe dourar por 15 minutos.</li>
    <li>Junte os 2 cubos de caldo natural e o colorau a gosto.</li>
    <li>Coloque a água até que cubra a carne, não ultrapasse a carne.</li>
    <li>Coloque na pressão por 25 minutos.</li>
    <li>Retire do fogo, tire a pressão e junte as batatas e o cheiro verde.</li>
    <li>Coloque na pressão suavemente, conte 5 minutos após a panela de pressão começar a apitar e desligue o fogo.</li>
</ol>";

$post_title = "Carne de panela com batata";
$post_author = "admin";
$post_category_id = 1;
$post_status = "published";
$post_image = "admin/images/carne-de-panela-com-batata.png";
$post_tag = "receita";
$post_content = $receita;

$query = "INSERT INTO Posts(post_category_id, post_title, post_author, post_date, post_image, post_content, post_tag, post_status)";
$query .= "VALUES({$post_category_id},'{$post_title}','{$post_author}',now(),'{$post_image}','{$post_content}','{$post_tag}','{$post_status}')";

$create_post_query = mysqli_query($connection, $query);

// Receita

$receita = "<h2>Ingredientes:</h2>
<p>Massa:</p>
<ul>
  <li>4 ovos</li>
  <li>4 colheres (sopa) de chocolate em pó</li>
  <li>2 colheres (sopa) de manteiga</li>
  <li>3 xícaras (chá) de farinha de trigo</li>
  <li>2 xícaras (chá) de açúcar</li>
  <li>2 colheres (sopa) de fermento</li>
  <li>1 xícara (chá) de leite</li>
</ul>
<p>Calda:</p>
<ul>
  <li>2 colheres (sopa) de manteiga</li>
  <li>7 colheres (sopa) de chocolate em pó</li>
  <li>2 latas de creme de leite com soro</li>
  <li>3 colheres (sopa) de açúcar</li>
</ul>
<h2>Modo de Preparo:</h2>
<p>Massa:</p>
<ol>
  <li>Em um liquidificador adicione os ovos, o chocolate em pó, a manteiga, a farinha de trigo, o açúcar e o leite, depois bata por 5 minutos;</li>
  <li>Adicione o fermento e misture com uma espátula delicadamente;</li>
  <li>Em uma forma untada, despeje a massa e asse em forno médio (180 ºC) preaquecido por cerca de 40 minutos. Não se esqueça de usar uma forma alta para essa receita: como leva duas colheres de fermento, ela cresce bastante! Outra solução pode ser colocar apenas uma colher de fermento e manter a sua receita em uma forma pequena.</li>
</ol>
<p>Calda:</p>
<ol>
  <li>Em uma panela, aqueça a manteiga e misture o chocolate em pó até que esteja homogêneo;</li>
  <li>Acrescente o creme de leite e misture bem até obter uma consistência cremosa;</li>
  <li>Desligue o fogo e acrescente o açúcar.</li>
</ol>";

$post_title = "Bolo de Chocolate";
$post_author = "user";
$post_category_id = 2;
$post_status = "published";
$post_image = "admin/images/bolo-de-chocolate.png";
$post_tag = "receita";
$post_content = $receita;

$query = "INSERT INTO Posts(post_category_id, post_title, post_author, post_date, post_image, post_content, post_tag, post_status)";
$query .= "VALUES({$post_category_id},'{$post_title}','{$post_author}',now(),'{$post_image}','{$post_content}','{$post_tag}','{$post_status}')";

$create_post_query = mysqli_query($connection, $query);

// Receita

$receita = "<h2>Ingredientes:</h2>
<ul>
	<li>6 colheres (sopa) bem cheias, de margarina sem sal</li>
	<li>¾ xícara (chá) achocolatado</li>
	<li>½ xícara (chá) chocolate em pó</li>
	<li>1 e ¼ xícara (chá) farinha de trigo</li>
	<li>2 xícaras (chá) açúcar</li>
	<li>4 ovos</li>
	<li>2 pitadas de sal</li>
	<li>1 tablete de chocolate meio amargo picado em cubinhos</li>
</ul>

<h2>Modo de preparo:</h2>
<ol>
	<li>Misture os ovos e o açúcar;</li>
	<li>Em seguida, agregue todos os outros ingredientes até formar um creme uniforme;</li>
	<li>Despeje em uma assadeira, forrada com papel-manteiga e leve ao forno médio por 40 minutos;</li>
	<li>O brownie estará pronto quando a parte de cima estiver levemente corada e, ao se espetar um palito, ele esteja levemente úmido (devido ao chocolate derretido);</li>
	<li>Corte em quadrados ainda quente e sirva com uma bola de sorvete de creme, ou congele num saquinho para freezer.</li>
	<li>Para descongelar, coloque o brownie num prato de sobremesa e aqueça no micro-ondas, potência alta, por 1 minuto.</li>
</ol>";

$post_title = "Brownie";
$post_author = "admin";
$post_category_id = 2;
$post_status = "published";
$post_image = "admin/images/brownie.png";
$post_tag = "receita";
$post_content = $receita;

$query = "INSERT INTO Posts(post_category_id, post_title, post_author, post_date, post_image, post_content, post_tag, post_status)";
$query .= "VALUES({$post_category_id},'{$post_title}','{$post_author}',now(),'{$post_image}','{$post_content}','{$post_tag}','{$post_status}')";

$create_post_query = mysqli_query($connection, $query);

// Receita

$receita = "<h2>Ingredientes</h2>
<ul>
  <li>125 g de manteiga sem sal em temperatura ambiente</li>
  <li>3/4 xícara de açúcar</li>
  <li>1/2 xícara de açúcar mascavo</li>
  <li>1 ovo</li>
  <li>1 e 3/4 de xícara de farinha de trigo</li>
  <li>1 colher (chá) de fermento em pó</li>
  <li>300 g de chocolate meio amargo picado</li>
  <li>1 colher (chá) de essência de baunilha</li>
  <li>Para fazer cookie de chocolate acrescentar 1/4 xícara de chocolate em pó</li>
</ul>
<h2>Modo de Preparo</h2>
<ol>
  <li>Misture a manteiga, açúcar mascavo, açúcar, essência de baunilha (e chocolate em pó, se for fazer cookies com base de chocolate)</li>
  <li>Adicione o ovo batido aos poucos e misture bem</li>
  <li>Acrescente a farinha aos poucos e misture bem (pode ser na mão ou na batedeira planetária)</li>
  <li>Por último, adicione o fermento e misture só para incorporá-lo à massa</li>
  <li>Depois da massa bem misturada, adicione o chocolate picado</li>
  <li>Forme bolinhas pequenas e asse em forno preaquecido, sobre papel manteiga, por aproximadamente 15 a 20 minutos (250° C)</li>
</ol>";

$post_title = "Cookies";
$post_author = "admin";
$post_category_id = 2;
$post_status = "published";
$post_image = "admin/images/cookies.png";
$post_tag = "receita";
$post_content = $receita;

$query = "INSERT INTO Posts(post_category_id, post_title, post_author, post_date, post_image, post_content, post_tag, post_status)";
$query .= "VALUES({$post_category_id},'{$post_title}','{$post_author}',now(),'{$post_image}','{$post_content}','{$post_tag}','{$post_status}')";

$create_post_query = mysqli_query($connection, $query);

// Receita

$receita = "<h2>Ingredientes:</h2>
<p><strong>Pudim:</strong></p>
<ul>
  <li>1 lata de leite condensado</li>
  <li>1 lata de leite (medida da lata de leite condensado)</li>
  <li>3 ovos inteiros</li>
</ul>

<p><strong>Calda:</strong></p>
<ul>
  <li>1 xícara (chá) de açúcar</li>
  <li>½ xícara de água</li>
</ul>

<h2>Modo de preparo:</h2>
<p><strong>Pudim:</strong></p>
<ol>
  <li>Primeiro, bata bem os ovos no liquidificador;</li>
  <li>Acrescente o leite condensado e o leite, e bata novamente.</li>
</ol>

<p><strong>Calda:</strong></p>
<ol>
  <li>Derreta o açúcar na panela até ficar moreno, acrescente a água e deixe engrossar;</li>
  <li>Coloque em uma forma redonda e despeje a massa do pudim por cima;</li>
  <li>Asse em forno médio por 45 minutos, com a assadeira redonda dentro de uma maior com água;</li>
  <li>Espete um garfo para ver se está bem assado.</li>
  <li>Deixe esfriar e desenforme.</li>
</ol>
";

$post_title = "Pudim";
$post_author = "admin";
$post_category_id = 2;
$post_status = "published";
$post_image = "admin/images/pudim.png";
$post_tag = "receita";
$post_content = $receita;

$query = "INSERT INTO Posts(post_category_id, post_title, post_author, post_date, post_image, post_content, post_tag, post_status)";
$query .= "VALUES({$post_category_id},'{$post_title}','{$post_author}',now(),'{$post_image}','{$post_content}','{$post_tag}','{$post_status}')";

$create_post_query = mysqli_query($connection, $query);
