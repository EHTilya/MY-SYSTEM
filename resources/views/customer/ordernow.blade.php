<!--Code By Webdevtrick ( https://webdevtrick.com )-->
@extends('customer/master')
@section('content')
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/orderNow.css">
</head>

<body>

<div class="content">
  <div class="container custom-order3">
  <div class="content__inner">
    <div class="container">
      <h2 class="content__title">Bonyeza Kitufe 'Mbele' au 'Nyuma' </h2>
    </div>
    @if (session('fail'))
    <div class="alert alert-danger">
      {{ session('fail')}}
    </div>     
    @endif
    <div class="container overflow-hidden">
      <div class="multisteps-form">
        <div class="row">
          <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
            <div class="multisteps-form__progress">
              <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">Jumla Kuu</button>
              <button class="multisteps-form__progress-btn" type="button" title="Address">Anuani</button>
              <button class="multisteps-form__progress-btn" type="button" title="Order Info">Malipo</button>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-8 m-auto">
            <form method="POST" action="/orderplace" class="multisteps-form__form">
              @csrf
              <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
          
                <div class="multisteps-form__content">
                  <div class="cl-sm-10">
                    <br>
                    <table class="table">
                        <tbody>
                          <tr>
                            <td><b>Jumla</b></td>
                            <td>Tsh {{$total}}</td>
                          </tr>
                          <tr>
                            <td><b>Kodi</b></td>
                            <td>Tsh 100</td>
                          </tr>
                          <tr>
                            <td><b>Gharama ya Kuletewa Nguo Ulipo</b></td>
                            <td>Tsh 2000</td>
                          </tr>
                          <tr>
                            <td><b>Jumla Kuu</b></td>
                            <td>Tsh {{$total+2100}}</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
                  
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Mbele</button>
                  </div>
                </div>
              </div>
 
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <br>
                <div class="multisteps-form__content">
                  <div class="form-group col-md-6">
                    <input type="text" name="address" class="form-control" placeholder="Weka anuani" required><br>
  
                  </div>
                    
                  <div class="form-group col-md-6">
                    <input type="number" name="phone" class="form-control" placeholder="Weka namba ya simu" required><br>
                  </div>
                  
                  <div class="form-group">
                    <textarea name="description" id="1" cols="60" rows="5" placeholder="Maelezo ya ziada" required></textarea>
                </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Nyuma</button>
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Mbele</button>
                  </div>
                </div>
              </div>
 
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <br>
                <div class="multisteps-form__content">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="pwd">Control Namba</label><br>
                      <input  type="radio"  checked >
                       <span id="demo" ></span>
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <input type="number" name="payment_no" class="form-control" placeholder="Enter payment Number" required><br>
                  </div>
                  <br>
                       <script>
                        document.getElementById('demo').innerHTML= random(574155645, 999454545)
                       function random(min, max){
                         var step1= max -min + 1;
                         var step2 = Math.random() * step1;
                         var result =Math.floor(step2) + min;
                         return result;
                        }
                        </script>
                        <div>
                          <br>
                          <strong><p>Namna ya Kufanya Malipo</p></strong>
                        
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        M-Pesa</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
        <p>1.Piga *150*00#</p>
        <p>2.Chagua namba(4) "Lipa kwa M-Pesa"</p>
        <p>3.Chagua (5) "Malipo ya serikali"</p>
        <p>4.Ingiza namba ya kumbukumbu ya Malipo (Control Number)</p>
        <p>5.Ingiza kiasi cha pesa unachotakiwa kulipa</p>
        <p>6.Ingiza namba ya siri kuhakiki</p>
        <p>7.Thibitisha kwa kuchagua (1)</p>

        .</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        Tigo pesa</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
        <p>1.Piga *150*01#</p>
        <p>2.Chagua namba(4) "Lipa Bili"</p>
        <p>3.Chagua (5) "Malipo ya serikali"</p>
        <p>4.Ingiza namba ya kumbukumbu ya Malipo (Control Number)</p>
        <p>5.Ingiza kiasi cha pesa unachotakiwa kulipa</p>
        <p>6.Ingiza namba ya siri kuhakiki</p>
        </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        Airtel Money</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">
        <p>1.Piga *150*60#</p>
        <p>2.Chagua namba(4) "Lipa Bili"</p>
        <p>3.Chagua (5) "Malipo ya serikali"</p>
        <p>4.Chagua namba 1 "Weka namba ya Kumbukumbu"</p>
        <p>5.Ingiza namba ya kumbukumbu ya malipo (control number)</p>
        <p>6.Ingiza kiasi cha pesa</p>
        <p>6.Weka namba ya siri</p>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
        T-Pesa</a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse">
      <div class="panel-body">
        <p>1. Piga *150*71#</p>
        <p> 2. Chagua namba (5) “Lipia Bili”</p>
         <p>3. Chagua (3) “Malipo ya Serikali” </p>
         <p>4. Ingiza kumbukumbu namba (control number)</p>
         <p>5. Ingiza kiasi</p>
         <p>6. Ingiza namba ya siri</p>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
        Halo Pesa</a>
      </h4>
    </div>
    <div id="collapse5" class="panel-collapse collapse">
      <div class="panel-body">
        <p>1. Piga *150*88#</p>
        <p> 2. Chagua namba (5) “Lipia Bili”</p>
         <p>3. Chagua (5) “Malipo ya Serikali” </p>
         <p>4. Weka namba ya kumbukumbu ya malipo (control number))</p>
         <p>5. Ingiza kiasi cha pesa</p>
         <p>6. Weka namba ya siri </p>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
        Kwa njia ya kuweka Fedha Benki (Direct Bank Deposit).
        </a>
      </h4>
    </div>
    <div id="collapse6" class="panel-collapse collapse">
      <div class="panel-body">
        <p>Pia Malipo yanaweza kufanyika kwa kuweka fedha katika benki zilizojiunga na GePG, mfano: NMB / 
          CRDB / TPB/ NBC/ PBZ/ DTB/ EXIM/ TIB/ STANBIC, DCB na BoT kwa kupitia matawi ya benki, 
          mawakala wa Benki na njia nyingine za malipo zitolewazo na Benki. Tumia Namba ya kumbukumbu 
          ya Malipo (Control Number) uliyopewa unapofanya Malipo</p>
    </div>
  </div>
 
  
