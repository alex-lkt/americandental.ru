<div class="available">
  <div class="available__servHolder">
    <div class="available__serv">
      <p class="available__servText">Мы гарантируем цены на</p>
      <p class="available__servBullet">38% ниже чем у остальных</p>
      <img class="available__servLogo" src=<?= SITE_TEMPLATE_PATH."/img/available/1.webp" ?> alt="">
    </div>
    
    <div class="available__serv">
      <p class="available__servText">Предоставляем возможность</p>
      <p class="available__servBullet">рассрочки без процентов</p>
      <img class="available__servLogo" src=<?= SITE_TEMPLATE_PATH. "/img/available/1.webp" ?> alt="">
    </div>
  </div>

  <div class="available__cards">
    <div class="available__card">
      <img class="available__cardImg" src=<?= SITE_TEMPLATE_PATH."/img/available/3.webp" ?> alt="">
      <p class="available__cardTitle">All-on-4</p>
      <p class="available__cardPrice">от 120 000 ₽</p>
      <p class="available__cardNote">импланты + адаптационный протез</p>
      
      <a class="available__cardButton btn-page" href="#divForm" id="btnForm21">
        <p class="available__buttonText">Забронировать скидку</p>
      </a>    
    </div>
    
    <div class="available__card">
      <img class="available__cardImg" src=<?= SITE_TEMPLATE_PATH."/img/available/4.webp" ?> alt="">
      <p class="available__cardTitle">All-on-6</p>
      <p class="available__cardPrice">от 160 000 ₽</p>
      <p class="available__cardNote">импланты + адаптационный протез</p>
      
      <a class="available__cardButton btn-page" href="#divForm" id="btnForm22">
        <p class="available__buttonText">Забронировать скидку</p>
      </a>    
    </div>
    
    <div class="available__card">
      <img class="available__cardImg" src=<?= SITE_TEMPLATE_PATH."/img/available/5.webp" ?> alt="">
      <p class="available__cardTitle">Скуловая имплантация</p>
      <p class="available__cardPrice">от 150 000 ₽</p>
      <p class="available__cardNote">импланты + адаптационный протез</p>
      
      <a class="available__cardButton btn-page" href="#divForm" id="btnForm22">
        <p class="available__buttonText">Забронировать скидку</p>
      </a>    
    </div> 
  </div>
</div>


<style>
.available {
  background: rgba(0, 0, 0, .05);
}

.available__servHolder {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 100px;
  padding: 20px 0;
}

.available__serv {
  position: relative;

  display: flex;
  flex-direction: column;
  justify-content: center;

  width: 450px; height: 100px;
  max-width: 60%;
  padding: 0 30px;

  border: 1px solid rgba(0, 0, 0, .2);
  border-radius: 5px;
  background: white;
}

.available__servText {
  font-size: 20px;
  font-weight: 100;
  margin: 0; padding: 0;
}

.available__servBullet {
  font-size: 20px;
  font-weight: 700;
  margin: 0; padding: 0;
  color: #4298C9;
}

.available__servLogo {
  position: absolute;
  right: -30px;
  width: 120px;
}

.available__cards {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}

.available__card {
  max-width: 100%;
  margin: 20px; padding: 20px;
  background: white;
  box-shadow: 2px 2px 5px rgba(0, 0, 0, .1);
  border-radius: 10px;
}

.available__cardImg {
  width: 300px;
  max-width: 100%;
  height: 200px;
  object-fit: cover;
  object-position: center;
  border-radius: 10px;
}

.available__cardTitle { 
  text-align: center;

  font-size: 18px;
  font-weight: 600;
  margin: 20px;
}

.available__cardPrice {
  text-align: center;

  margin: 0; padding: 16px;
  border: 1px solid rgba(0, 0, 0, .1);
  border-radius: 10px;

  font-size: 24px;
  font-weight: 700;
  color:  #4298C9;
}

.available__cardNote {
  text-align: center;
  margin: 20px; padding: 0;
  color: rgba(0, 0, 0, .2);
}

.available__cardButton {
  display: block;
  position: relative;
  overflow: hidden;

  background: linear-gradient(to right, #d70909, #910505, #b91414, #9d0606);
  color: white;
  border-radius: 10px;
  padding: 6px;

  cursor: pointer;
  transition: .3s;
}

.available__cardButton:hover {
  transform: scale(1.04);
  color: white;
}
.available__cardButton:active {transform: scale(0.98)}

.available__buttonText {
  text-align: center;
  margin: 0; padding: 6px 0;
  font-weight: 600;
  font-size: 18px;

  border: 1px dashed rgba(255, 255, 255, .4);
  border-radius: 6px;
}
</style>