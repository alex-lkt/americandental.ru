export default class SimpleTest {
  constructor(props) {
    this._questions = props.questions;
    this._onFinish = props.onFinish;
    this._containerSel = props.container;
  }

  init = () => {
    this._containerNode = document.querySelector(this._containerSel);
  };

  startTesting = () => {
    this._clearContainer();
    this._currentQuestionIdx = 0;
    this._result = [];
    this._questionNode = document.createElement('p');
    this._containerNode.appendChild(this._questionNode);

    this._answersListNode = document.createElement('ul');
    this._containerNode.appendChild(this._answersListNode);

    this._showNextQuestion();
  }

  _showNextQuestion = () => {
    this._updateQuestion();
    this._updateAnswers();
  }

  _updateQuestion = () => {
    this._questionNode.textContent = this._questions[this._currentQuestionIdx].question;
  }

  _updateAnswers = () => {
    this._answersListNode.innerHTML = ''; // should clear in diff way

    this._questions[this._currentQuestionIdx].answers.forEach((item, idx) => {
      const listItem = document.createElement('li');
      const button = document.createElement('button');
      button.textContent = item;
      button.setAttribute('data-answer', idx);
      button.addEventListener('click', this._handleAnswer);

      listItem.appendChild(button);
      this._answersListNode.appendChild(listItem);
    });
  }

  _clearContainer = () => {
    this._containerNode.innerHTML = '';
  }

  _handleAnswer = (evt) => {
    this._result.push(evt.target.getAttribute('data-answer'));
    this._currentQuestionIdx ++;
    if(this._currentQuestionIdx < this._questions.length) {
      this._showNextQuestion();
      return;
    }
    this._clearContainer();
    this._onFinish(this._result.reduce((res, item, idx) => {
      res.push({
        question: this._questions[idx].question,
        answer: this._questions[idx].answers[item]
      });
      return res;
    }, []));
  }
}