<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MussumbaEduca - Alfabetização e reforço escolar para crianças">
    <meta name="author" content="MussumbaEduca">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap 5.3 CSS -->
    <link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>MussumbaEduca - Alfabetização e Reforço Escolar</title>
  </head>

  <body id="page-top">
    <!-- Barra de navegação -->
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-custom">
        <div class="container">
          <a class="navbar-brand" href="#page-top">
            <i class="fas fa-book-reader me-2"></i>MussumbaEduca
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="#page-top">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sobre">Sobre Nós</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#metodologia">Metodologia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#atividades">Atividades</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#depoimentos">Depoimentos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contato">Contato</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Educa.php">SISA</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Carrossel -->
    <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="imagens/R.jpeg" alt="Crianças estudando" class="d-block w-100">
          <div class="carousel-caption">
            <h1>Alfabetização Lúdica e Eficaz</h1>
            <p>Ajudamos crianças a desenvolver habilidades de leitura e escrita de forma divertida e envolvente.</p>
            <a class="btn btn-lg btn-primary mt-3" href="#contato" role="button">Agende uma Aula</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="imagens/t.jpeg" alt="Atividades de reforço" class="d-block w-100">
          <div class="carousel-caption">
            <h1>Reforço Escolar Personalizado</h1>
            <p>Programas adaptados às necessidades específicas de cada criança para superar dificuldades de aprendizagem.</p>
            <a class="btn btn-lg btn-primary mt-3" href="#metodologia" role="button">Conheça Nossa Metodologia</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="imagens/y.jpeg" alt="Jogos educativos" class="d-block w-100">
          <div class="carousel-caption">
            <h1>Aprendizagem Interativa</h1>
            <p>Utilizamos jogos e atividades interativas para estimular o interesse pela leitura e conhecimento.</p>
            <a class="btn btn-lg btn-primary mt-3" href="#atividades" role="button">Ver Atividades</a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
    </div>

    <!-- Seção Sobre Nós -->
    <section id="sobre" class="section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="display-4 mb-4">Sobre o MussumbaEduca</h2>
            <p class="lead">Somos especialistas em alfabetização e reforço escolar para crianças de 3 a 12 anos.</p>
            <p>O MussumbaEduca nasceu com a missão de ajudar crianças a desenvolverem suas habilidades de leitura, escrita e raciocínio lógico-matemático, proporcionando um ambiente acolhedor e estimulante para o aprendizado.</p>
            <p>Nossa equipe é formada por educadores experientes e apaixonados pelo desenvolvimento infantil, que utilizam metodologias modernas e lúdicas para despertar o prazer pelo conhecimento.</p>
            <p>Oferecemos atendimento personalizado, respeitando o ritmo de cada criança e valorizando suas potencialidades.</p>
            <a href="#contato" class="btn btn-primary mt-3">Fale Conosco</a>
          </div>
          <div class="col-lg-6">
            <img src="imagens/R.jpeg" alt="Crianças aprendendo" class="img-fluid rounded shadow">
          </div>
        </div>
      </div>
    </section>

    <!-- Contador de Resultados -->
    <section class="counter-section">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-3 counter-box">
            <p class="counter-number">+1200</p>
            <p class="counter-text">Alunos Atendidos</p>
          </div>
          <div class="col-md-3 counter-box">
            <p class="counter-number">+95%</p>
            <p class="counter-text">Índice de Aprovação</p>
          </div>
          <div class="col-md-3 counter-box">
            <p class="counter-number">+15</p>
            <p class="counter-text">Anos de Experiência</p>
          </div>
          <div class="col-md-3 counter-box">
            <p class="counter-number">+30</p>
            <p class="counter-text">Educadores Qualificados</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Metodologia -->
    <section id="metodologia" class="section section-colored">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="display-4">Nossa Metodologia</h2>
          <p class="lead">Uma abordagem única para o desenvolvimento infantil</p>
        </div>
        
        <div class="row">
          <div class="col-md-4 text-center mb-4">
            <div class="methodology-icon">
              <i class="fas fa-brain"></i>
            </div>
            <h3>Aprendizagem Multissensorial</h3>
            <p>Estimulamos diferentes sentidos durante o processo de aprendizagem, facilitando a fixação do conhecimento e respeitando os diferentes estilos de aprendizagem.</p>
          </div>
          
          <div class="col-md-4 text-center mb-4">
            <div class="methodology-icon">
              <i class="fas fa-puzzle-piece"></i>
            </div>
            <h3>Abordagem Lúdica</h3>
            <p>Utilizamos jogos, brincadeiras e atividades práticas para tornar o processo de aprendizagem divertido e significativo para as crianças.</p>
          </div>
          
          <div class="col-md-4 text-center mb-4">
            <div class="methodology-icon">
              <i class="fas fa-user-graduate"></i>
            </div>
            <h3>Ensino Personalizado</h3>
            <p>Adaptamos nossas estratégias de ensino de acordo com as necessidades e características individuais de cada criança.</p>
          </div>
        </div>
        
        <div class="row mt-4">
          <div class="col-md-4 text-center mb-4">
            <div class="methodology-icon">
              <i class="fas fa-chart-line"></i>
            </div>
            <h3>Avaliação Contínua</h3>
            <p>Monitoramos constantemente o progresso dos alunos, ajustando as estratégias conforme necessário para garantir um avanço consistente.</p>
          </div>
          
          <div class="col-md-4 text-center mb-4">
            <div class="methodology-icon">
              <i class="fas fa-heart"></i>
            </div>
            <h3>Acolhimento Emocional</h3>
            <p>Criamos um ambiente seguro e acolhedor, onde a criança se sente confiante para explorar, errar e aprender.</p>
          </div>
          
          <div class="col-md-4 text-center mb-4">
            <div class="methodology-icon">
              <i class="fas fa-users"></i>
            </div>
            <h3>Parceria com a Família</h3>
            <p>Trabalhamos em estreita colaboração com os pais, fornecendo orientações e ferramentas para que o aprendizado continue em casa.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Faixas Etárias -->
    <section class="section">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="display-4">Atendemos Todas as Idades</h2>
          <p class="lead">Programas especializados para cada fase do desenvolvimento infantil</p>
        </div>
        
        <div class="row">
          <div class="col-md-4 text-center mb-4">
            <div class="age-icon">3-5</div>
            <h3>Educação Infantil</h3>
            <p>Atividades lúdicas que desenvolvem as bases para a alfabetização, explorando a linguagem oral, consciência fonológica e coordenação motora.</p>
            <a href="#contato" class="btn btn-outline-primary">Saiba Mais</a>
          </div>
          
          <div class="col-md-4 text-center mb-4">
            <div class="age-icon">6-8</div>
            <h3>Alfabetização</h3>
            <p>Métodos eficazes para a aquisição da leitura e escrita, respeitando o ritmo de cada criança e tornando o processo natural e prazeroso.</p>
            <a href="#contato" class="btn btn-outline-primary">Saiba Mais</a>
          </div>
          
          <div class="col-md-4 text-center mb-4">
            <div class="age-icon">9-12</div>
            <h3>Reforço Escolar</h3>
            <p>Apoio personalizado nas disciplinas escolares, com foco em desenvolver autonomia de estudo e consolidar conhecimentos fundamentais.</p>
            <a href="#contato" class="btn btn-outline-primary">Saiba Mais</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Atividades -->
    <section id="atividades" class="section section-colored">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="display-4">Nossas Atividades</h2>
          <p class="lead">Conheça algumas das atividades desenvolvidas no MussumbaEduca</p>
        </div>
        
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="/api/placeholder/400/250" class="card-img-top" alt="Oficina de leitura">
              <div class="card-body">
                <h4 class="card-title">Oficina de Leitura</h4>
                <p class="card-text">Atividades que despertam o prazer pela leitura, trabalhando interpretação de texto e vocabulário.</p>
              </div>
              <div class="card-footer bg-white border-top-0">
                <a href="#contato" class="btn btn-sm btn-primary">Agendar Participação</a>
              </div>
            </div>
          </div>
          
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="/api/placeholder/400/250" class="card-img-top" alt="Jogos matemáticos">
              <div class="card-body">
                <h4 class="card-title">Jogos Matemáticos</h4>
                <p class="card-text">Aprender matemática de forma divertida, desenvolvendo raciocínio lógico e resolução de problemas.</p>
              </div>
              <div class="card-footer bg-white border-top-0">
                <a href="#contato" class="btn btn-sm btn-primary">Agendar Participação</a>
              </div>
            </div>
          </div>
          
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="/api/placeholder/400/250" class="card-img-top" alt="Escrita criativa">
              <div class="card-body">
                <h4 class="card-title">Escrita Criativa</h4>
                <p class="card-text">Estimulamos a expressão escrita através de atividades criativas, como criação de histórias e jornais.</p>
              </div>
              <div class="card-footer bg-white border-top-0">
                <a href="#contato" class="btn btn-sm btn-primary">Agendar Participação</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="/api/placeholder/400/250" class="card-img-top" alt="Artes integradas">
              <div class="card-body">
                <h4 class="card-title">Artes Integradas</h4>
                <p class="card-text">Utilizamos música, teatro e artes plásticas para desenvolver habilidades de expressão e criatividade.</p>
              </div>
              <div class="card-footer bg-white border-top-0">
                <a href="#contato" class="btn btn-sm btn-primary">Agendar Participação</a>
              </div>
            </div>
          </div>
          
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="/api/placeholder/400/250" class="card-img-top" alt="Ciências na prática">
              <div class="card-body">
                <h4 class="card-title">Ciências na Prática</h4>
                <p class="card-text">Experimentos simples que despertam a curiosidade científica e o espírito investigativo nas crianças.</p>
              </div>
              <div class="card-footer bg-white border-top-0">
                <a href="#contato" class="btn btn-sm btn-primary">Agendar Participação</a>
              </div>
            </div>
          </div>
          
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="/api/placeholder/400/250" class="card-img-top" alt="Tecnologia educativa">
              <div class="card-body">
                <h4 class="card-title">Tecnologia Educativa</h4>
                <p class="card-text">Utilizamos recursos tecnológicos como apoio à aprendizagem, com apps e jogos educativos selecionados.</p>
              </div>
              <div class="card-footer bg-white border-top-0">
                <a href="#contato" class="btn btn-sm btn-primary">Agendar Participação</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Depoimentos -->
    <section id="depoimentos" class="section">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="display-4">Depoimentos</h2>
          <p class="lead">O que as famílias dizem sobre o MussumbaEduca</p>
        </div>
        
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="testimonial">
              <div class="testimonial-text mb-3">
                Em apenas dois meses, meu filho já apresentou uma grande evolução na leitura. A metodologia lúdica fez toda a diferença para despertar seu interesse pelos livros.
              </div>
              <div class="d-flex align-items-center">
                <img src="/api/placeholder/50/50" class="rounded-circle me-3" alt="Ana Silva">
                <div>
                  <h5 class="mb-0">Ana Silva</h5>
                  <small class="text-muted">Mãe do Pedro, 7 anos</small>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-4 mb-4">
            <div class="testimonial">
              <div class="testimonial-text mb-3">
                Minha filha tinha muita dificuldade em matemática e estava desmotivada. As aulas de reforço com abordagem lúdica transformaram sua relação com a matéria.
              </div>
              <div class="d-flex align-items-center">
                <img src="/api/placeholder/50/50" class="rounded-circle me-3" alt="Carlos Mendes">
                <div>
                  <h5 class="mb-0">Carlos Mendes</h5>
                  <small class="text-muted">Pai da Júlia, 9 anos</small>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-4 mb-4">
            <div class="testimonial">
              <div class="testimonial-text mb-3">
                Como professora, reconheço a qualidade do trabalho desenvolvido no MussumbaEduca. Os métodos são embasados cientificamente e respeitam o ritmo de cada criança.
              </div>
              <div class="d-flex align-items-center">
                <img src="/api/placeholder/50/50" class="rounded-circle me-3" alt="Patrícia Alves">
                <div>
                  <h5 class="mb-0">Patrícia Alves</h5>
                  <small class="text-muted">Professora e mãe do Lucas, 5 anos</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contato -->
    <section id="contato" class="section section-colored">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <h2 class="display-4 mb-4">Entre em Contato</h2>
            <p class="lead">Estamos prontos para ajudar seu filho a desenvolver todo o seu potencial</p>
            
            <div class="mt-4">
              <h5><i class="fas fa-map-marker-alt me-2 text-primary"></i> Localização</h5>
              <p>Catambor<br>Catambor</p>
              
              <h5><i class="fas fa-phone me-2 text-primary"></i> Telefone</h5>
              <p>940858723</p>
              
              <h5><i class="fas fa-envelope me-2 text-primary"></i> E-mail</h5>
              <p>MussumbaEduca@gmail.com</p>
              
              <h5><i class="fas fa-clock me-2 text-primary"></i> Horário de Funcionamento</h5>
              <p>Segunda a Sexta: 8h às 18h<br>Sábado: 8h às 12h</p>
              
              <div class="mt-4">
                <a href="#" class="me-3 text-primary"><i class="fab fa-facebook-f fa-2x"></i></a>
                <a href="#" class="me-3 text-primary"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="#" class="me-3 text-primary"><i class="fab fa-youtube fa-2x"></i></a>
              </div>
            </div>
          </div>
          
          <div class="col-lg-6">
            <div class="contact-form">
              <h3 class="mb-4">Agende uma Avaliação Gratuita</h3>
              <form>
                <div class="mb-3">
                  <label for="nome" class="form-label">Nome dos Pais/Responsáveis</label>
                  <input type="text" class="form-control" id="nome" placeholder="Seu nome completo">
                </div>
                
                <div class="mb-3">
                  <label for="nomeAluno" class="form-label">Nome da Criança</label>
                  <input type="text" class="form-control" id="nomeAluno" placeholder="Nome da criança">
                </div>
                
                <div class="mb-3">
                  <label for="idade" class="form-label">Idade da Criança</label>
                  <select class="form-select" id="idade">
                    <option selected>Selecione a idade</option>
                    <option>3-5 anos</option>
                    <option>6-8 anos</option>
                    <option>9-12 anos</option>
                  </select>
                </div>
                
                <div class="mb-3">
                  <label for="email" class="form-label">E-mail</label>
                  <input type="email" class="form-control" id="email" placeholder="Seu e-mail">
                </div>
                
                <div class="mb-3">
                  <label for="telefone" class="form-label">Telefone</label>
                  <input type="tel" class="form-control" id="telefone" placeholder="Seu telefone">
                </div>
                
                <div class="mb-3">
                  <label for="mensagem" class="form-label">Necessidades específicas ou comentários</label>
                  <textarea class="form-control" id="mensagem" rows="3" placeholder="Descreva as necessidades de aprendizagem da criança"></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Enviar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-4 mb-lg-0">
            <h4 class="text-white mb-4">MussumbaEduca</h4>
            <p class="text-white-50">Desde 2010 transformando o aprendizado de milhares de crianças através de métodos inovadores e abordagens personalizadas.</p>
            <div class="mt-4">
              <a href="#" class="me-3 text-white-50"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="me-3 text-white-50"><i class="fab fa-instagram"></i></a>
              <a href="#" class="me-3 text-white-50"><i class="fab fa-youtube"></i></a>
              <a href="#" class="me-3 text-white-50"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          
          <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
            <h5 class="text-white mb-4">Links Rápidos</h5>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="#page-top" class="text-white-50">Início</a></li>
              <li class="mb-2"><a href="#sobre" class="text-white-50">Sobre Nós</a></li>
              <li class="mb-2"><a href="#metodologia" class="text-white-50">Metodologia</a></li>
              <li class="mb-2"><a href="#atividades" class="text-white-50">Atividades</a></li>
              <li class="mb-2"><a href="#depoimentos" class="text-white-50">Depoimentos</a></li>
              <li class="mb-2"><a href="#contato" class="text-white-50">Contato</a></li>
            </ul>
          </div>
          
          <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
            <h5 class="text-white mb-4">Serviços</h5>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="#" class="text-white-50">Alfabetização</a></li>
              <li class="mb-2"><a href="#" class="text-white-50">Reforço Escolar</a></li>
              <li class="mb-2"><a href="#" class="text-white-50">Oficinas Lúdicas</a></li>
              <li class="mb-2"><a href="#" class="text-white-50">Orientação a Pais</a></li>
              <li class="mb-2"><a href="#" class="text-white-50">Avaliação Pedagógica</a></li>
            </ul>
          </div>
          
          <div class="col-lg-4">
            <h5 class="text-white mb-4">Boletim Informativo</h5>
            <p class="text-white-50">Receba dicas educacionais e novidades sobre nossas atividades</p>
            <form class="mt-3">
              <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Seu e-mail" aria-label="Seu e-mail" aria-describedby="button-addon2">
                <button class="btn btn-primary" type="button" id="button-addon2">Inscrever</button>
              </div>
            </form>
          </div>
        </div>
        
        <hr class="my-4 bg-light opacity-25">
        
        <div class="row align-items-center">
          <div class="col-md-6 small text-white-50">
            &copy; 2025 MussumbaEduca. Todos os direitos reservados.
          </div>
          <div class="col-md-6 text-md-end small">
            <a href="#" class="text-white-50 me-3">Política de Privacidade</a>
            <a href="#" class="text-white-50">Termos de Uso</a>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap 5.3 JS Bundle with Popper -->
    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>