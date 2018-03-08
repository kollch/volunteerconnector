var nameOfEvent = "";
var locationOfEvent = "";
var dateOfEvent = "";
var timeOfEvent = "";
var eventDescription = "";

function handlepostClick(event){
	var NewModal = document.getElementById('add-event-modal-backdrop');
	NewModal.classList.remove('hidden');
	NewModal = document.getElementById('add-event-modal');
	NewModal.classList.remove('hidden');
}

function handleCancelPostClick(event){
	var inputTemp = document.getElementById('event-name-input');
	inputTemp.value = "";
	inputTemp = document.getElementById('event-location-input');
	inputTemp.value = "";
	inputTemp = document.getElementById('event-date-input');
	inputTemp.value = "";
	inputTemp = document.getElementById('event-time-input');
	inputTemp.value = "";
	inputTemp = document.getElementById('event-description-input');
	inputTemp.value = "";
	var NewModal = document.getElementById('add-event-modal-backdrop');
	NewModal.classList.add('hidden');
	var formNewform = document.getElementById('add-event-modal');
	formNewform.classList.add('hidden');
}

var postButton = document.getElementById('post-button');
postButton.addEventListener('click', handlepostClick);

var  modalCancelClick = document.getElementById('modal-cancel');
modalCancelClick.addEventListener('click', handleCancelPostClick);
