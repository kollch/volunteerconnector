// cache all of the events
var event_cache = [].slice.call(document.getElementsByClassName("event"));


function handleSearch(event){
  var searchString = document.getElementById("navbar-search-input").value.toLowerCase();
  var main = document.querySelector("main");
  var header = document.getElementsByClassName("posts-header")[0];
  matches = []
  // loop through all the cached events and push it if it contains the substring
  for (var event of event_cache)
    if (event.textContent.toLowerCase().indexOf(searchString) >= 0)
      matches.push(event);
  // remove all contents of main
  main.innerHTML = "";
  // readd the header
  main.appendChild(header);
  // add the elements that matched the search query
  for (var event of matches)
    main.appendChild(event);
}

function handlesigninClick(event){
  var NewModal = document.getElementById('login-modal-backdrop');
  NewModal.classList.remove('hidden');
  var userForm = document.getElementById('login-modal');
  userForm.classList.remove('hidden');
}
function handleregisterClick(event){
  var NewModal = document.getElementById('register-modal-backdrop');
  NewModal.classList.remove('hidden');
  var userForm = document.getElementById('register-modal');
  userForm.classList.remove('hidden');
}

function handleCharityUserClick(event){
  var NewModal = document.getElementById('register-modal-backdrop');
  NewModal.classList.add('hidden');
  var userForm = document.getElementById('register-modal');
  userForm.classList.add('hidden');
  NewModal = document.getElementById('charity-register-modal-backdrop');
  NewModal.classList.remove('hidden');
  userForm = document.getElementById('charity-register-modal');
  userForm.classList.remove('hidden');
}

function handleVolunteerUserClick(event){
  var NewModal = document.getElementById('register-modal-backdrop');
  NewModal.classList.add('hidden');
  var userForm = document.getElementById('register-modal');
  userForm.classList.add('hidden');
  NewModal = document.getElementById('volunteer-register-modal-backdrop');
  NewModal.classList.remove('hidden');
  userForm = document.getElementById('volunteer-register-modal');
  userForm.classList.remove('hidden');
}

var formTextTemp = "";
var formAuthorTemp = "";
var	searchTextTemp = "";
var registerUserName = "";
var registerPassword = "";
var charityName = "";
var charityPassword = "";
var charityDescription = "";
var charityLogo = "";
var loginUserName = "";
var loginPassword = "";


function handleTextInput(event){
  formTextTemp = event.target.value;
}

function handleAuthorInput(event){
  formAuthorTemp = event.target.value;
}

function handleUsernameInput(event){
  loginUserName = event.target.value;
}

function handlePasswordInput(event){
  loginPassword = event.target.value;
}

function handleVolunteerRegisterUsernameInput(event){
  registerUserName = event.target.value;
}

function handleVolunteerRegisterPasswordInput(event){
  registerPassword = event.target.value;
}

function handleCharityRegisterNameInput(event){
  charityName = event.target.value;
}

function handleCharityRegisterPasswordInput(event){
  charityPassword = event.target.value;
}

function handleCharityDescriptionInput(event){
  charityDescription = event.target.value;
}

function handleCharityLogoInput (event){
  charityLogo = event.target.value;
}

function handleCancelLoginClick(event){
  var inputTemp = document.getElementById('username-input');
  inputTemp.value = "";
  inputTemp = document.getElementById('password-input');
  inputTemp.value = "";
  loginUserName = "";
  loginPassword = "";
  var NewModal = document.getElementById('login-modal-backdrop');
  NewModal.classList.add('hidden');
  var formNewform = document.getElementById('login-modal');
  formNewform.classList.add('hidden');
}

function handleCancelRegisterClick(event){
  var NewModal = document.getElementById('register-modal-backdrop');
  NewModal.classList.add('hidden');
  var formNewform = document.getElementById('register-modal');
  formNewform.classList.add('hidden');
}

function handleCancelCharityRegisterClick(event){
  var inputTemp = document.getElementById('charity-password-input');
  inputTemp.value = "";
  inputTemp = document.getElementById('charity-logo-input');
  inputTemp.value = "";
  inputTemp = document.getElementById('charity-description-input');
  inputTemp.value = "";
  inputTemp = document.getElementById('charity-name-input');
  inputTemp.value = "";
  charityName = "";
  charityPassword = "";
  charityDescription = "";
  charityLogo = "";
  var NewModal = document.getElementById('charity-register-modal-backdrop');
  NewModal.classList.add('hidden');
  var userForm = document.getElementById('charity-register-modal');
  userForm.classList.add('hidden');
}

