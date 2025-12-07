// MQUESTADMINSIDE/public/assets/js/postquizBuilder.js

// Post Test Quiz Builder
let questionCount2 = 0;

function addQuestion2() {
  const type = document.getElementById("questionType2").value;
  if (!type || type === "Select Type") {
      showToast('error', 'Action Failed', 'Please select a question type first.');
    return;
  }

  if (questionCount2 >= 10) {
      showToast('error', 'Action Failed', 'You can only add up to 10 questions.');
    return;
  }

  questionCount2++;

  let questionHTML = `
    <div class="question-card" id="q2-${questionCount2}" data-type="${type}">
      <input type="hidden" id="q2-type-${questionCount2}" value="${type}">
      <div class="question-header">
        <h6>Question ${questionCount2}</h6>
        <button class="remove-btn" onclick="removeQuestion2(${questionCount2})" title="Delete Question">
          <svg class="bi bi-trash3" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995z"/>
          </svg>
        </button>
      </div>

      <div class="form-group">
        <label for="questionText2-${questionCount2}">Question Text</label>
        <input id="questionText2-${questionCount2}" type="text" class="form-control" placeholder="Enter your question">
      </div>`;

  // True/False Question
  if (type === "truefalse") {
    questionHTML += `
      <div class="form-group">
        <label>Options</label>
        <div class="row g-2">
          <div class="col-12 col-md-6">
            <div class="form-check">
              <input id="q2-${questionCount2}true" class="form-check-input" type="radio" name="q2-${questionCount2}" value="true">
              <label class="form-check-label" for="q2-${questionCount2}true">True</label>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="form-check">
              <input id="q2-${questionCount2}false" class="form-check-input" type="radio" name="q2-${questionCount2}" value="false">
              <label class="form-check-label" for="q2-${questionCount2}false">False</label>
            </div>
          </div>
        </div>
      </div>

      <div class="form-group correct-answer">
        <label for="correctAnswer2-${questionCount2}">Correct Answer</label>
        <select id="correctAnswer2-${questionCount2}" class="form-select">
          <option value="true">True</option>
          <option value="false">False</option>
        </select>
      </div>`;
  }
    
  // Multiple Choice Question
  if (type === "multiple") {
    questionHTML += `
      <div class="form-group">
        <label>Options</label>
        <div class="row g-2">
          <div class="col-12 col-md-6"><input id="q2-${questionCount2}opt1" type="text" class="form-control" placeholder="Option A"></div>
          <div class="col-12 col-md-6"><input id="q2-${questionCount2}opt2" type="text" class="form-control" placeholder="Option B"></div>
          <div class="col-12 col-md-6"><input id="q2-${questionCount2}opt3" type="text" class="form-control" placeholder="Option C"></div>
          <div class="col-12 col-md-6"><input id="q2-${questionCount2}opt4" type="text" class="form-control" placeholder="Option D"></div>
        </div>
      </div>

      <div class="form-group correct-answer">
        <label for="correctAnswer2-${questionCount2}">Correct Answer</label>
        <select id="correctAnswer2-${questionCount2}" class="form-select">
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
          <option value="D">D</option>
        </select>
      </div>`;
  }

  // Fill in the Blank Question
  if (type === "fillblank") {
    questionHTML += `
      <div class="form-group correct-answer">
        <label for="correctAnswer2-${questionCount2}">Correct Answer</label>
        <input id="correctAnswer2-${questionCount2}" type="text" class="form-control" placeholder="Enter correct answer">
      </div>`;
  }

  questionHTML += `</div>`; // close card

  document.getElementById("quiz-container2").insertAdjacentHTML("beforeend", questionHTML);
}

function removeQuestion2(id) {
  const el = document.getElementById("q2-" + id);
  if (el) {
    el.remove();
    questionCount2--;
  }
}

