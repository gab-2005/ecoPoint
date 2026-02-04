document.addEventListener('DOMContentLoaded', async () => {

  /* ================= ELEMENTOS ================= */
  const states = {
    intro: document.querySelector('.quiz-intro'),
    questions: document.querySelector('.quiz-questions'),
    result: document.querySelector('.quiz-result')
  };

  const currentQuestionEl = document.querySelector('.current-question');
  const totalQuestionsEl = document.querySelector('.total-questions');
  const questionTextEl = document.querySelector('.question-text');
  const answersContainer = document.querySelector('.answers-container');

  const startBtn = document.querySelector('.start-quiz');
  const prevBtn = document.querySelector('.prev-question');
  const nextBtn = document.querySelector('.next-question');
  const restartBtn = document.querySelector('.restart-quiz');

  /* ================= ESTADO ================= */
  let questions = [];
  let currentIndex = 0;
  let userAnswers = [];
  let score = 0;

  /* ================= API ================= */
  try {
    const apiUrl = (typeof BASE_URL !== 'undefined' ? BASE_URL : '') + '/api/quizController.php';
    const res = await fetch(apiUrl);
    if (!res.ok) throw new Error('Erro ao carregar perguntas');

    questions = await res.json();
    if (!questions.length) throw new Error('Nenhuma pergunta encontrada');

    userAnswers = new Array(questions.length).fill(null);
    totalQuestionsEl.textContent = questions.length;

  } catch (err) {
    states.intro.innerHTML = `
      <p class="quiz-description" style="color:#e74c3c">${err.message}</p>
      <button class="quiz-btn quiz-btn-primary" onclick="location.reload()">Tentar novamente</button>
    `;
    return;
  }

  /* ================= FUNÇÕES ================= */
  function showState(name) {
    Object.values(states).forEach(s => s.classList.remove('active'));
    states[name].classList.add('active');
  }

  function renderQuestion(index) {
    currentIndex = index;
    const q = questions[index];

    currentQuestionEl.textContent = index + 1;
    questionTextEl.textContent = q.question;
    answersContainer.innerHTML = '';

    q.answers.forEach((answer, i) => {
      const option = document.createElement('div');
      option.className = 'answer-option';
      if (userAnswers[index] === i) option.classList.add('selected');

      option.textContent = answer.text;
      option.addEventListener('click', () => selectAnswer(i));

      answersContainer.appendChild(option);
    });

    updateNav();
  }

  function selectAnswer(i) {
    userAnswers[currentIndex] = i;
    renderQuestion(currentIndex);
  }

  function updateNav() {
    prevBtn.classList.toggle('disabled', currentIndex === 0);
    nextBtn.classList.toggle('disabled', userAnswers[currentIndex] === null);

    nextBtn.innerHTML = currentIndex === questions.length - 1
      ? `<span>Finalizar</span><i class="fas fa-check"></i>`
      : `<span>Próxima</span><i class="fas fa-arrow-right"></i>`;
  }

  function showResult() {
    score = userAnswers.reduce((acc, ans, i) => {
      if (ans !== null && questions[i].answers[ans].correct) acc++;
      return acc;
    }, 0);

    const percent = Math.round((score / questions.length) * 100);

    document.querySelector('.score-value').textContent = score;
    document.querySelector('.score-total').textContent = `/ ${questions.length}`;
    document.querySelector('.result-percentage').textContent = `${percent}%`;

    const msg = document.querySelector('.result-message');
    msg.textContent =
      percent === 100 ? 'Excelente! Você é um expert!'
      : percent >= 70 ? 'Muito bem! Ótimo conhecimento!'
      : percent >= 50 ? 'Bom trabalho!'
      : 'Continue aprendendo!';

    showState('result');
  }

  /* ================= EVENTOS ================= */
  startBtn.addEventListener('click', () => {
    currentIndex = 0;
    userAnswers.fill(null);
    showState('questions');
    renderQuestion(0);
  });

  prevBtn.addEventListener('click', () => {
    if (currentIndex > 0) renderQuestion(currentIndex - 1);
  });

  nextBtn.addEventListener('click', () => {
    if (nextBtn.classList.contains('disabled')) return;
    currentIndex < questions.length - 1
      ? renderQuestion(currentIndex + 1)
      : showResult();
  });

  restartBtn.addEventListener('click', () => {
    currentIndex = 0;
    userAnswers.fill(null);
    score = 0;
    currentQuestionEl.textContent = '0';
    showState('intro');
  });

  /* ================= INIT ================= */
  showState('intro');
  currentQuestionEl.textContent = '0';
});
