# Demo Online

Você pode acessar o sistema online aqui:  
[https://macho-pistachio.localsite.io](https://macho-pistachio.localsite.io)

É um Live Link do LocalWP, então tem que estar rodando no meu computador para conseguir acessar.

# 📌 Introdução

O objetivo deste projeto foi desenvolver uma aplicação wordpress com foco em **fidelidade ao layout Figma** e **abordagem mobile-first**. A aplicação deveria conter:

- Um tema customizado Wordpress com layout fiel ao figma, funcionando em todos os navegadores mais utilizados atualmente;
- Ajustes de conteúdos dinâmicos, podendo ser atualizado pelo painel da plataforma por meio do plugin Advanced Custom Fields;

O front-end foi desenvolvido com **Wordpress**, e com o tema **Underscores** e plugin **ACF**, com atenção especial à **responsividade, customização pelo painel e organização do código**.

# 🧠 Planejamento

Iniciei o projeto com uma fase de estudo e planejamento detalhado:

- Análise do layout no Figma;
- Estimativas de esforço por funcionalidade;

Esse planejamento me ajudou a manter o foco durante o desenvolvimento e entregas diárias.

# 🛠 Tecnologias Utilizadas

### Front-end

- **Wordpress**
- **Underscores** (tema base)
- **ACF** (plugin Advanced Custom Fields)

### Outros

- **Git** (versionamento e controle de código)
- **LocalWP** (ambiente de desenvolvimento local)
- **MySQL** (banco de dados relacional)
- **Nginx** (servidor web)

# ⚙️ Desenvolvimento

### Cronograma de execução:

1. Estudo, planejamento e estrutura inicial do front-end;
2. Interface e primeiros template-parts;
3. Carrossel, formulário e footer;
4. Deploy com Live Link, testes manuais e documentação.

Durante o desenvolvimento, busquei equilibrar **entregas funcionais**, **qualidade visual** e **bom uso do plugin ACF**, mesmo em aspectos que exigiram aprendizado durante a execução.

## 📐 HTML e Componentização

- Estrutura semântica e acessível;
- Reaproveitamento de código sempre que possível;
- Template parts e css distintos, mantidos separados por clareza;
- Escolhas feitas visando legibilidade e manutenibilidade do projeto.

🛠️ _Próximos passos_: planejo modularizar mais alguns template-parts, e padronizar classes para facilitar escalabilidade em projetos maiores.

## 🎨 CSS e Responsividade

- Uso de CSS e separação por arquivos;
- Layout mobile simplificado (sem imagens pesadas e com fontes 20% menores);
- Compatibilidade testada em diferentes navegadores (Chrome, Firefox e Edge).

🛠️ _Melhoria contínua_: colocar variáveis globais com medidas responsivas para escalabilidade futura.

## ♿ Acessibilidade

- Utilização do leitor de tela **NVDA** para testes;
- `aria-roles`, elementos semânticos e estrutura acessível.

Acredito na importância de construir interfaces inclusivas e acessíveis, e sigo aprendendo constantemente sobre esse tema.

## 🔧 Configuração do Advanced Custom Fields

- Organização dos Field Groups por template-part;
- Site altamente customizavel pelo painel administrativo;
- Facilidade para criação de planos e posts;
- Facilidade para manutenção da página.

🛠️ _Melhoria futura_: colocar campos e criar conteúdo para as páginas de posts.

# 🧗‍♂️ Desafios e Soluções

- **Gerenciar o tempo e escopo do projeto**
  → Planejamento inicial com entregas divididas por dia.

- **Fidelidade ao layout no Figma**
  → Criação de CSS com foco no detalhamento visual e responsividade.

- **ACF com Planos e Posts customizaveis**
  → Criação dos campos, tipos de post e organização geral do ACF. Coloquei apenas os planos como Post Type e os Posts já são o Post Type padrão.

- **JS do GoodThings**
  → Funcionando e responsivo, mas poderia ter função de arrastar para mexer o slider.

# ✅ Resultados Finais

A aplicação permite:

- Visualizar a página fiel ao figma;
- Customizar e fazer alteração de conteúdo pelo painel administrativo;
- Acessar de qualquer dispositivo com navegador e internet, desde que estaja rodando o localWP;
- Usar com boa acessibilidade e responsividade.

# 🧾 Conclusão

Este projeto consolidou para mim a importância de:

- Planejamento antes da implementação;
- Desenvolvimento **mobile-first** com foco em responsividade;
- Validação visual **fiel ao Figma**;
- Boas práticas de **acessibilidade**, **usabilidade** e **semântica**;
- Ter uma boa organização no ACF.

Apesar dos desafios enfrentados e pontos que ainda posso melhorar (aprofundamento em ACF e organização) e terminar a parte de envio de e-mail do formulário com algum plugin do Wordpress, e considero que o projeto atinge seus objetivos e mostra meu comprometimento com entregas funcionais, organizadas e com qualidade de código.

## Informações adicionais do Projeto

- 📅 Início: 25 de setembro de 2025
- ✅ Conclusão: 30 de setembro de 2025
- ⏱️ Tempo estimado de desenvolvimento: 30 horas em 4 dias

Com foco em:

- Boas práticas de acessibilidade e semântica HTML
- Mobile first e design responsivo
- Organização dos campos do ACF
- Alta customização e facilidade de alteração do conteúdo
- Estrutura de código organizada e reutilizável

# Informações adicionais sobre o tema WordPress

Desenvolvido com base no Underscores (_s) e Advanced Custom Fields (ACF).

## Como usar

1. Copie a pasta do tema para `wp-content/themes/`.
2. Ative o tema no painel WordPress.
3. Certifique-se de que o plugin ACF está ativo.
4. Importe os campos personalizados com o arquivo acf-fields.json.

## Para importar os campos do ACF

1. Acesse o painel WordPress.
2. Vá até **Custom Fields > Ferramentas**.
3. Clique em **Importar JSON**.
4. Selecione o arquivo `acf-fields.json` incluído neste repositório.
5. Clique em **Importar**.

Isso criará os campos personalizados necessários para o funcionamento correto do tema.

## Observações

- Tema desenvolvido como parte do um teste técnico.
- Compatível com WordPress versão 6.8.2.