function fetchPostTestQuestions() {
  const questions = [];

  for (let i = 1; i <= questionCount2; i++) {
    const questionEl = document.getElementById(`q2-${i}`);
    if (!questionEl) continue;

    const questionText = document.getElementById(`questionText2-${i}`)?.value || "";
    const type = document.getElementById(`q2-type-${i}`)?.value || "";

    let options = [];
    let correctAnswer = "";

    if (type === "truefalse") {
      correctAnswer = document.getElementById(`correctAnswer2-${i}`)?.value || "";
      options = ["True", "False"];
    }

    if (type === "multiple") {
      options = [
        document.getElementById(`q2-${i}opt1`)?.value || "",
        document.getElementById(`q2-${i}opt2`)?.value || "",
        document.getElementById(`q2-${i}opt3`)?.value || "",
        document.getElementById(`q2-${i}opt4`)?.value || "",
      ];
      correctAnswer = document.getElementById(`correctAnswer2-${i}`)?.value || "";
    }

    if (type === "fillblank") {
      correctAnswer = document.getElementById(`correctAnswer2-${i}`)?.value || "";
    }

    console.log(`Fetching question ${i}:`, { type, questionText, options, correctAnswer });

    questions.push({
      id: i,
      type,
      questionText,
      options,
      correctAnswer,
    });
  }

  console.log("📋 Post Test Questions:", questions);
  return questions;
}


function loadQuestions2FromLocalStorage() {
  try {
    const lessonData = JSON.parse(localStorage.getItem('lessonData'));
    
    if (!lessonData || !lessonData.posttest_questions || lessonData.posttest_questions.length === 0) {
      console.log("No post-test questions found in localStorage");
      return;
    }

    // Clear existing questions
    const quizContainer = document.getElementById("quiz-container2");
    if (!quizContainer) {
      console.error("quiz-container2 element not found!");
      return;
    }
    quizContainer.innerHTML = "";
    questionCount2 = 0;
    
    // Store the original question type
    const originalQuestionType = document.getElementById("questionType2")?.value || "";
    
    // Load each question
    lessonData.posttest_questions.forEach((questionData, index) => {
      // Set the question type
      const typeSelect = document.getElementById("questionType2");
      if (typeSelect) {
        typeSelect.value = questionData.type;
      }
      
      // Add the question
      addQuestion2();
      
      // Get the current question ID (should be the latest added)
      const currentId = questionCount2;
      
      // Populate basic question data
      const questionTextEl = document.getElementById(`questionText2-${currentId}`);
      if (questionTextEl) {
        questionTextEl.value = questionData.questionText || "";
      }
      
      // Handle different question types
      switch(questionData.type) {
        case "truefalse":
          const correctAnswerSelect = document.getElementById(`correctAnswer2-${currentId}`);
          if (correctAnswerSelect) {
            correctAnswerSelect.value = questionData.correctAnswer || "true";
          }
          break;
          
        case "multiple":
          // Populate options
          if (questionData.options && Array.isArray(questionData.options)) {
            for (let i = 0; i < 4; i++) {
              const optEl = document.getElementById(`q2-${currentId}opt${i + 1}`);
              if (optEl && questionData.options[i] !== undefined) {
                optEl.value = questionData.options[i];
              }
            }
          }
          
          // Set correct answer
          const mcCorrectAnswer = document.getElementById(`correctAnswer2-${currentId}`);
          if (mcCorrectAnswer) {
            mcCorrectAnswer.value = questionData.correctAnswer || "A";
          }
          break;
          
        case "fillblank":
          const fibAnswer = document.getElementById(`correctAnswer2-${currentId}`);
          if (fibAnswer) {
            fibAnswer.value = questionData.correctAnswer || "";
          }
          break;
      }
    });
    
    // Reset the question type dropdown
    const typeSelect = document.getElementById("questionType2");
    if (typeSelect) {
      typeSelect.value = originalQuestionType;
    }
    
    console.log(`✅ Loaded ${lessonData.posttest_questions.length} post-test questions from localStorage`);
    
  } catch (error) {
    console.error("Error loading post-test questions from localStorage:", error);
    showToast('error', 'Load Failed', 'Failed to load saved post-test questions.');
  }
}
