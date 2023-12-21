# Desafio Técnico Desenvolvedor Backend

## Domínio do Problema

Imagine que você está trabalhando com um sistema de aplicação de provas online realizado em laboratório. Neste cenário, os alunos realizam as provas através de um sistema chamado Proesc, utilizando computadores. Todo o processo de monitoramento e registro de dados das atividades dos alunos é gerenciado por uma interface frontend. Seu desafio como desenvolvedor backend é projetar e modelar uma API RESTful que seja capaz de suportar e interagir com as necessidades especificadas no arquivo JSON `prova.json`.

Este arquivo contém estruturas de dados críticas para o funcionamento do sistema, incluindo informações do aluno, respostas às questões, tempo gasto em cada questão e dados de navegação durante a prova. Sua tarefa é desenvolver uma API Rest que possa processar esses dados de forma eficiente, garantindo integridade, segurança e performance adequada.

## Desafios Técnicos a Serem Superados

- **Gerenciamento de Alta Concorrência**:
  Garanta que o sistema possa lidar com um alto volume de provas sendo realizadas simultaneamente por diversas instituições. Isso envolve otimizar a performance e prevenir a corrupção de dados em condições de uso intensivo.

- **Análise de Integridade Acadêmica**:
  Desenvolva uma funcionalidade que permita aos gestores educacionais identificar possíveis casos de cola entre os alunos. Isso inclui a geração de relatórios baseados em critérios como:
  - Taxa de acertos similares em questões idênticas entre diferentes alunos.
  - Análise de padrões no tempo de resolução das questões, correlacionando-os com as taxas de acerto.

**⚠️ CONSIDERE TEMPO GASTO NO ARQUIVO `prova.json` EM MILISEGUNDOS ⚠️**

## Critérios de Avaliação

Ao analisar sua solução para este desafio técnico, focaremos nos seguintes aspectos chave:

- **Resolução de Problemas e Modelagem de Software**:
  Avaliaremos a eficácia com que você aborda e resolve os problemas apresentados. Isso inclui a forma como você modela e estrutura sua solução, a clareza do seu código e a aplicação de práticas de engenharia de software para criar um sistema robusto e confiável.

- **Performance e Otimização**:
  A performance é crucial, especialmente em sistemas que gerenciam grandes volumes de dados e têm muitos usuários simultâneos. Avaliaremos como sua aplicação lida com essas demandas, incluindo a eficiência do código e a otimização de recursos.

- **Escalabilidade e Práticas de Desenvolvimento**:
    - **Capacidade de Escalabilidade**: Avaliaremos sua habilidade em projetar um sistema que não apenas atenda às necessidades atuais, mas que também possa escalar eficientemente.
    - **Adesão às Melhores Práticas de Desenvolvimento**: Esperamos que sua solução siga as melhores práticas de desenvolvimento, incluindo:
        - KISS (Keep It Simple, Stupid)
        - DRY (Don't Repeat Yourself)
        - Princípios SOLID

## O que Fará Brilhar Nossos Olhos ✨

- **TDD (Test-Driven Development)**

- **Arquitetura Limpa**

## Tecnologias

- PHP
- LARAVEL
- POSTGRESQL
- Docker & docker-compose
- REDIS (Opcional)


## Entrega
Para entregar sua solução, faça um repositorio com sua solução e nos envie o link respondendo o e-mail recebido.
Em caso de dúvida, não hesite em nos contatar através do e-mail recebido ou para [lorena@proesc.com]() :)

**Importante**:
Não mecione o nome da proesc no seu repositório