function handleCancelVolunteerRegisterClick(event){
  var inputTemp = document.getElementById('volunteer-username-input');
  inputTemp.value = "";
  inputTemp = document.getElementById('volunteer-password-input');
  inputTemp.value = "";
  registerUserName = "";
  registerPassword = "";
  var NewModal = document.getElementById('volunteer-register-modal-backdrop');
  NewModal.classList.add('hidden');
  var userForm = document.getElementById('volunteer-register-modal');
  userForm.classList.add('hidden');
}

var signinButton = document.getElementById('signin-button');
signinButton.addEventListener('click', handlesigninClick);

var registerButton = document.getElementById('register-button');
registerButton.addEventListener('click', handleregisterClick);

var usernameTextInput = document.getElementById('username-input');
usernameTextInput.addEventListener('input', handleUsernameInput);

var passwordTextInput = document.getElementById('password-input');
passwordTextInput.addEventListener('input', handlePasswordInput);

var volunteerRegisterUsernameTextInput = document.getElementById('volunteer-username-input');
volunteerRegisterUsernameTextInput.addEventListener('input', handleVolunteerRegisterUsernameInput);

var volunteerRegisterPasswordTextInput = document.getElementById('volunteer-password-input');
volunteerRegisterPasswordTextInput.addEventListener('input', handleVolunteerRegisterPasswordInput);

var charityRegisterPasswordTextInput = document.getElementById('charity-password-input');
charityRegisterPasswordTextInput.addEventListener('input', handleCharityRegisterPasswordInput);

var charityRegisterCharityNameTextInput = document.getElementById('charity-name-input');
charityRegisterCharityNameTextInput.addEventListener('input', handleCharityRegisterNameInput);

var charityRegisterLogoTextInput = document.getElementById('charity-logo-input');
charityRegisterLogoTextInput.addEventListener('input', handleCharityLogoInput);

var charityRegisterDescriptionTextInput = document.getElementById('charity-description-input');
charityRegisterDescriptionTextInput.addEventListener('input', handleCharityDescriptionInput);

var loginCancelClick = document.getElementsByClassName('modal-cancel-button');
for (var i = 0; i < loginCancelClick.length; i++) {
  loginCancelClick[i].addEventListener('click', handleCancelLoginClick);
}

var registerCancelClick = document.getElementsByClassName('modal-cancel-button');
for (var i = 0; i < registerCancelClick.length; i++) {
  registerCancelClick[i].addEventListener('click', handleCancelRegisterClick);
}

var loginModalExClick = document.getElementsByClassName('modal-close-button');
for (var i = 0; i < loginModalExClick.length; i++){
  loginModalExClick[i].addEventListener('click', handleCancelLoginClick);
}

var registerModalExClick = document.getElementsByClassName('modal-close-button');
for (var i = 0; i < registerModalExClick.length; i++){
  registerModalExClick[i].addEventListener('click', handleCancelRegisterClick);
}

var charityRegisterClick = document.getElementsByClassName('modal-charity-button');
for (var i = 0; i < charityRegisterClick.length; i++){
  charityRegisterClick[i].addEventListener('click', handleCharityUserClick);
}

var charityRegisterModalExClick = document.getElementsByClassName('modal-close-button');
for (var i = 0; i < charityRegisterModalExClick.length; i++){
  charityRegisterModalExClick[i].addEventListener('click', handleCancelCharityRegisterClick);
}

var charityRegisterCancelClick = document.getElementsByClassName('modal-cancel-button');
for (var i = 0; i < charityRegisterCancelClick.length; i++) {
  charityRegisterCancelClick[i].addEventListener('click', handleCancelCharityRegisterClick);
}

var volunteerRegisterClick = document.getElementsByClassName('modal-volunteer-button');
for (var i = 0; i < volunteerRegisterClick.length; i++){
  volunteerRegisterClick[i].addEventListener('click', handleVolunteerUserClick);
}

var volunteerRegisterModalExClick = document.getElementsByClassName('modal-close-button');
for (var i = 0; i < volunteerRegisterModalExClick.length; i++){
  volunteerRegisterModalExClick[i].addEventListener('click', handleCancelVolunteerRegisterClick);
}

var volunteerRegisterCancelClick = document.getElementsByClassName('modal-cancel-button');
for (var i = 0; i < volunteerRegisterCancelClick.length; i++) {
  volunteerRegisterCancelClick[i].addEventListener('click', handleCancelVolunteerRegisterClick);
}

var searchButton = document.getElementById('navbar-search-button');
searchButton.addEventListener('click', handleSearch);

document.getElementById('navbar-search-input').onkeypress = function (e) {
  if (e.keyCode == '13')
    handleSearch();
}