</div> 

                    </div> 
<br><br>
                      </div>
                        <div class="row">
                          <div class="button-row d-flex mt-4 col-12">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Nyuma</button>
                      <button class="btn btn-success" type="submit" title="Send">Tuma</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
			<script>
				const DOMstrings = {
  stepsBtnClass: 'multisteps-form__progress-btn',
  stepsBtns: document.querySelectorAll(`.multisteps-form__progress-btn`),
  stepsBar: document.querySelector('.multisteps-form__progress'),
  stepsForm: document.querySelector('.multisteps-form__form'),
  stepsFormTextareas: document.querySelectorAll('.multisteps-form__textarea'),
  stepFormPanelClass: 'multisteps-form__panel',
  stepFormPanels: document.querySelectorAll('.multisteps-form__panel'),
  stepPrevBtnClass: 'js-btn-prev',
  stepNextBtnClass: 'js-btn-next' };
 
 
const removeClasses = (elemSet, className) => {
 
  elemSet.forEach(elem => {
 
    elem.classList.remove(className);
 
  });
 
};
 
const findParent = (elem, parentClass) => {
 
  let currentNode = elem;
 
  while (!currentNode.classList.contains(parentClass)) {
    currentNode = currentNode.parentNode;
  }
 
  return currentNode;
 
};
 
const getActiveStep = elem => {
  return Array.from(DOMstrings.stepsBtns).indexOf(elem);
};
 
const setActiveStep = activeStepNum => {
 
  removeClasses(DOMstrings.stepsBtns, 'js-active');
 
  DOMstrings.stepsBtns.forEach((elem, index) => {
 
    if (index <= activeStepNum) {
      elem.classList.add('js-active');
    }
 
  });
};
 
const getActivePanel = () => {
 
  let activePanel;
 
  DOMstrings.stepFormPanels.forEach(elem => {
 
    if (elem.classList.contains('js-active')) {
 
      activePanel = elem;
 
    }
 
  });
 
  return activePanel;
 
};
 
const setActivePanel = activePanelNum => {
 
  removeClasses(DOMstrings.stepFormPanels, 'js-active');
 
  DOMstrings.stepFormPanels.forEach((elem, index) => {
    if (index === activePanelNum) {
 
      elem.classList.add('js-active');
 
      setFormHeight(elem);
 
    }
  });
 
};
 
const formHeight = activePanel => {
 
  const activePanelHeight = activePanel.offsetHeight;
 
  DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;
 
};
 
const setFormHeight = () => {
  const activePanel = getActivePanel();
 
  formHeight(activePanel);
};
 
DOMstrings.stepsBar.addEventListener('click', e => {
 
  const eventTarget = e.target;
 
  if (!eventTarget.classList.contains(`${DOMstrings.stepsBtnClass}`)) {
    return;
  }
 
  const activeStep = getActiveStep(eventTarget);
 
  setActiveStep(activeStep);
 
  setActivePanel(activeStep);
});
 
DOMstrings.stepsForm.addEventListener('click', e => {
 
  const eventTarget = e.target;
 
  if (!(eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`) || eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`)))
  {
    return;
  }
 
  const activePanel = findParent(eventTarget, `${DOMstrings.stepFormPanelClass}`);
 
  let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(activePanel);
 
  if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
    activePanelNum--;
 
  } else {
 
    activePanelNum++;
 
  }
 
  setActiveStep(activePanelNum);
  setActivePanel(activePanelNum);
 
});
 
window.addEventListener('load', setFormHeight, false);
 
window.addEventListener('resize', setFormHeight, false);
 
 
const setAnimationType = newType => {
  DOMstrings.stepFormPanels.forEach(elem => {
    elem.dataset.animation = newType;
  });
};
 
//changing animation
const animationSelect = document.querySelector('.pick-animation__select');
 
animationSelect.addEventListener('change', () => {
  const newAnimationType = animationSelect.value;
 
  setAnimationType(newAnimationType);
});
			</script>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 
<script  src="function.js"></script>
 
</body>
</html>	
@endsection
