// Pretest Quiz Builder
let questionCount = 0;

function addQuestion() {
  const type = document.getElementById("questionType").value;
  if (!type) {
      showToast('error', 'Action Failed', 'Please select a question type first.');
    return;
  }

  if (questionCount >= 10) {
      showToast('error', 'Action Failed', 'You can only add up to 10 questions.');
    return;
  }

  questionCount++;

  let questionHTML = `
    <div class="question-card" id="q${questionCount}">
      <div class="question-header">
        <h6>Question ${questionCount}</h6>
        <button class="remove-btn" onclick="removeQuestion(${questionCount})" title="Delete Question">
          <svg class="bi bi-trash3" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"></path>
</svg>
        </button>
      </div>

      <div class="form-group">
        <label for="questionText${questionCount}">Question Text</label>
        <input id="questionText${questionCount}" type="text" class="form-control" placeholder="Enter your question">
      </div>`;

  // True/False Question
if (type === "truefalse") {
  questionHTML += `
    <div class="form-group">
      <label>Options</label>
      <div class="row g-2">
        <div class="col-12 col-md-6">
          <div class="form-check">
            <input id="q${questionCount}true" class="form-check-input" type="radio" name="q${questionCount}" value="true">
            <label class="form-check-label" for="q${questionCount}true">True</label>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="form-check">
            <input id="q${questionCount}false" class="form-check-input" type="radio" name="q${questionCount}" value="false">
            <label class="form-check-label" for="q${questionCount}false">False</label>
          </div>
        </div>
      </div>
    </div>

    <div class="form-group correct-answer">
      <label for="correctAnswer${questionCount}">Correct Answer</label>
      <select id="correctAnswer${questionCount}" class="form-select">
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
        <div class="col-12 col-md-6">
          <input id="q${questionCount}opt1" type="text" class="form-control" placeholder="Option A">
        </div>
        <div class="col-12 col-md-6">
          <input id="q${questionCount}opt2" type="text" class="form-control" placeholder="Option B">
        </div>
        <div class="col-12 col-md-6">
          <input id="q${questionCount}opt3" type="text" class="form-control" placeholder="Option C">
        </div>
        <div class="col-12 col-md-6">
          <input id="q${questionCount}opt4" type="text" class="form-control" placeholder="Option D">
        </div>
      </div>
    </div>

    <div class="form-group correct-answer">
      <label for="correctAnswer${questionCount}">Correct Answer</label>
      <select id="correctAnswer${questionCount}" class="form-select">
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
        <label for="correctAnswer${questionCount}">Correct Answer</label>
        <input id="correctAnswer${questionCount}" type="text" class="form-control" placeholder="Enter correct answer">
      </div>`;
  }

  questionHTML += `</div>`; // close card

  document.getElementById("quiz-container").insertAdjacentHTML("beforeend", questionHTML);
}

function removeQuestion(id) {
  document.getElementById("q" + id).remove();
  questionCount--;
}

function fetchPreTestQuestions() {
  const questions = [];

  for (let i = 1; i <= questionCount; i++) {
    const questionEl = document.getElementById(`q${i}`);
    if (!questionEl) continue; // skip removed questions

    const questionText = document.getElementById(`questionText${i}`)?.value || "";
    const type = (() => {
      if (document.getElementById(`q${i}true`) || document.getElementById(`q${i}false`)) return "truefalse";
      if (document.getElementById(`q${i}opt1`)) return "multiple";
      return "fillblank";
    })();

    let options = [];
    let correctAnswer = "";

    if (type === "truefalse") {
      options = ["True", "False"];
      correctAnswer = document.getElementById(`correctAnswer${i}`)?.value || "";
    }

    if (type === "multiple") {
      options = [
        document.getElementById(`q${i}opt1`)?.value || "",
        document.getElementById(`q${i}opt2`)?.value || "",
        document.getElementById(`q${i}opt3`)?.value || "",
        document.getElementById(`q${i}opt4`)?.value || "",
      ];
      correctAnswer = document.getElementById(`correctAnswer${i}`)?.value || "";
    }

    if (type === "fillblank") {
      correctAnswer = document.getElementById(`correctAnswer${i}`)?.value || "";
    }

    questions.push({
      id: i,
      type,
      questionText,
      options,
      correctAnswer,
    });
  }

  console.log("📋 Pre Test Questions:", questions);
  return questions;
}


